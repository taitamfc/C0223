<?php
namespace App\View\Composers;
use Illuminate\View\View;

class CartComposer {
    public function compose(View $view): void
    {
        $view->with('cart_total', 100);
    }
}