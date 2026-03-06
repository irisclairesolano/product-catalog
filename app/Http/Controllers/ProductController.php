<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
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
}
