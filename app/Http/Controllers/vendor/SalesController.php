<?php

namespace App\Http\Controllers\vendor;
use App\Http\Controllers\Controller;
use App\Models\order\Orders;
use App\Models\order\ordersproduct;
use GrahamCampbell\ResultType\Success;
use App\Models\Products\Products;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use DB;
use session;
class SalesController extends Controller
{
    public function order()
    {
        $orders = Orders::get();
        $ordersproduct = ordersproduct::get();
        $product = Products::get();
		$vendor_id = session()->get('login_id');
     
        

        $ordersproduct =  DB::table('orders')
        ->select('ordersproducts.id','ordersproducts.order_id','ordersproducts.product_id','ordersproducts.product_name','ordersproducts.product_image','ordersproducts.product_gstin','ordersproducts.product_size','ordersproducts.product_quantity','ordersproducts.product_price','ordersproducts.total_price','ordersproducts.order_status','orders.order_date','orders.payment_status')
                   ->join('ordersproducts','ordersproducts.order_id','=','orders.orders_id')
                   ->join('products_details', 'products_details.products_id', '=', 'ordersproducts.product_id')
                   ->join('products', 'products.product_id', '=', 'products_details.products_id')
                   ->where('ordersproducts.order_status', '=', 'New')
                   ->where('products.logintype', '=', 'Vendor')
				   ->where('products.login_id', '=', $vendor_id)
                   ->get();
                   
           $ordersproductaccept = DB::table('orders')
        ->select('ordersproducts.id','ordersproducts.order_id','ordersproducts.product_id','ordersproducts.product_name','ordersproducts.product_image','ordersproducts.product_gstin','ordersproducts.product_size','ordersproducts.product_quantity','ordersproducts.product_price','ordersproducts.total_price','ordersproducts.order_status','orders.order_date','orders.payment_status')
                   ->join('ordersproducts','ordersproducts.order_id','=','orders.orders_id')
                   ->join('products_details', 'products_details.products_id', '=', 'ordersproducts.product_id')
                   ->join('products', 'products.product_id', '=', 'products_details.products_id')
                   ->where('ordersproducts.order_status', '=', 'Accept')
                   ->where('products.logintype', '=', 'Vendor')
				    ->where('products.login_id', '=', $vendor_id)
                   ->get();
                   
           $ordersproductdispatch =DB::table('orders')
        ->select('ordersproducts.id','ordersproducts.order_id','ordersproducts.product_id','ordersproducts.product_name','ordersproducts.product_image','ordersproducts.product_gstin','ordersproducts.product_size','ordersproducts.product_quantity','ordersproducts.product_price','ordersproducts.total_price','ordersproducts.order_status','orders.order_date','orders.payment_status')
                   ->join('ordersproducts','ordersproducts.order_id','=','orders.orders_id')
                   ->join('products_details', 'products_details.products_id', '=', 'ordersproducts.product_id')
                   ->join('products', 'products.product_id', '=', 'products_details.products_id')
                   ->where('ordersproducts.order_status', '=', 'Dispatch')
                   ->where('products.logintype', '=', 'Vendor')
				    ->where('products.login_id', '=', $vendor_id)
                   ->get();
                   
           $ordersproductdelivered = DB::table('orders')
        ->select('ordersproducts.id','ordersproducts.order_id','ordersproducts.product_id','ordersproducts.product_name','ordersproducts.product_image','ordersproducts.product_gstin','ordersproducts.product_size','ordersproducts.product_quantity','ordersproducts.product_price','ordersproducts.total_price','ordersproducts.order_status','orders.order_date','orders.payment_status')
                   ->join('ordersproducts','ordersproducts.order_id','=','orders.orders_id')
                   ->join('products_details', 'products_details.products_id', '=', 'ordersproducts.product_id')
                   ->join('products', 'products.product_id', '=', 'products_details.products_id')
                   ->where('ordersproducts.order_status', '=', 'Delivered')
                   ->where('products.logintype', '=', 'Vendor')
				    ->where('products.login_id', '=', $vendor_id)
                   ->get();
                   
           $ordersproductreturn = DB::table('orders')
        ->select('ordersproducts.id','ordersproducts.order_id','ordersproducts.product_id','ordersproducts.product_name','ordersproducts.product_image','ordersproducts.product_gstin','ordersproducts.product_size','ordersproducts.product_quantity','ordersproducts.product_price','ordersproducts.total_price','ordersproducts.order_status','orders.order_date','orders.payment_status')
                   ->join('ordersproducts','ordersproducts.order_id','=','orders.orders_id')
                   ->join('products_details', 'products_details.products_id', '=', 'ordersproducts.product_id')
                   ->join('products', 'products.product_id', '=', 'products_details.products_id')
                   ->where('ordersproducts.order_status', '=', 'Return')
                   ->where('products.logintype', '=', 'Vendor')
				    ->where('products.login_id', '=', $vendor_id)
                   ->get();
                   
           $ordersproductcancel = DB::table('orders')
        ->select('ordersproducts.id','ordersproducts.order_id','ordersproducts.product_id','ordersproducts.product_name','ordersproducts.product_image','ordersproducts.product_gstin','ordersproducts.product_size','ordersproducts.product_quantity','ordersproducts.product_price','ordersproducts.total_price','ordersproducts.order_status','orders.order_date','orders.payment_status')
                   ->join('ordersproducts','ordersproducts.order_id','=','orders.orders_id')
                   ->join('products_details', 'products_details.products_id', '=', 'ordersproducts.product_id')
                   ->join('products', 'products.product_id', '=', 'products_details.products_id')
                   ->where('ordersproducts.order_status', '=', 'Cancel')
                   ->where('products.logintype', '=', 'Vendor')
				    ->where('products.login_id', '=', $vendor_id)
                   ->get();


        return view('layout.vendor.sales.order-list')
        ->with(
            [
                // "orders" => $orders,
                // "ordersproduct" =>$ordersproduct

                "ordersproduct" =>$ordersproduct,
                "ordersproductaccept" =>$ordersproductaccept,
                "ordersproductdispatch" =>$ordersproductdispatch,
                "ordersproductdelivered" =>$ordersproductdelivered,
                "ordersproductreturn" =>$ordersproductreturn,
                "ordersproductcancel" =>$ordersproductcancel
                
            ]
        );

    }
    public function orderstatusupdate(Request $request, $id)
    {
        // echo 'test';
       $status = $request->sts;
        // echo $status;
        // echo $id;
        // exit;
        // $status = $request->input('status');
        $dd = ordersproduct::where('id',$id)->update(['order_status'=>$status]);
    

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
//   DB::table("ordersproduct")->whereIn('id',$idr)->update(['order_status'=>$sts]);
}
    
      return response()->json(['success'=>"Products Updated successfully."]);

    }


    public function transaction()
    {
        return view('layout.vendor.sales.order-transaction');
    }
}
