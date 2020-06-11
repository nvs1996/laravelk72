<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\product;
use App\models\Cost;
use App\models\attribute;
use App\models\Project;
use App\models\category;
use App\models\Construction;
use Cart;
class ProductByCategoryController extends Controller
{
    
    public function getKey(Request $request, $id)
    {
        // $data['category']=category::where("id", $id)->get();
        $data['products']=product::where("category_id","$id")->where('img','<>','no-img.jpg')->orderBy('price', 'ASC')->paginate(12);
        $data['attribute']=attribute::all();
        $data['category']=category::all();
        return view('frontend.category_by_product',$data);
    }
}
