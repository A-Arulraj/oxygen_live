<?php

namespace App\Http\Controllers\GstController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\GST\GST;

use Flasher\Prime\FlasherInterface;

class GstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gst = GST::get();
        return view('layout.admin.master.gst')->with("gst", $gst);
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
    public function store(Request $request, FlasherInterface $flasher)
    {

        $gststore = new GST();

        try {
            $gststore->gst_name = $request->name;
            $gststore->value = $request->value;
            $gststore->description = $request->description;
            $gststore->status = $request->status;
            $gststore->flag = 0;
            $gststore->created_by = 1;
			
            $gststore->save();
				
			//print_r($gststore);	

            $flasher->addSuccess('New GST Added successfully!');
            return redirect()->route('gst.master.index');
        } catch(Throwable $th) {
		    //echo print_r($th);
            $flasher->addError('Something Error!! =>' . $th);
            return redirect()->route('gst.master.index');
        }
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
    public function destroy($id, FlasherInterface $flasher)

    {
        try {
            GST::where("id", $id)->delete();
            $flasher->addsuccess('Gst Removed!');
            return redirect()->route('gst.master.index');
        } catch (\Throwable $th) {
            $flasher->addError('Something Error!!');
            return redirect()->route('gst.master.index');
        }
    }
    
    public function editgst($id)
    {
        $editdepartment = GST::find($id);
        // print_r($zone_data);die;
        return response()->json([
            'editdepartment'=>$editdepartment
             //$zone_data
        ]);
        
    }



public function updategst(FlasherInterface $flasher, Request $request, $id)
    {
        //return ('thdfiou8o');

        //dd ($id);
        try {
            $gst = GST::find($id);
        //    $Departments->name = $request->editname;
        // $Departments->status = $request->editstatus;
      
        $input  =  $request->all();
           
            $gst->update($input);
            $flasher->addSuccess('department Updated!');
            return redirect()->route('gst.master.index');
        } catch (\Throwable $th) {
            // $flasher->addError('Something Error!!');
            $flasher->addError('Something Error!!');
            return redirect()->route('gst.master.index');
         }
        
    }
}
