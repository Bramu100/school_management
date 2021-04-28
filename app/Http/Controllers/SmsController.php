<?php

namespace App\Http\Controllers;

use App\Models\Sms;
use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;

class SmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $smses=sms::all();
         return view('sms.index', compact('smses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sms.create');
    }


    public function sendSMS($smses,$message)
    {

    $username = 'hotlunch'; // use 'sandbox' for development in the test environment
    $apiKey   = 'f00081c7d5230a82b19fded9e16cd5c3ae73df8196ede611cd3694fc6141d4d6'; // use your sandbox app API key for development in the test environment
    $AT       = new AfricasTalking($username, $apiKey);
    $sms      = $AT->sms(); //Getting one of the services
    $result   = $sms->send([
        'to'      => $smses->phone_no,
        'from'    =>'HOTLUNCH',
        'message' => $message
    ]);   //use the service
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
         $input=$request->all();
         $smses=Sms::create($input);
         $smses->phone_no;
         $message=$smses->messages;
        $this->sendSMS($smses,$message);
        return redirect('/sms/'.$sms->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function show(Sms $sms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function edit(Sms $sms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sms $sms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sms $sms)
    {
        //
    }
}
