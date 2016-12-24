<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roaster;
use App\Http\Requests\RoasterRequest;
use Storage;

class RoasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roasters = Roaster::all();

        return view('roasters.index', compact('roasters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roasters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoasterRequest $request)
    {

        $roaster = new Roaster($request->all());
        $roaster['slug'] = str_slug($roaster['name'] . '-' . $roaster['city'], '-');

        if($request->hasFile('logo')){
            $fileName = $roaster['slug'] . '-logo.' . $request->file('logo')->extension();
            $request->file('logo')->move(
                storage_path() . '/app/public/logos/', $fileName
            );

            $roaster['logo'] = $fileName;
        }

        $roaster->save();
        return redirect('roaster');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roaster = Roaster::where('slug', $id)->firstOrFail();

        return view('roasters.show', compact('roaster'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roaster = Roaster::where('slug', $id)->firstOrFail();

        return view('roasters.edit', compact('roaster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoasterRequest $request, $id)
    {
        $roaster = Roaster::findOrFail($id);
        $roaster->update($request->all());
        $roaster['slug'] = str_slug($roaster['name'] . '-' . $roaster['city'], '-');

        if($request->hasFile('logo')){
            Storage::delete('/public/logos/' . $roaster->logo);
            $fileName = $roaster['slug'] . '-logo.' . $request->file('logo')->extension();
            $request->file('logo')->move(
                storage_path() . '/app/public/logos/', $fileName
            );

            $roaster['logo'] = $fileName;
        }

        $roaster->save();
        return redirect('roaster');
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
}
