<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Construction;
use Cart;
class ConstructionController extends Controller
{
    
    public function getConstruction()
    {
        $constructions = Construction::orderBy("id", "DESC")->paginate(8);
        return view('frontend.construction', [
            "constructions" => $constructions,
        ]);
    }
    public function GetConstructionDetail($id)
    {
        $constructions=Construction::find($id);
        return view('frontend.constructiondetail', [
            "constructions" => $constructions,
        ]);
    }
}
