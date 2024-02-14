<?php 

namespace App\Shop; 


class ProductDTO {

    public function __construct(
        public int $id,
        public string $title,
        public string $description,
        public int $price,
    ){}
}