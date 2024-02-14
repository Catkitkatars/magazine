<?php 

namespace App\Shop\Models; 


class ItemDTO {

    public function __construct(
        public int $id,
        public string $title,
        public string $description,
        public int $price,
    ){}
}