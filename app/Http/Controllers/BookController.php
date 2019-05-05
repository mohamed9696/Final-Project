<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Book;

class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /*Display a listing of the resource*/
     
    public function index()
    {
        $books = Book::where('user_id',Auth::user()->id)->orderBy('id','asc')->get();
        return view('book.index',compact('books'));
    }

    /*Store a newly created resource in storage*/
    
    public function store(Request $request)
    {
        $book = new Book();
        $book->name = $request->name;
        $book->user_id = Auth::user()->id;
        $book->description = $request->description;
        $book->url = $request->url;
        $book->save();
        return redirect('/books');
    }

    /*Display the specified resource*/

    public function show($id)
    {
        $book = Book::find($id);
        return view('book.show',compact('book'));
    }

    /*Show the form for editing the specified resource*/
     
    public function edit($id)
    {    
        $book  = Book::find($id);
         return view('book.edit',compact('book'));
    }

    /*Update the specified resource in storage*/
     
    public function update(Request $request)
    {
       
        $book = Book::find($request->id);
        $book->name = $request->name;
        $book->description = $request->description;
        $book->save();
        \Session::flash('flash_message','successfully Updated.');
        return redirect('/books');
        
    }
    

    /*Remove the specified resource from storage*/

    public function destroy(Request $request)
    {
        $book = Book::find($request->id);
        $book->delete();
        \Session::flash('flash_message','successfully Deletedd.');
        return redirect('/books');
    }
}
