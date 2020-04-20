<?php

namespace App\Http\Controllers\backend;
//thư viện xử lý array
use Illuminate\Support\Arr;
use App\Http\Requests\{AddProductRequest,AddAttrRequest,EditAttrRequest,EditValueRequest,EditProductRequest};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\{product,category,attribute,values,variant};
class ProductController extends Controller
{
    //Get List product
    public function ListProduct()
    {
        $data['products']=product::orderBy("id", "DESC")->paginate(4);
        return view('backend.product.listproduct',$data);
    }

    //Get Add Product
    public function AddProduct()
    {
        $data['category']=category::all();
        $data['attribute']=attribute::all();
        return view('backend.product.addproduct',$data);
    }

    public function PostAddProduct(request $request)
    {
        if (!isset($request->value)){
            return redirect()->back()->with('thongbao','Bạn chưa thêm thuộc tính cho sản phẩm! ');
        }
        if ($request->has('product_code')) {
            $check_product_code = product::where('product_code', $request->product_code)->exists();
            if ($check_product_code == true) {
                return redirect()->back()->with('thongbao','Mã sản phẩm đã tồn tại! ');
            }
        }
        $product=new product;
        $product->product_code=$request->product_code;
        $product->name=$request->product_name;
        $product->price=$request->product_price;
        if($request->hasFile('product_img'))
        {
            $file = $request->product_img;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $product->img=$filename;
        }
        else
        {
            $product->img='no-img.jpg';
        }
        //anh 2
        if($request->hasFile('product_img2'))
        {
            $file = $request->product_img2;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $product->img2=$filename;
        }
        else
        {
            $product->img2='no-img.jpg';
        }
        //anh 3
        if($request->hasFile('product_img3'))
        {
            $file = $request->product_img3;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $product->img3=$filename;
        }
        else
        {
            $product->img3='no-img.jpg';
        }
        $product->category_id = $request->category;
        $product->state = $request->product_state;
        $product->info = $request->info;
        $product->info1 = $request->info1;
        $product->info2 = $request->info2;
        $product->info3 = $request->info3;
        $product->info4 = $request->info4;
        $product->info5 = $request->info5;
        $product->info6 = $request->info6;
        $product->describe = $request->description;
        $product->save();

        
        //add values_product
        $product->values()->Attach(Arr::collapse($request->value));
        //add variant
        foreach(get_combinations($request->value) as $variant)
        {
            $vari=new variant;
            $vari->product_id=$product->id;
            $vari->save();
            $vari->values()->attach($variant);
        }
        return redirect('admin/product');
    }




    //get attr
    public function GetAttr()
    {
        $data['attribute']=attribute::all();
       return view('backend.attr.attr',$data);
    }
    // add attr
    public function PostAddAttr(AddAttrRequest $request)
    {
        $attr=new attribute;
        $attr->name=$request->attr_name;
        $attr->save();
        return redirect()->back()->with('thongbao','Đã thêm thuộc tính :'.$request->attr_name);
    }
    public function GetEditAttr($id_attr)
    {
        $data['attr']=attribute::find($id_attr);
        return view('backend.attr.editattr',$data);
    }

    public function  PostEditAttr(EditAttrRequest $request,$id_attr)
    {
        $attr=attribute::find($id_attr);
        $attr->name=$request->name;
        $attr->save();
        return redirect()->back()->with('thongbao','Đã sửa thành công');
    }

    public function  DelAttr($id_attr)
    {
        attribute::destroy($id_attr);
        return redirect()->back()->with('thongbao','Đã xoá thành công');
    }


    public function PostAddValue(request $request)
    {
        $value=new values;
        $value->attr_id=$request->attr_id;
        $value->value=$request->value;
        $value->save();
        return redirect()->back()->with('thongbao','Đã thêm giá trị thuộc tính!');
    }

    public function GetEditValue($id_value)
    {
        $data['value']=values::find($id_value);
        return view('backend.value.editvalue',$data);
    }

    public function PostEditValue(EditValueRequest $request,$id_value)
    {
        $value = values::find($id_value);
        $value->value=$request->name;
        $value->save();
        return redirect()->back()->with('thongbao','Đã sửa thành công');
    }
    public function DelValue($id_value)
    { 
        values::destroy($id_value);
        return redirect()->back()->with('thongbao','Đã xoá giá trị trong thuộc tính thành công');
    }

     //Get Edit Product
     public function EditProduct($id_product)
     {
         $data['product']=product::find($id_product);
         $data['category']=category::all();
         $data['attribute']=attribute::all();
      return view('backend.product.editproduct',$data);
        
     }

     //Post Edit product
     
     public function PostEditProduct(EditProductRequest $request,$id_product)
     {
        $product=product::find($id_product);
        if ($request->has('product_code')) {
            $product_code = $product->product_code;
            $check_product_code = product::whereNotIn('product_code', [$product_code])->where('product_code', $request->product_code)->exists();
            if ($check_product_code == true) {
                return redirect()->back()->with('thongbao','Mã sản phẩm đã tồn tại! ');
            }
        }
        $product->product_code=$request->product_code;
        $product->name=$request->product_name;
        $product->price=$request->product_price;
        if($request->hasFile('product_img'))
        {
            $file = $request->product_img;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $product->img=$filename;
        }
        //anh 2
        if($request->hasFile('product_img2'))
        {
            $file = $request->product_img2;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $product->img2=$filename;
        }
        //anh 3
        if($request->hasFile('product_img3'))
        {
            $file = $request->product_img3;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $product->img3=$filename;
        }
        $product->category_id=$request->category;
        $product->state = $request->product_state;
        $product->info = $request->info;
        $product->info1 = $request->info1;
        $product->info2 = $request->info2;
        $product->info3 = $request->info3;
        $product->info4 = $request->info4;
        $product->info5 = $request->info5;
        $product->info6 = $request->info6;
        $product->describe = $request->description;
        $product->save();
        
        //add values_product
        $product->values()->Sync(Arr::collapse($request->value));

        //add variant
        foreach(get_combinations($request->value) as $variant)
        {
            if(check_var($product,$variant))
            {
                $vari=new variant;
                $vari->product_id=$product->id;
                $vari->save();
                $vari->values()->attach($variant);
            }
           
        }
        return redirect('admin/product');
     }


     //Get Add variant
     public function AddVariant($id_product)
     {
         $data['product']=product::find($id_product);
         return view('backend.product.addvariant',$data);
     }
     public function PostAddVariant(request $request,$id_product)
     {
         foreach($request->price as $key=>$value)
         {
            $variant= variant::find($key);
            $variant->price=$value;
            $variant->save();
         }
        return redirect('admin/product')->with('thongbao','Đã thêm sản phẩm');
     }





    //Get Edit variant
    public function EditVariant($id_product)
    {
        $data['product']=product::find($id_product);
        return view('backend.product.editvariant',$data);
    }

    public function PostEditVariant(request $request,$id_product)
    {
        foreach($request->price as $key=>$value)
        {
           $variant= variant::find($key);
           $variant->price=$value;
           $variant->save();
        }
        return redirect()->back()->with('thongbao','Đã sửa biến thể thành công!');
    }

    public function DelProduct($id_product)
    {
        product::destroy($id_product);
        return redirect()->back()->with('thongbao','Da xoa thanh cong');
    }

}
