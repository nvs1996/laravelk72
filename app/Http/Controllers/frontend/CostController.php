<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Cost;
use Cart;
class CostController extends Controller
{
    
    public function getCost()
    {
        $costs = Cost::orderBy("id", "DESC")->paginate(100);
        return view('frontend.cost', [
            "costs" => $costs,
        ]);
    }
}
