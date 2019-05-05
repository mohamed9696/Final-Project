<?php

namespace App\Http\Controllers;
use\Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $users = User::all();
        return view('user.index' ,compact('users'));
    }

    /********************************************************************************/
                    /*Show the form for creating a new resource*/

    public function create()
    {
        //
    }

    /********************************************************************************/

                    /*Store a newly created resource in storage*/
     
    public function store(Request $request)
    {
        //
    }

    /******************************************************************************* */

     /* Display the specified resource*/
     
    public function show($id)
    {
        $book = User::find($id);
        return view('user.show',compact('book'));
    }

    /******************************************************************************* */

    
     /*Show the form for editing the specified resource*/
     
    public function edit($id)
    {
        //
    }

    /*******************************************************************************/
    
    /*Update the specified resource in storage*/
     
    public function update(Request $request, $id)
    {
        //
    }
    /*******************************************************************************/

     /*Remove the specified resource from storage*/
     
    public function destroy($id)
    {
        //
    }
}
