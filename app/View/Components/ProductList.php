<?php

namespace App\View\Components;

use App\Models\Account;
use App\Models\Product;
use Illuminate\View\Component;

class ProductList extends Component
{
    public $products;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->products = Product::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-list')->with('products', $this->products);
    }
}
