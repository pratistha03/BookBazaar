<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class AdditemController extends Controller
{
    public function add_item_form()
    {
        return view ('add_item');
    }
}
