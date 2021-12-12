<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;
use Redirect;
use App\Participants;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participants = Participants::orderby('id','DESC')->get(); 
        $pDeleted = Participants::where('state','1')->get(); 
        return view('home', compact('participants','pDeleted'));
    }

    public function  modifiqued_data(Request $request){

        $rules = array(
            'name' => 'required|string|max:255',
            //'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'   
        );
        $validator = Validator::make(Input::all(), $rules);
        if($validator ->fails()){
            Session::flash('alert_error', 'Hay problemas con los datos,  modifíquelos por favor!');
            $this->validate($request,$rules);
        }else{
          $result  = new User;
          $result = User::find($request->id);

          $result->name = $request->input('name');
          $result->email = $request->input('email');
          $result->password = Hash::make($request->input('password'));
          $result->save();

          Auth::logout();
          Session::flush();
          return Redirect::to('login');


      }

  }
}
