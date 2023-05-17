<?php

class Category{
    public $categName;
    public $icon;
    public function __construct($categName) {
        $this->categName = $categName;
        $this->setIcon();
    }
    private function setIcon() {
        if ($this->categName == 'cat') {
            $this->icon = '<i class="fa-solid fa-cat"></i>';
        }else{
            $this->icon = '<i class="fa-solid fa-dog"></i>';
        }
    }
}