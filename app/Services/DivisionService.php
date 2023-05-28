<?php
namespace App\Services;
use App\Interfaces\DivisionServiceInterface;
class DivisionService implements DivisionServiceInterface
{
    public function divide($a, $b) : float|\InvalidArgumentException
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new \InvalidArgumentException('Both operands must be numbers.');
        }

        if ($b == 0) {
            throw new \InvalidArgumentException("Cannot divide by zero.");
        }

        return floatval($a / $b);
    }
}
