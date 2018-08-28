<?php

namespace App\Http\Controllers\Financial;

use App\Model\Financial\Detailed;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function detailed(){
        $Detailed = Detailed::where('ParentId', '=', 0)->get();
        $AllDetailed = Detailed::pluck('Name', 'Id')->all();
        return view('financial.detailed.detailed', compact('Detailed', 'AllDetailed'));
    }

    public function addDetailed(Request $request)
    {
        $input = $request->all();
        Detailed::create($input);
        return back()->with('با موفقیت افزوده شد');
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
     * @param  \App\Model\Financial\Detailed  $detailed
     * @return \Illuminate\Http\Response
     */
    public function show(Detailed $detailed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Financial\Detailed  $detailed
     * @return \Illuminate\Http\Response
     */
    public function edit(Detailed $detailed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Financial\Detailed  $detailed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detailed $detailed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Financial\Detailed  $detailed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detailed $detailed)
    {
        //
    }
}
