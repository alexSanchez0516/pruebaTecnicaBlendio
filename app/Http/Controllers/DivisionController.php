<?php

namespace App\Http\Controllers;

use App\Services\DivisionServiceInterface;

class DivisionController extends Controller
{
    private $divisionService;

    public function __construct(DivisionServiceInterface $divisionService)
    {
        $this->divisionService = $divisionService;
    }

    public function calculate($a, $b)
    {
        try {
            $result = $this->divisionService->divide($a, $b);
            return response()->json(['result' => $result]);
        } catch (\InvalidArgumentException $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
