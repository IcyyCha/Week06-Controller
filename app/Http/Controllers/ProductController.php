<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Product;
use App\Models\Shop;

class ProductController extends Controller
{
    private $title = 'Product';
    function list(

        ServerRequestInterface $request,
        CategoryController $categoryController // inject CategoryController
        ) {
        $data = $request->getQueryParams();
        // method search() inherits from SearchableController.
        $products = $this->search($data);
        $products = $categoryController->prepareCategory($products);
        
        return view('product-list', [
        'title' => "{$this->title} : List"
        ,
        
        'term' => (empty($data['term']))? '' : $data['term'],
        'products' => $products,
        ]);
        }
}