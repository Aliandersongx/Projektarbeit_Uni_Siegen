<?php

namespace App\Http\Controllers;

use App\Services\QuestionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * @var QuestionService
     */
    private QuestionService $questionService;

    /**
     * @param QuestionService $questionService
     */
    public function __construct(QuestionService $questionService)
    {
      $this->questionService = $questionService;  
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function chat(Request $request): JsonResponse
    {
        $this->validate($request, [
            'message' => 'required|string',
            'locale' => 'required|in:de,en'
        ]);

        return new JsonResponse(
            $this->questionService->processQuestion($request->message, $request->locale)
        );
    }
}
