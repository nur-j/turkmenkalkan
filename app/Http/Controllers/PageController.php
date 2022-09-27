<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\Color;

class PageController extends Controller
{
    public function home()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('front.home', compact('products', 'categories'));
    }

    public function products()
    {
        $colors = Color::all();
        $products = Product::paginate(12);
        $categories = Category::all();
        return view('front.products', compact('products', 'categories', 'colors'));
    }

    public function products_by_category($id)
    {
        $colors = Color::all();
        $category = Category::findOrFail($id);
        $categories = Category::all();
        $products = Product::where('category_id', $category->id)->paginate(12);
        return view('front.products', compact('category', 'products', 'categories', 'colors'));
    }

    public function products_by_color($id)
    {
        $colors = Color::all();
        //$products = Product::where('colors')
        return view('front.products');
    }

    public function product_single($id)
    {
        $product = Product::find($id);
        return view('front.single-product', compact('product'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function news()
    {
        return view('front.news');
    }

    public function about()
    {
        return view('front.about');
    }

}
