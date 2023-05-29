<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\AdditionService;

class AdditionCommand extends Command
{
    protected $signature = 'add {operatorA} {operatorB}';
    protected $description = 'Perform addition of two numbers';

    protected $additionService;

    public function __construct(AdditionService $additionService)
    {
        parent::__construct();
        $this->additionService = $additionService;
    }

    public function handle()
    {
        $operatorA = $this->argument('operatorA');
        $operatorB = $this->argument('operatorB');

        $result = $this->additionService->add($operatorA, $operatorB);

        $this->info("Result: $result");
    }
}
