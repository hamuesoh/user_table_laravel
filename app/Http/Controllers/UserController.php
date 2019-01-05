<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DBphp;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valuex = 6;
        $users = DBphp::all();
        return view('index', compact('valuex','users'));
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
        
        $getlastID = DBphp::all()->last();
        if ($getlastID == NULL) {
            $last_id = 0;
        }else{
            $last_id = $getlastID->id;
        }
        
        $add_data = $request->get('submit');
        if ($add_data == "add_data") {
            $user_add = new DBphp;
            $user_add->id = $last_id+1;
            $user_add->name = $request->get('fname');
            $user_add->lastname = $request->get('lname');
            $user_add->position = $request->get('position');
            $user_add->save();
            
        }
        return back();
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
    public function destroy(Request $request)
    {   
        $id = $request->get('del');
        // var_dump($gett);
        $todo = DBphp::findOrFail($id);
        $todo->delete();
        return back();

    }
    public function delcheck(Request $request){
        $checks = $request->get('checkboxs');
        $count = count($checks);
        for ($i=0; $i < $count; $i++) { 
            $id = (int)$checks[$i];
            $todo = DBphp::findOrFail($id);
            $todo->delete();
        
        }
        return back();
    }
}
