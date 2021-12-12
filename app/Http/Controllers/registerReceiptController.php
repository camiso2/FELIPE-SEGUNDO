<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Redirect;
use Session;
use DateTime;
use Image;
use App\Participants;

class registerReceiptController extends Controller
{

	public function deleted_participants(Request $request){
		$participant =  Participants::find($request->id);
		$participant->state = '1';      
		$participant->save();
		return redirect()->back()->with('participant', 'El Participante ( '.$request->nombres.' ) fue eliminado de la lista de participantes !');
	}
	public function registerReceipt(Request $request)
	{

        //dd($request->all());
		$rules = array(
			'_token'=>'required',
			//'nacimiento'=>'required|max:10',
			'nombres'=>'required|max:70',
			'apellidos'=>'required|max:70',
			'supermercado'=>'required',
			'recibo' => 'required|unique:participants',
			'fper'=>'required|mimes:jpeg,png,jpg,gif,JPG,PNG,GIF|max: 200000000',
			
		);

		$validator = Validator::make(Input::all(), $rules);
		if($validator ->fails()){
			Session::flash('alert_error', 'Hay problemas con los datos,  modifíquelos por favor!');
			$this->validate($request,$rules);
		}else{
			ini_set('memory_limit', '256M');
			$Fetch = new \DateTime();
			$directoryUser = $Fetch->format('YmdHisu');
			$suf  = rand(1,100000000000000);
			$name_directory ='data_users/';
			$img = $request->file('fper');
           // mkdir($name_directory, 0777, true); 
			$temp_name = $request->recibo.'-'.$request->supermercado.'.'. $img->getClientOriginalExtension();
			$this->save_info($img,$name_directory,$temp_name); 
			$profile =  new Participants;
			
			$profile->nombres = $request->nombres;
			$profile->apellidos = $request->apellidos;
			$profile->telefono = $request->telefono;
			$profile->email = $request->email;
			$profile->nacimiento = $request->anio."-".$request->mes."-".$request->dia;
			$profile->supermercado = $request->supermercado;
			$profile->recibo = $request->recibo;
			$profile->fper = $temp_name;
			$profile->save();
			$user= Participants::orderby('id','DESC')->first();
			//dd($user->id);
			$codeConfirm=$user->id;
			if ($codeConfirm<10) {
				$codeConfirm = "00".$codeConfirm;
			}
			if ($codeConfirm>10 && $codeConfirm<100 ) {
				$codeConfirm = "0".$codeConfirm;
			}
			$profile = Participants::find($user->id);
			$profile->code = $codeConfirm;
			$profile->save();
			//return $codeConfirm;
			Session::flash('alert_success', 'Su participación fue recibida.');
			Session::flash('gracias', '¡Gracias!');
			Session::flash('code', '# confirmacion '.$codeConfirm);
			return redirect()->back();

		}
	}
	public function random_string()
	{
		$key = '';
		$keys = array_merge( range('a','z'), range(0,9) );
		for($i=0; $i<10; $i++)
		{
			$key .= $keys[array_rand($keys)];
		}
		return $key;
	}
	public function save_info($img,$name_directory,$temp_name){
		$imgI = Image::make($img);
		$upload_success = $imgI->save($name_directory . $temp_name, 70);
		if(!$upload_success){
			Session::flash('alert_error', 'Hay problemas para guardar su imagen, por favor intentelo de nuevo !');
			return redirect()->back();
		}
	}
}
