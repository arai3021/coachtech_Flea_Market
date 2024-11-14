<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $tab = $request->query('tab', 'default');

        $data = [];

        if($tab === 'rec'){
            $data = $this->getRecData();
        }elseif($tab === 'favorites'){
            $data = $this->getMy_ListData();
        }

        return view('index', compact('tab', 'data'));
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