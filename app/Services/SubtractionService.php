<?php
namespace App\Services;

class SubtractionService implements SubtractionServiceInterface
{
    public function subtract($a, $b)
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new \InvalidArgumentException('Both operands must be numbers.');
        }
        return $a - $b;
    }
}
