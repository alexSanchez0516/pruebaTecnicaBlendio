<?php

namespace App\Http\Controllers;

use App\Services\AdditionServiceInterface;

class AdditionController extends Controller
{
    private $additionService;

    public function __construct(AdditionServiceInterface $additionService)
    {
        $this->additionService = $additionService;
    }

    public function calculate($a, $b)
    {

        try {
            $result = $this->additionService->add($a, $b);
            return response()->json(['result' => $result]);
        } catch (\InvalidArgumentException $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }

    }
}
