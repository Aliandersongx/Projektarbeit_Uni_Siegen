<?php

namespace Database\Seeders;

use App\Services\QuestionService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * CATEGORY LOCATION
         */
        DB::table('questions')->updateOrInsert(['id' => 1], [
            'question' => 'Wo befinde ich mich gerade?',
            'locale' => QuestionService::LOCALE_DE,
            'category' => QuestionService::CATEGORY_LOCATION
        ]);

        DB::table('answers')->insert([
            'answer' => 'Ihr aktueller Standort:',
            'locale' => QuestionService::LOCALE_DE,
            'question_id' => 1,
            'type' => QuestionService::TYPE_MAPS,
            'search_param' => 'self'
        ]);
        
        DB::table('questions')->updateOrInsert(['id' => 2], [
            'question' => 'Wo muss ich hingehen, damit ich den Asylantrag stellen kann?',
            'locale' => QuestionService::LOCALE_DE,
            'category' => QuestionService::CATEGORY_LOCATION
        ]);
        
        DB::table('answers')->insert([
            'answer' => 'Melden Sie sich, sobald Sie in Deutschland angekommen sind, bei einer staatlichen Stelle wie der Polizei. Erklären Sie dort, dass Sie einen Asylantrag stellen möchten. Folgen Sie bitte den Anweisungen der Beamten. Diese vermitteln Ihnen die Unterbringung in einer nahegelegenen Aufnahmeeinrichtung. Wenn Sie sich nicht melden, halten Sie sich illegal in Deutschland auf und laufen Gefahr, abgeschoben zu werden.',
            'locale' => QuestionService::LOCALE_DE,
            'question_id' => 2,
            'type' => QuestionService::TYPE_TEXT,
        ]);

        DB::table('questions')->updateOrInsert(['id' => 3], [
            'question' => 'Wie komme ich zum Job-Center?',
            'locale' => QuestionService::LOCALE_DE,
            'category' => QuestionService::CATEGORY_LOCATION
        ]);

        DB::table('answers')->insert([
            'answer' => 'Das Jobcenter befindet sich hier:',
            'locale' => QuestionService::LOCALE_DE,
            'question_id' => 3,
            'type' => QuestionService::TYPE_MAPS,
            'search_param' => 'Jobcenter'
        ]);

        DB::table('questions')->updateOrInsert(['id' => 5], [
            'question' => 'Wie besorge ich die Lebensmittel?',
            'locale' => QuestionService::LOCALE_DE,
            'category' => QuestionService::CATEGORY_LOCATION
        ]);
        
        DB::table('answers')->insert([
            'answer' => 'Lebensmittel kann man bei jedem Supermarkt Ihrer Nähe besorgen. Mögliche Supermärkte in Ihrer Nähe:',
            'locale' => QuestionService::LOCALE_DE,
            'question_id' => 5,
            'type' => QuestionService::TYPE_MAPS,
            'search_param' => 'Supermarkt'
        ]);

        DB::table('questions')->updateOrInsert(['id' => 6], [
            'question' => 'Wie finde ich Freizeitaktivitäten?',
            'locale' => QuestionService::LOCALE_DE,
            'category' => QuestionService::CATEGORY_LOCATION
        ]);


        DB::table('answers')->insert([
            'answer' => 'Sie können in Vereinen wie dem Fußballverein Sportliche Aktivitäten ausüben.',
            'locale' => QuestionService::LOCALE_DE,
            'question_id' => 6,
            'type' => QuestionService::TYPE_TEXT,
        ]);

        DB::table('questions')->updateOrInsert(['id' => 7], [
            'question' => 'Wie finde ich eine Wohnung in Deutschland? ',
            'locale' => QuestionService::LOCALE_DE,
            'category' => QuestionService::CATEGORY_LOCATION
        ]);

        DB::table('answers')->insert([
            'answer' => '     Wohnungs- und Hausangebote finden Sie auf bekannten Immobilien-
            Plattformen im Internet, auf welchen inzwischen die meisten verfügbaren Wohnungen
             und Häuser angeboten werden wie Ebay-kleinenanzeige. Angebote kann man außerdem 
             in der regionalen Tageszeitung finden. Angebot und Nachfrage sind in Deutschland stark abhängig von der Region.',
            'locale' => QuestionService::LOCALE_DE,
            'question_id' => 7,
            'type' => QuestionService::TYPE_TEXT,
        ]);
       
        DB::table('questions')->updateOrInsert(['id' => 8], [
            'question' => 'Wo finde ich ein Krankenhaus, bei Erkältungen?',
            'locale' => QuestionService::LOCALE_DE,
            'category' => QuestionService::CATEGORY_LOCATION
        ]);

        DB::table('answers')->insert([
            'answer' => 'Das nächste Krankenhaus in deiner Näher in:',
            'locale' => QuestionService::LOCALE_DE,
            'question_id' => 8,
            'type' => QuestionService::TYPE_MAPS,
            'search_param' => 'Krankenhaus'
        ]);

        DB::table('questions')->updateOrInsert(['id' => 9], [
            'question' => 'Where am i right now?',
            'locale' => QuestionService::LOCALE_EN,
            'category' => QuestionService::CATEGORY_LOCATION
        ]);

        DB::table('answers')->insert([
            'answer' => 'Your current location:',
            'locale' => QuestionService::LOCALE_EN,
            'question_id' => 9,
            'type' => QuestionService::TYPE_MAPS,
            'search_param' => 'self'
        ]);


        DB::table('questions')->updateOrInsert(['id' => 10], [
            'question' => 'Wo kaufe ich meine Möbel?',
            'locale' => QuestionService::LOCALE_DE,
            'category' => QuestionService::CATEGORY_LOCATION
        ]);

        DB::table('answers')->insert([
            'answer' => 'Die besten Online Möbel Shops 5 – 10
            •	Made.com. MADE.com. Auf unsere Liste der 15 besten Möbel Online-Shops darf Made.com nicht fehlen. ...
            •	Otto.de. OTTO. Bei Otto ist die Auswahl wirklich groß und es gibt auch Elektrogroßgeräte. ...
            •	PIB-home. pib home. ...
            •	Tikamoon. tikamoon. ...
            •	Westwingnow. WESTWINGnow.
            Falls man gebrauchte Möbel kaufen möchte, kann man von Ebay-Kleinenanzeige kaufen.
            ',
            'locale' => QuestionService::LOCALE_DE,
            'question_id' => 10,
            'type' => QuestionService::TYPE_TEXT,
        ]);



        /**
         * CATEGORY APPLICATION
         */  
        DB::table('questions')->updateOrInsert(['id' => 11], [
            'question' => 'Wie stelle ich meinen Asylantrag?',
            'locale' => QuestionService::LOCALE_DE,
            'category' => QuestionService::CATEGORY_APPLICATION
        ]);
        
        DB::table('answers')->insert([
            'answer' => 'Einen Asylantrag kann man stellen in den nächst möglichen Flüchtlingsheim, dort wird man über den Ablauf des Verfahrens informiert.',
            'locale' => QuestionService::LOCALE_DE,
            'question_id' => 11,
            'type' => QuestionService::TYPE_TEXT,
        ]);

        /**
         * CATEGORY COMMUNICATION
         */      
        DB::table('questions')->updateOrInsert(['id' => 12], [
            'question' => 'Wie lerne ich die Sprache?',
            'locale' => QuestionService::LOCALE_DE,
            'category' => QuestionService::CATEGORY_COMMUNICATION
        ]);
        
        DB::table('answers')->insert([
            'answer' => 'Da kann man Online Kurse belegen oder sich in einem Sprachinstitut anmelden. z.B. hier: https://www.berlitz.com/de-de/erwachsene/online-lernen',
            'locale' => QuestionService::LOCALE_DE,
            'question_id' => 12,
            'type' => QuestionService::TYPE_TEXT,
        ]);


        /**
         * CATEGORY COSTS
         */
                                 
        DB::table('questions')->updateOrInsert(['id' => 13], [
            'question' => 'Muss ich die Sprachkosten selber Übernehmen?',
            'locale' => QuestionService::LOCALE_DE,
            'category' => QuestionService::CATEGORY_COSTS
        ]);
        
        DB::table('answers')->insert([
            'answer' => 'Nein, wenn man als Asylberichtigter bzw. Arbeitslos sich beim Jobcenter angemeldet ist, kann das Jobcenter die Kosten übernehmen.',
            'locale' => QuestionService::LOCALE_DE,
            'question_id' => 13,
            'type' => QuestionService::TYPE_TEXT,
        ]);

        /**
         * CATEGORY WORK
         */                   
        DB::table('questions')->updateOrInsert(['id' => 14], [
            'question' => 'Wie finde ich Arbeit in Deutschland?',
            'locale' => QuestionService::LOCALE_DE,
            'category' => QuestionService::CATEGORY_WORK
        ]);
        
        DB::table('answers')->insert([
            'answer' => 'Sie können im Jobcenter einen geeigneten Job mit den zugehörigen Mitarbeitern finden oder selber im Internet nach einem Job recherchieren.',
            'locale' => QuestionService::LOCALE_DE,
            'question_id' => 14,
            'type' => QuestionService::TYPE_TEXT,
        ]);

        /**
         * CATEGORY HEALTH
         */
        DB::table('questions')->updateOrInsert(['id' => 15], [
            'question' => 'Wie finde ich einen Hausarzt?',
            'locale' => QuestionService::LOCALE_DE,
            'category' => QuestionService::CATEGORY_HEALTH
        ]);
        
        DB::table('answers')->insert([
            'answer' => 'Sie schauen wo der nächstmöglicher Hausarzt zu Ihrem Wohnort ist und gehen persönlich dahin.',
            'locale' => QuestionService::LOCALE_DE,
            'question_id' => 15,
            'type' => QuestionService::TYPE_TEXT,
        ]);

        /**
         * CATEGORY GENERAL
         */
        DB::table('questions')->updateOrInsert(['id' => 16], [
            'question' => 'Wie läuft das Gesundheitssystem in Deutschland ab?',
            'locale' => QuestionService::LOCALE_DE,
            'category' => QuestionService::CATEGORY_GENERAL
        ]);
        
        DB::table('answers')->insert([
            'answer' => 'Jeder Bürger sollte von einem Versicherungsunternehmen eine Gesundheitskarte erhalten. Mit dieser Karte kann man sich im Krankenhaus untersuchen lassen. Die meisten Kosten werden durch die Versicherung übernommen.',
            'locale' => QuestionService::LOCALE_DE,
            'question_id' => 16,
            'type' => QuestionService::TYPE_TEXT,
        ]);

        /**
         * CATEGORY GENERAL
         */
        DB::table('questions')->updateOrInsert(['id' => 17], [
            'question' => 'How does the health system work?',
            'locale' => QuestionService::LOCALE_EN,
            'category' => QuestionService::CATEGORY_GENERAL
        ]);
        
        DB::table('answers')->insert([
            'answer' => 'Every citizen should receive a health card from an insurance company. With this card, one can be examined in the hospital. Most of the costs are covered by the insurance company.',
            'locale' => QuestionService::LOCALE_EN,
            'question_id' => 17,
            'type' => QuestionService::TYPE_TEXT,
        ]);
       
        DB::table('questions')->updateOrInsert(['id' => 18], [
            'question' => 'How is the waste separation system in Germany?',
            'locale' => QuestionService::LOCALE_EN,
            'category' => QuestionService::CATEGORY_GENERAL
        ]);

        DB::table('answers')->insert([
            'answer' => 'The garbage is divided into 3 different categories. Each category has its own trash can. These are as follows: organic waste, residual waste, paper waste.',
            'locale' => QuestionService::LOCALE_EN,
            'question_id' => 18,
            'type' => QuestionService::TYPE_TEXT,
        ]);

        DB::table('questions')->updateOrInsert(['id' => 19], [
            'question' => 'Wie ist das Mülltrennungssystem in Deutschland?',
            'locale' => QuestionService::LOCALE_DE,
            'category' => QuestionService::CATEGORY_GENERAL
        ]);

        DB::table('answers')->insert([
            'answer' => 'Der Müll wird in 3 unterschiedlichen Kategorien verteilt.
             Jede Kategorie hat seinen eigenen Mülleimer. Diese lauten wie folgt: Bio-Müll, Rest-Müll, Papier-Müll.',
            'locale' => QuestionService::LOCALE_DE,
            'question_id' => 19,
            'type' => QuestionService::TYPE_TEXT,
        ]);

        DB::table('questions')->updateOrInsert(['id' => 20], [
            'question' => 'Was ist die Notrufnummer für Polizei, Krankenwagen und Feuerwehr in Deutschland?',
            'locale' => QuestionService::LOCALE_DE,
            'category' => QuestionService::CATEGORY_GENERAL
        ]);

        DB::table('answers')->insert([
            'answer' => 'Die Notrufwahl der deutschen Polizei lautet 110 für den Rettungsdienst und Feuerwehr wird die 112 gewählt.',
            'locale' => QuestionService::LOCALE_DE,
            'question_id' => 20,
            'type' => QuestionService::TYPE_TEXT,
        ]);


    }
}
