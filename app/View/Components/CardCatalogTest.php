<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardCatalogTest extends Component
{
    public $title;
    public $description;
    public $price;
    public $image;
    public $features;

    public function __construct($title, $description, $price, $image, $features)
    {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->features = $features; // Ensure this is properly handled
    }

    public function render()
    {
        return view('components.card-catalog-test');
    }
}

