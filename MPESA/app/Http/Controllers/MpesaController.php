<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Safaricom\Mpesa\Mpesa;
class MpesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $mpesa = new Mpesa();
        $BusinessShortCode = 174379;
        $Password =
        $stk = $mpesa->STKPushSimulation(env('BusinessShortCode'), env('Passkey'), env('TransactionType'), $request->amount, $request->p_number, env('PartyB'),$request->p_number, env('CallBackUrl'), 'account', 'test','remark'
        );
        return back(compact('stk'));
    }


    public function show($id)
    {
        //
    }


}
