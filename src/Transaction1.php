<?php

class Transaction1 {
    public function __construct(
        private float $amount,
        private string $description) {
        echo $amount;
    }
}