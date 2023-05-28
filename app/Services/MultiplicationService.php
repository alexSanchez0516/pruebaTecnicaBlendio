<?php
namespace App\Services;
use App\Interfaces\MultiplicationServiceInterface;
class MultiplicationService implements MultiplicationServiceInterface
{
    public function multiply($a, $b) : float|\InvalidArgumentException
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new \InvalidArgumentException('Both operands must be numbers.');
        }
        return floatval($a * $b);
    }
}
