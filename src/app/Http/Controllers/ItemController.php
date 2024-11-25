<?php

namespace App\Http\Controllers;

use App\Models\merchandise;
use App\Models\cart;
use App\Models\order_line;
use App\Models\product;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        $tab = 'my_list';

        return view('index', ['products' => $products]);
    }

    public function sell()
    {
        return view('sell');
    }

    //public function sell($id)
    //{
    //    $merchandise = Merchandise::findOrFail($id);

    //    $merchandise->status = 'sold';
    //    $merchandise->save();

    //    return redirect()->route('index')->with('success', 'Product sold successfully!');
    //}

    public function product(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'condition' => 'required|in:Good,No scratches,Some scratches,Poor',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('product'), $imageName);

        Product::create([
            'name' => $request->input('name'),
            'description' => $request->inout('description'),
            'price' => $request->inout('price'),
            'condition' => $request->inout('condition'),
            'image_path' => 'uploads/' . $imageName,
        ]);

        return back()->with('success', '出品されました');
    }
}
