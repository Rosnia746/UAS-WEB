<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Housingcounseling;
use App\Http\RequestS\Admin\HousingcounselingRequest;

class HousingcounselingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Housingcounseling::all();
        return view('pages.admin.housingcounseling.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.housingcounseling.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HousingcounselingRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/img', 'public'
        );

        Housingcounseling::create($data);
        return redirect()->route('housingcounseling.index');
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
        $item = Housingcounseling::findOrFail($id);
        return view('pages.admin.housingcounseling.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HousingcounselingRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/img', 'public'
        );

        $item = Housingcounseling::findOrFail($id);
        $item->update($data);

        return redirect()->route('housingcounseling.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Housingcounseling::findOrFail($id);
        $item->delete();
        return redirect()->route('housingcounseling.index');
    }
}
