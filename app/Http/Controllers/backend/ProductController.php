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
        $data['products']=product::paginate(4);
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
       
        $product->category_id=$request->category;
        $product->state=$request->product_state;
        $product->info=$request->info;
        $product->describe=$request->description;
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
        return redirect('admin/product/add-variant/'.$product->id);
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
        $product->product_code=$request->product_code;
        $product->name=$request->product_name;
        $product->price=$request->product_price;
        if($request->hasFile('product_img'))
        {
            // if($product->img!='no-img.jpg')
            // {
            //     unlink('public/backend/img/'.$product->img);
            // }

            $file = $request->product_img;
            $filename= str_random(9).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/img', $filename);
            $product->img=$filename;
        }

        $product->category_id=$request->category;
        $product->state=$request->product_state;
        $product->info=$request->info;
        $product->describe=$request->description;
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

        return redirect('admin/product/edit-variant/'.$product->id);
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
