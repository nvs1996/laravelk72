<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\customer;

class OrderController extends Controller
{
      //Get Order
      public function GetOrder()
      {
        $data['customers']=customer::where('state',0)->orderby('created_at','ASC')->get();
          return view('backend.order.order',$data);
      }
  
      //Get Detail Order
      public function DetailOrder($id_customer)
      {
          $data['customer']=customer::find($id_customer);
          return view('backend.order.detailorder',$data);
      }
      public function proceed($id_customer)
      {
        $customer=customer::find($id_customer);
        $customer->state=1;
        $customer->save();
        return redirect('admin/order');
      }

}
