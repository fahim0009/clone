<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcCardController extends Controller
{
        public function verify($card_no)
    {
        return view('ec-card.verify', compact('card_no'));
    }
}
