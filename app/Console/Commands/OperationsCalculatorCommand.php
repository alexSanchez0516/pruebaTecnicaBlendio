<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Interfaces\AdditionServiceInterface;
use App\Interfaces\SubtractionServiceInterface;
use App\Interfaces\MultiplicationServiceInterface;
use App\Interfaces\DivisionServiceInterface;

class OperationsCalculatorCommand extends Command
{
    protected $signature = 'operations {operatorA : The first operand} {operatorB : The second operand} {operation : The operation to perform}';

    protected $description = 'Perform an operation with two operands';

    private $additionService;
    private $subtractionService;
    private $multiplicationService;
    private $divisionService;

    public function __construct(
        AdditionServiceInterface $additionService,
        SubtractionServiceInterface $subtractionService,
        MultiplicationServiceInterface $multiplicationService,
        DivisionServiceInterface $divisionService
    ) {
        parent::__construct();
        $this->additionService = $additionService;
        $this->subtractionService = $subtractionService;
        $this->multiplicationService = $multiplicationService;
        $this->divisionService = $divisionService;
    }

    public function handle()
    {
        $operatorA = $this->argument('operatorA');
        $operatorB = $this->argument('operatorB');
        $operation = $this->argument('operation');

        switch ($operation) {
            case 'add':
                $result = $this->additionService->add($operatorA, $operatorB);
                break;
            case 'subtract':
                $result = $this->subtractionService->subtract($operatorA, $operatorB);
                break;
            case 'multiply':
                $result = $this->multiplicationService->multiply($operatorA, $operatorB);
                break;
            case 'divide':
                try {
                    $result = $this->divisionService->divide($operatorA, $operatorB);
                } catch (\InvalidArgumentException $e) {
                    $this->error($e->getMessage());
                    return;
                }
                break;
            default:
                $this->error('Invalid operation');
                return;
        }

        $this->info('Result: ' . $result);
    }
}
