<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\cost;
use Cart;
class CostController extends Controller
{
    
    public function getCost()
    {
        $costs = cost::first();
        return view('frontend.cost', [
            "costs" => $costs,
        ]);
    }
}
