<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UsersController extends Controller
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

    
    public function create(Request $request)
    {
        //return $request->name;
        /* $user = new Users();
        $user->name = $request->name;
        $user->ocupation = $request->ocupation;
        $user->area = $request->area;
        $user->save();
        return $user; */ 
        return Users::create([
            'name' => $request->name,
            'ocupation' => $request->ocupation,
            'area' => $request->area,
        ]);
        
        
    }

    static function getUser($id)
    {
        $user = Users::find($id);
        return $user;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $user)
    {
        $user->name = request('name');
        $user->ocupation = request('ocupation');
        $user->area = request('area');
        $user->save();
        //
    }

    public function getUsers()
    {
        $user = Users::all();
        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        $users = Users::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Users::where('id', $request->id)->update([
            'name' => $request->name,
            'ocupation' => $request->ocupation,
            'area' => $request->area,
        ]);
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }
}
