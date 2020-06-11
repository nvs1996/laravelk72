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
class SearchController extends Controller
{
    
    public function getKey(Request $request)
    {
    	if($request->category)
        {
            $data['products']=category::find($request->category)->product()->where('img','<>','no-img.jpg')->paginate(12);
        }
        else if($request->start)
        {
            $data['products']=product::where('img','<>','no-img.jpg')->whereBetween('price', [$request->start, $request->end])->paginate(12);
        }
        else if($request->value)
        {
            $data['products']=values::find($request->value)->product()->where('img','<>','no-img.jpg')->paginate(12);
        }
        else if($request->product)
        {
            $data['products'] = product::where('name', 'like', '%'.$request->product.'%')->where('img','<>','no-img.jpg')->paginate(12);
        }
        else
        {
         
            $data['products']=product::where('img','<>','no-img.jpg')->paginate(12);
        }
        $data['request'] = $request->all();
        $data['category']=category::all();
        $data['attribute']=attribute::all();
        return view('frontend.listproduct',$data);
    }
}
