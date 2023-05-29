<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\DivisionService;

class DivisionCommand extends Command
{
    protected $signature = 'divide {operatorA} {operatorB}';
    protected $description = 'Perform division of two numbers';

    protected $divisionService;

    public function __construct(DivisionService $divisionService)
    {
        parent::__construct();
        $this->divisionService = $divisionService;
    }

    public function handle()
    {
        $operatorA = $this->argument('operatorA');
        $operatorB = $this->argument('operatorB');

        $result = $this->divisionService->divide($operatorA, $operatorB);

        $this->info("Result: $result");
    }
}
