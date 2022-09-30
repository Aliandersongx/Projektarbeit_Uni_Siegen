<?php

namespace App\Services;

use App\Models\Question;
use Illuminate\Support\Str;

class QuestionService {
    public const LOCALE_DE = 'de';
    public const LOCALE_EN = 'en';
    public const LOCALE_ARAB = 'ar';
    public const LOCALE_UKRAINE = 'ur';

    public const CATEGORY_LOCATION = 1;
    public const CATEGORY_APPLICATION = 2;
    public const CATEGORY_COMMUNICATION = 3;
    public const CATEGORY_COSTS = 4;
    public const CATEGORY_WORK = 5;
    public const CATEGORY_HEALTH = 6;
    public const CATEGORY_GENERAL = 7;

    public const TYPE_TEXT = 'text';
    public const TYPE_MAPS = 'maps';

    /**
     * @param string $question
     * @param string $locale
     * @return array
     */
    public function processQuestion(string $question, string $locale = self::LOCALE_DE): array
    {
        /**
         * Explode the sentence into single words to get the question matching most words in the question
         */
        $questionWords = explode(" ", $question);

        /**
         * Make all words in the question lower case for easier searching
         */
        for($i = 0; $i < sizeof($questionWords); $i++) {
            $questionWords[$i] = Str::lower($questionWords[$i]);
        }

        $allQuestions = Question::query()->where('locale', $locale)->get();

        $highestMatchingQuestion = null;
        $highestMatchingCount = 0;
        $currentMatchingCount = 0;

        foreach($allQuestions as $dbQuestion) {
            $dbQuestionWords = explode(" ", $dbQuestion->question);

            for($i = 0; $i < sizeof($dbQuestionWords); $i++) {
                $dbQuestionWords[$i] = Str::lower($dbQuestionWords[$i]);
            }

            foreach($questionWords as $questionWord) {
                foreach($dbQuestionWords as $dbQuestionWord) {
                    if(strpos($dbQuestionWord, $questionWord) !== false) {
                        $currentMatchingCount++;
                        continue;
                    }
                }
            }

            if($currentMatchingCount > $highestMatchingCount) {
                $highestMatchingQuestion = $dbQuestion;
                $highestMatchingCount = $currentMatchingCount;
            }

            $currentMatchingCount = 0;
        }


        if($highestMatchingQuestion !== null) {
            return ['question' => $highestMatchingQuestion->toArray(), 'answer' => $highestMatchingQuestion->answers()->where('locale', $highestMatchingQuestion->locale)->first()->toArray()];
        }

        $returnMessage = __('general.noAnswerFoundTryCategories', [], $locale);
        
        foreach($this->getCategoryNames() as $categoryName) {
            $returnMessage.= ' '.__("general.$categoryName", [], $locale).",";
        }

        $returnMessage = substr($returnMessage, 0, strlen($returnMessage) - 1);

        return [
            'no_match' => true,
            'type' => self::TYPE_TEXT,
            'answer' => $returnMessage
        ];
    }

    /**
     * @return array
     */
    public function getCategoryNames(): array
    {
        return [
            'health',
            'communication',
            'work',
            'application',
            'general',
            'location',
            'costs'
        ];
    }
}
