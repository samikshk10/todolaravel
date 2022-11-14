<?php

namespace App\Http\Controllers;

use App\Models\todotable;
use Illuminate\Http\Request;

class todolistController extends Controller
{

   public function index()
    {
       return view('welcome',['list'=>todotable::all()]);

    }
    function saveTodo(Request $request)
    {

        $todoobj= new todotable();
        $todoobj->title=$request->todo;
        $todoobj->save();
        //  print_r($request->all);
        return redirect('/');
    }

  public function delete(todotable $todotable,$id)
  {
    $row=$todotable::destroy($id);
   
         return back();
        // return $id;
        
       
  }
}
