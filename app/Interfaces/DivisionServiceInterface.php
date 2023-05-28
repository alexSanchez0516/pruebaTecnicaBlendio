<?php
namespace App\Interfaces;


interface DivisionServiceInterface
{
    public function divide(float $a, float $b): float|\InvalidArgumentException;
}
