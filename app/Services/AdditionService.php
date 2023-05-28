<?php
namespace App\Services;
use App\Interfaces\AdditionServiceInterface;

class AdditionService implements AdditionServiceInterface
{
    public function add($a, $b) : float|\InvalidArgumentException
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new \InvalidArgumentException('Both operands must be numbers.');
        }

        return floatval($a + $b);
    }
}
