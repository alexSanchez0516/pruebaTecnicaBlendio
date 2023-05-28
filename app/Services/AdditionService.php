<?php
namespace App\Services;

class AdditionService implements AdditionServiceInterface
{
    public function add($a, $b)
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new \InvalidArgumentException('Both operands must be numbers.');
        }

        return $a + $b;
    }
}
