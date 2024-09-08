<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Auth;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function v_cart()
    {
        return view('cart');
    }
    
    public function v_wish_list()
    {
        return view('wish_list');
    }

    public function v_profile()
    {
        return view('user_profile');
    }

    public function u_profile_pic()
    {
        request()->validate([
            'profile_pic' => ['string', 'max:255'],
        ]);
        Auth::user()->update([
            'profile_pic' => request('profile_pic')
        ]);
        return redirect('profile');
    }
    


   
    //////////////////////////////////////////////////////////////
    
    //Men_Section
    public function men(Product $products)
    {
            $M_products = $products->where('category_id', 1)->where('subcategory_id', 1)->where('visible', 1)->get();

        return view('men', ['M_products' => $M_products]);
    }

    public function men_product(Product $product)
    {
        return view('show', ['product' => $product]);
    }

    //////////////////////////////////////////////////////////////

     //Women_Section
    public function women()
    {
        return view('women');
    }

    ////////////////////////////////////////////////////////////// 
    
    //kids_Section
    public function kids()
    {
        return view('kids');
    }

    //////////////////////////////////////////////////////////////

}