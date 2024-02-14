<?php

namespace App\Shop;

class Item
{
    public function __construct(
        private int $id,
        private string $title,
        private string $description,
        private int $price,
    ) {}

    public function DTO(): ItemDTO {
        return new ItemDTO(
            $id,
            $title,
            $description,
            $price
        );
    }
}
