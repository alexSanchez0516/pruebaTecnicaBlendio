<?php
namespace App\Interfaces;

interface SubtractionServiceInterface
{
    public function subtract(float $a, float $b): float|\InvalidArgumentException;
}
