<?php

namespace App\Http\Controllers\Financial;

use App\Model\Financial\Group;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GroupAccentingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Group = Group::where('ParentId', '=', 0)->get();
        $AllGroup = Group::pluck('Name', 'Id')->all();
        return view('financial.total.index', compact('Group', 'AllGroup'));
    }

    /**
     * Show the application dashboard.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addGroup(Request $request)
    {
        $input = $request->all();
        Group::create($input);
        return back()->with('با موفقیت افزوده شد');
    }

    public function updateGroup(Request $request)
    {
        DB::table('financial_accounts')
            ->where('Id', $request->input("ThisId"))
            ->update(['Code' => $request->input("Code"),
                'Name' => $request->input("Name"),
                'TheNatureOfTheAccountBalance' => $request->input("TheNatureOfTheAccountBalance"),
                'CostFactor' => $request->input("CostFactor")]);


        return back();
    }

    public function addHelper(Request $request)
    {
        $input = $request->all();
        Group::create($input);
        return back()->with('با موفقیت افزوده شد');

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Financial\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Financial\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Financial\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Financial\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}
