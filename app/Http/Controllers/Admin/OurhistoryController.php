<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ourhistory;
use App\Http\RequestS\Admin\OurhistoryRequest;

class OurhistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Ourhistory::all();
        return view('pages.admin.ourhistory.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.ourhistory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OurhistoryRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/img', 'public'
        );

        Ourhistory::create($data);
        return redirect()->route('ourhistory.index');
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
        $item = Ourhistory::findOrFail($id);
        return view('pages.admin.ourhistory.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OurhistoryRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/img', 'public'
        );

        $item = Ourhistory::findOrFail($id);
        $item->update($data);

        return redirect()->route('ourhistory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Ourhistory::findOrFail($id);
        $item->delete();
        return redirect()->route('ourhistory.index');
    }
}
