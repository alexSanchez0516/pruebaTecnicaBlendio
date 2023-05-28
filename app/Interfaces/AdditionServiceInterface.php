<?php
namespace App\Interfaces;

interface AdditionServiceInterface
{
    public function add(float $a, float $b): float|\InvalidArgumentException;
}
