<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Executive;
use Illuminate\Http\Request;

class ExecutiveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $executive = Executive::Where('user_id', auth()->user()->id)->first();
        $clients = Client::Where('executive_id', $executive->id)->get();
        return view('executives.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('executives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|min:5|max:50',
            'amount' => 'required',
            'age' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $executive = Executive::Where('user_id', auth()->user()->id)->first();

        $client = new Client();
        $client->name = $request->name;
        $client->amount = $request->amount;
        $client->age = $request->age;
        $client->direction = $request->address;
        $client->phoneNumber = $request->phone;
        $client->executive_id = $executive->id;

        if ($client->save()) {
            return redirect()->action([ExecutiveController::class, 'index']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Executive  $executive
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $client = Client::find($request->executive);
        //dd($client);
        return view('executives.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Executive  $executive
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $client = Client::find($request->executive);
        //dd($client);
        return view('executives.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Executive  $executive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Executive $executive)
    {
        $data = request()->validate([
            'name' => 'required|min:5|max:50',
            'amount' => 'required',
            'age' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $executive = Executive::Where('user_id', auth()->user()->id)->first();

        $client = Client::find($request->id);
        $client->name = $request->name;
        $client->amount = $request->amount;
        $client->age = $request->age;
        $client->direction = $request->address;
        $client->phoneNumber = $request->phone;
        $client->executive_id = $executive->id;

        if ($client->save()) {
            return redirect()->action([ExecutiveController::class, 'index']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Executive  $executive
     * @return \Illuminate\Http\Response
     */
    public function destroy(Executive $executive)
    {
        //
    }
}
