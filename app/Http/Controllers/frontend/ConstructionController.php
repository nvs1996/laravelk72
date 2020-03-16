<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\construction;
use Cart;
class ConstructionController extends Controller
{
    
    public function getConstruction()
    {
        $constructions = construction::orderBy("id", "DESC")->paginate(8);
        return view('frontend.construction', [
            "constructions" => $constructions,
        ]);
    }
    public function GetConstructionDetail($id)
    {
        $constructions=construction::find($id);
        return view('frontend.constructiondetail', [
            "constructions" => $constructions,
        ]);
    }
}
