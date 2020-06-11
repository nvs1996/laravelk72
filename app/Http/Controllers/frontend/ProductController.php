<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\{product,category,attribute,values,customer,order,attr};
use Cart;
class ProductController extends Controller
{
    public function GetProduct(request $request)
    {
        if($request->category)
        {
            $data['products']=category::find($request->category)->product()->where('img','<>','no-img.jpg')->orderBy('price', 'ASC')->paginate(12);
        }
        else if($request->start)
        {
            $data['products']=product::where('img','<>','no-img.jpg')->whereBetween('price', [$request->start, $request->end])->orderBy('price', 'ASC')->paginate(12);
        }
        else if($request->value)
        {
            $data['products']=values::find($request->value)->product()->where('img','<>','no-img.jpg')->orderBy('price', 'ASC')->paginate(12);
        }
        else
        {
         
            $data['products']=product::where('img','<>','no-img.jpg')->orderBy('price', 'ASC')->paginate(12);
        }
        $data['category']=category::all();
        $data['attribute']=attribute::all();
        return view('frontend.listproduct',$data);
    }
    public function GetDetail($id_product)
    {
        $data['product']=product::find($id_product);
        return view('frontend.productdetail',$data);
    }
    public function GetCheckOut()
    {
        $data['cart']=Cart::content();
        $data['total']=Cart::total(0,'','.');
        return view('frontend.checkout',$data);
    }

  public function PostCheckOut(request $request)
    {
        $customer=new customer;
        $customer->full_name=$request->full;
        $customer->address=$request->address;
        $customer->email=$request->email;
        $customer->phone=$request->phone;
        $customer->total=Cart::total(0,'','');
        $customer->state=0;
        $customer->save();
        foreach(Cart::content() as $product)
        {
            $order=new order;
            $order->name=$product->name;
            $order->price=$product->price;
            $order->quantity=$product->qty;
            $order->img=$product->options->img;
            $order->customer_id=$customer->id;
            $order->save();
            foreach($product->options->attr as $key=>$value)
            {
                $attr=new attr;
                $attr->name=$key;
                $attr->value=$value;
                $attr->order_id=$order->id;
                $attr->save();
            }
        }
        Cart::destroy();

       return redirect('product/complete/'.$customer->id);
    }


    public function AddCart(request $request)
    {
        return redirect('lien-he');
    }

    // public function AddCart(request $request)
    // {
    //     $product=product::find($request->id_product);
    //     Cart::add([
    //     'id' => $product->product_code, 
    //     'name' => $product->name, 
    //     'qty' => $request->quantity, 
    //     'price' => GetPrice($product,$request->attr), 
    //     'options' => ['img' => $product->img,'attr'=>$request->attr]]);
    //     return redirect('product/cart');
    // }
    public function GetCart()
    {
     
        $data['cart']=Cart::content();
        $data['total']=Cart::total(0,'','.');
        return view('frontend.cart',$data);
    }

    public function DelCart($rowId)
    {
        Cart::remove($rowId);
        return redirect('product/cart');
    }
    public function UpdateCart($rowId,$qty)
    {
        Cart::update($rowId, $qty); 
    }
    



    public function GetComplete($id_customer)
    {
        $data['customer']=customer::find($id_customer);
        return view('frontend.ordercomplete',$data);
    }
}
