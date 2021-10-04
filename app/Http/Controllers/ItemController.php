<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Events\UserEntryLogEvent;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('items.dashboard', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description'   => 'required|string',
            'price'         => 'required|numeric',
            'quantity'      => 'required|numeric',
        ]);

        $item = Item::create($request->all());
        $user_id = auth()->user()->id;
        $log_entry = 'User added the item "' . $request->name;
        event(new UserEntryLogEvent($user_id, $log_entry));

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('items.edit', compact('item')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            
            'name'          => 'required|string',
            'description'   => 'required|string',
            'price'         => 'required|numeric',
            'quantity'      => 'required|numeric',
        ]);       
        $item->update($request->all());
        $user_id = auth()->user()->id;
        $log_entry = 'User updated the item "' . $request->name;
        event(new UserEntryLogEvent($user_id, $log_entry));    
            
        return redirect('/dashboard'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item,Request $request)
    {
        $item->delete();
        $user_id = auth()->user()->id;
        $log_entry = 'User deleted the item "' . $request->name;
        event(new UserEntryLogEvent($user_id, $log_entry));   

        return redirect("/dashboard");
    }

    public function delete(Item $item) {
        return view('items.delete', compact('item'));   
    }
}
