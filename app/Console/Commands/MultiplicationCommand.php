<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\MultiplicationService;

class MultiplicationCommand extends Command
{
    protected $signature = 'multiply {operatorA} {operatorB}';
    protected $description = 'Perform multiplication of two numbers';

    protected $multiplicationService;

    public function __construct(MultiplicationService $multiplicationService)
    {
        parent::__construct();
        $this->multiplicationService = $multiplicationService;
    }

    public function handle()
    {
        $operatorA = $this->argument('operatorA');
        $operatorB = $this->argument('operatorB');

        $result = $this->multiplicationService->multiply($operatorA, $operatorB);

        $this->info("Result: $result");
    }
}
