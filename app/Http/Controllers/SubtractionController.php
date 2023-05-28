<?php

namespace App\Http\Controllers;

use App\Services\SubtractionServiceInterface;

class SubtractionController extends Controller
{
    private $subtractionService;

    public function __construct(SubtractionServiceInterface $subtractionService)
    {
        $this->subtractionService = $subtractionService;
    }

    public function calculate($a, $b)
    {
        try {
            $result = $this->subtractionService->subtract($a, $b);
            return response()->json(['result' => $result]);
        } catch (\InvalidArgumentException $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }

    }
}
