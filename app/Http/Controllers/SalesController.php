<?php

namespace App\Http\Controllers;
use App\Models\order\Orders;
use App\Models\order\ordersproduct;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use DB;

class SalesController extends Controller
{
    public function order()
    {
        $login_id = session()->get('login_id');
        $orders = Orders::get();
        // $ordersproduct = ordersproduct::
        //                 where('login_id', $login_id)->get();

        DB::table('ordersproducts')
    ->leftJoin('products_details', 'products_details.id', '=', 'ordersproducts.product_id')
    ->where('products_details.login_id', $login_id)
    ->get();

    $ordersProducts =  DB::table('orders')
    ->leftJoin('ordersproducts', 'ordersproducts.order_id', '=', 'orders.orders_id')
    ->leftJoin('products_details', 'products_details.id', '=', 'ordersproducts.product_id')
    ->where('products_details.login_id', $login_id)
    ->get();
        // dd( $ordersProducts );
        return view('layout.admin.sales.order-list')
        ->with(
            [
                "orders" => $orders,
                "ordersproduct" =>$ordersProducts
                
            ]
        );

    }
    public function orderstatusupdate(Request $request, $id)
    {
        //  echo $id;
         $status = $request->sts;
         

        // $status = $request->input('status');
        ordersproduct::where('id',$id)->update(['order_status'=>$status]);
        Orders::where('id',$id)->update(['order_status'=>$status]);
        // return view('layout.admin.sales.order-list');
        
        return response()->json([
            'Success'=>'Success'
             //$zone_data
        ]);
    
    }
    public function orderbulkstatusupdate(Request $request)
    {
    //   echo 'test';   
      $sts = $request->sts;

          $ids = $request->ids;
          $id = explode(",",$ids);
         // print_r( $id );
    //   $sts = $request->sts;
foreach($id as $idr)
{
    ordersproduct::where('id',$idr)->update(['order_status'=>$sts]);
    Orders::where('id',$id)->update(['order_status'=>$sts]);
//   DB::table("ordersproduct")->whereIn('id',$idr)->update(['order_status'=>$sts]);
}
    
      return response()->json(['success'=>"Products Updated successfully."]);

    }


    public function transaction()
    {
        return view('layout.admin.sales.order-transaction');
    }
}
