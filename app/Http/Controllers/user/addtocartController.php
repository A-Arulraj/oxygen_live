<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Products\ProductsDetails;
use App\Models\Products\Products;
use App\Models\Offer\Offer;
use App\Models\bidamount;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category\CategoryMain;
use App\Models\Category\Category;
use App\Models\Category\CategorySub;
use App\Models\User\wishlist;
use Illuminate\Support\Facades\Auth;

class addtocartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            //  echo $productdetail_id;
            //  exit();

    //     // $product_det = ProductsDetails::find($productdetail_id);
    //     $product_det = ProductsDetails::join('products','products.product_id','=','products_details.products_id')->where('products_details.id', '=', $productdetail_id)->get();
    //     //dd($product_det);
    //    return view('website.front-end.product_view')->with([
    //     "product_det" =>$product_det
    //        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function datashow($productdetail_id)
    {
        
        $productdetailid = $productdetail_id;
        
          $product_det = Products::join('products_details','products.id','=','products_details.products_id')->where('products_details.products_id', '=', $productdetail_id)->get();
            //dd($product_det);
        //$product_det = ProductsDetails::join('products','products.id','=','products_details.products_id')->where('products.id', '=', $productdetail_id)->get();
        if(count($product_det)>0)
        {
        
        $product = Products::where('category',$product_det[0]->category)->get();
        $vendorname = User::where('login_id',$product_det[0]->created_by)
        ->where('status',2)
        ->first();
        if(!empty($vendorname))
        {
            $vendor_name = $vendorname->name;
        }
        else
        {
            $vendor_name = '';
        }
        
        
         $categorymain = CategoryMain::where('status', 1)->limit(7)->get();
        return view('website.front-end.product_view')->with([
        "product_det" =>$product_det,
        "product" =>$product,
        "productdetailid" =>$productdetailid,
        "vendorname" =>$vendor_name,
        "categorymain" =>$categorymain
           ]);
           
        }
        else
        {
        return view('website.front-end.product_notfount');
        }
        
    }

	public function productshow($productdetail_id)
    {
        
        $productdetailid = $productdetail_id;
        $product_det = Products::join('products_details','products.product_id','=','products_details.products_id')->where('products_details.products_id', '=', $productdetail_id)->get();
        //dd($product_det);
        if(count($product_det)>0)
        {
        
        $product = Products::where('category',$product_det[0]->category)->get();
        return view('website.front-end.product_view')->with([
        "product_det" =>$product_det,
        "product" =>$product,
        "productdetailid" =>$productdetailid
           ]);
        }
        else
        {
        return view('website.front-end.product_notfount');
        }
        
       
    }

    public function colorsize(Request $request)
    {
        //echo 'test';
        $pro_id = $request->id;
        $pro_details =  ProductsDetails::where('id',$pro_id)->get();
    //      dd($pro_details);
        $pro_details_id = $pro_details[0]->products_id;
        $product_details_color =  ProductsDetails::where([['products_id',$pro_details_id]])->get();
        //dd($product_details_color);
       return response()->json($product_details_color);
    }


    public function sizedetails(Request $request)
    {
    //    echo 'test';
        $pro_id = $request->size;

        
        $pro_sizedetails =  ProductsDetails::where('id',$pro_id)->get();
        
        $product_id = $pro_sizedetails[0]->products_id;
        $productcolor =  ProductsDetails::where([['products_id',$product_id],['size',$pro_sizedetails[0]->size ]])->get();
        // dd($productcolor);
        $productoffer =Products::where('product_id',$productcolor[0]->products_id)->get();
        $offername = Offer::where('id',$productoffer[0]->offers)->get();
    
        return response()->json(['pro_sizedetails'=>$pro_sizedetails, 'pro_color'=>$productcolor, 'offername'=>$offername]);
    }


    /*start*/
    public function colorvalue(Request $request)
    {
    //    echo 'test';
     $color_value_id = $request->colorvalue;
      
         $pro_colordetails =  ProductsDetails::where('id',$color_value_id)->get();
        $product_id = $pro_colordetails[0]->products_id;
       $productcolorvalue =  ProductsDetails::where([['products_id',$product_id],['color',$pro_colordetails[0]->color ]])->get();
       $pro_color_val =  ProductsDetails::where([['products_id',$product_id]])->get();
       //    $pro_color =  $productcolor[0]->color;
        // dd( $productcolorvalue);
         return response()->json(['pro_colordetails'=>$pro_colordetails, 'productcolorvalue'=>$productcolorvalue,'pro_color_val'=>$pro_color_val]);
    }
    /*end*/
    
    public function bidamount(Request $request)
     {
        $bidamount = new bidamount();
        

         $bidamount->bid_value = $request->input('bid_value');
         $bidamount->auction_id = $request->input('pro_id');
         $bidamount->pro_val =  $request->input('product_val');
         $bidamount->admin_id =  $request->input('admin_id');
         $bidamount->product_type = $request->input('product_type');
         $bidamount->product_id = $request->input('product_id');
         $bidamount->slab = $request->input('slab');
         $bidamount->bid_price = $request->input('bid_price');
         $bidamount->flag = 1;
         $bidamount->save(); 
         return redirect()->back()->with('flash_msg_success','Your Bid value has been submitted Successfully,');
     }
     public function addtowishlist(Request $request, $product_id, $product_name, $product_price, $vendar_name, $vendar_id)
     {

        $wishlist = new wishlist();

    //    $user_id = Auth::user()->id;
      $id   = Auth::user()->login_id;
      $user_id =  session('userId');
      $wishlist->login_id =$id;
    //   $wishlist->user_id = $user_id;
       
      $wishlist->product_id = $product_id;
      $wishlist->vendar_name= $vendar_name;
      $wishlist->product_name =  $product_name;
      $wishlist->price = $product_price;
      $wishlist->vendar_id =  $vendar_id;
      $wishlist->flag = '1'; 
      $wishlist->save();
      return redirect()->back()->with('flash_msg_success','Your items are  Added Successfully to Wishlist,');
     }
}
