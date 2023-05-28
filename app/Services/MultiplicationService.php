<?php
namespace App\Services;

class MultiplicationService implements MultiplicationServiceInterface
{
    public function multiply($a, $b)
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new \InvalidArgumentException('Both operands must be numbers.');
        }
        return $a * $b;
    }
}
