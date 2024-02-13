<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index($name, $last = ' ')
    {
        return view('admin.welcome', [
            'name' => $name,
            'last' => $last,
        ]);
        /*    return view('admin.welcome')
    ->with('name',$name)
    ->with('last',$last);
*/
        //var_dump(compact('name','last'));
        //return view('admin.welcome',compact('name','last'));
    }
    public function hellos()
    {
        $route = route('welcome', ['lname' => 'nabil', 'faisal']);
        //$route=route('welcome');
        echo '<a href="' . $route . '">welcome</a> ';
    }
}
