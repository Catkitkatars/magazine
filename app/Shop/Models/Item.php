<?php

namespace App\Shop\Models;


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
            $this->id,
            $this->title,
            $this->description,
            $this->price
        );
    }
}
