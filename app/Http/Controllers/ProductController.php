<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // MODULE 2-3 FUNCTION
    public function show($category = 'all', $id = null)
    {
        if ($category === 'all' && $id === null) {
            return "Showing all products in all categories";
        }

        if ($category !== 'all' && $id === null) {
            return "Showing all products in category: {$category}";
        }

        if ($category !== 'all' && $id !== null) {
            return "Showing product {$id} in category {$category}";
        }
    }

    // MODULE 2-4 FUNCTION
    public function list()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'laptop',
                'description' => 'A high-performance laptop for work and play.',
                'price' => 39999.99,
            ],
            [
                'id' => 2,
                'name' => 'smartphone',
                'description' => 'A sleek smartphone with a powerful camera.',
                'price' => 19999.99,
            ],
            [
                'id' => 3,
                'name' => 'headphones',
                'description' => 'Noise-cancelling headphones for immersive sound.',
                'price' => 4999.99,
            ]
        ];

        return view('products.list', ['products' => $products]);
    }
}