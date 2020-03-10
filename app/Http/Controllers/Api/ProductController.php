<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\product;
use App\models\users;
use App\Http\Resources\product as ProductResource;
class ProductController extends Controller
{
    public function GetProduct($id)
    {
        $product=product::find($id)->toarray();
        $product['danhmuc']=product::find($id)->category->name;
        $data=array(
         'data'=>array(
            $product

         ) );
     return response()->json($data, 204);;
    }

    public function AddProduct(request $request)
    {
        $user=new users;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->level=$request->level;
        $user->save();
        return 201;
    }

    public function UpdateProduct($id_user)
    {
        $user=users::find($id_user);
        $user->email=$request->email;
        $user->password=$request->password;
        $user->level=$request->level;
        $user->save();
        return 200;
    }

    public function DeleteProduct()
    {
        
    }
}
