<?php
namespace App\Interfaces;

interface MultiplicationServiceInterface
{
    public function multiply(float $a, float $b): float|\InvalidArgumentException;
}
