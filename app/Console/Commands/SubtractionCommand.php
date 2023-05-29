<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\SubtractionService;

class SubtractionCommand extends Command
{
    protected $signature = 'subtract {operatorA} {operatorB} ';
    protected $description = 'Perform subtraction of two numbers';

    protected $subtractionService;

    public function __construct(SubtractionService $subtractionService)
    {
        parent::__construct();
        $this->subtractionService = $subtractionService;
    }

    public function handle()
    {
        $operatorA = $this->argument('operatorA');
        $operatorB = $this->argument('operatorB');

        $result = $this->subtractionService->subtract($operatorA, $operatorB);

        $this->info("Result: $result");
    }
}
