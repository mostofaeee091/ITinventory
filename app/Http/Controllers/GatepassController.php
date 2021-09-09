<?php

namespace App\Http\Controllers;

use App\Models\Gatepass;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GatepassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $gatepasses = Gatepass::all();

        return view('gatepass.index',['gatepasses'=>$gatepasses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gatepass.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $gatepasses = new Gatepass();
        $gatepasses->gatepassNo = $request->gatepassNo;
        $gatepasses->companyName = $request->companyName;
        $gatepasses->destination = $request->destination;
        $gatepasses->attention =$request->attention;
        $gatepasses->carrierName=$request->carrierName;
        $gatepasses->designation =$request->designation;
        $gatepasses->employeeId =$request->employeeId;
        $gatepasses->preparedBy =$request->preparedBy;
        $gatepasses->receivedBy =$request->receivedBy;
        $gatepasses->authorizedBy =$request->authorizedBy;
        $gatepasses->save();

        $productName = $request->get('productName');
        $quantity = $request->get('quantity');
        $purpose = $request->get('purpose');

        for ($i = 0; $i <sizeof($productName); $i++) {
            $product = new Product();
            $product->productName = $productName[$i];
            $product->quantity = $quantity[$i];
            $product->purpose = $purpose[$i];
            $product->gatepassID = $gatepasses->id;
            $product->save();
        }

        return redirect(route('index'));


    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {



        $gatepass = Gatepass::find($id);
        //$gatepass= Gatepass::where('id', $id)->first();
        //dd($gatepass);
        return view('gatepass.generategatepass',['gatepass'=>$gatepass]);
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

    }
}
