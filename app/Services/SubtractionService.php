<?php
namespace App\Services;
use App\Interfaces\SubtractionServiceInterface;
class SubtractionService implements SubtractionServiceInterface
{
    public function subtract($a, $b): float|\InvalidArgumentException
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new \InvalidArgumentException('Both operands must be numbers.');
        }
        return floatval($a - $b);
    }
}
