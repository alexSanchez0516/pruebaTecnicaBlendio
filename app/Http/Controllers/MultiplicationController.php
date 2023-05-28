<?php

namespace App\Http\Controllers;

use App\Interfaces\MultiplicationServiceInterface;

class MultiplicationController extends Controller
{
    private $multiplicationService;

    public function __construct(MultiplicationServiceInterface $multiplicationService)
    {
        $this->multiplicationService = $multiplicationService;
    }

    public function calculate($a, $b)
    {

        try {
            $result = $this->multiplicationService->multiply($a, $b);
            return response()->json(['result' => $result]);
        } catch (\InvalidArgumentException $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }

    }
}
