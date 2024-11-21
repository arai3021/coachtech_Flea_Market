<?php

namespace App\Http\Controllers;

use App\Models\merchandise;
use App\Models\cart;
use App\Models\order_line;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $merchandise = Merchandise::all();
        $tab = 'my_list';

        return view('index', compact('merchandise', 'tab'));
    }
}

// private function getRecData()
// {
//    return [
//       (object)['name' => 'Item 1 in Rec'],
//       (object)['name' => 'Item 2 in Rec']
//    ];
// }

// private function getMy_ListData()
// {
//    return [
//       (object)['name' => 'my_list Item 1'],
//       (object)['name' => 'my_list Item 2']
//    ];
// }