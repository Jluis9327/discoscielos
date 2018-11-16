<?php

namespace App\Http\Controllers;

use App\Box;
use App\Presentation;
use App\User;
use Illuminate\Http\Request;

class RecepController extends Controller
{
    public function index()
    {
        return view('recepcionist.index');
    }
    public function zone($dni)
    {
        $presentation=Presentation::orderBy('Date','desc')->limit(3)->get();
        $date=$presentation[2]->Date;
        return view('recepcionist.zone')->with(compact('dni','presentation','date'));
    }
    public function search(Request $request)
    {
        $dato = User::where('DNI',$request->dni)->get();
        $dni=$request->dni;
        $mensaje=true;
        return view('recepcionist.search')->with(compact('dato','mensaje','dni'));
    }
    public function searchindex()
    {
        $dni=null;
        $mensaje=false;
        return view('recepcionist.search')->with(compact('mensaje','dni'));
    }
    public function modify(Request $request)
    {
        $x=$request->iduser;
        $user=User::find($request->iduser);
        //dd($request["name$x"]);
        $user->name=$request["name$x"];
        $user->surname=$request["ape$x"];
        $user->DNI=$request["dni$x"];
        $user->phone=$request["phone$x"];
        $user->save();
        return view('recepcionist.search');
    }
    public function registerindex($id)
    {
        return view('recepcionist.register')->with(compact('id'));
    }
    public function register(Request $request)
    {
        if($request->pass===$request->conf)
        {
            try{
                $objuser=new User();
                $objuser->DNI=$request->dni;
                $objuser->name=$request->name;
                $objuser->surname=$request->surname;
                $objuser->phone=$request->phone;
                $objuser->email=$request->email;
                $objuser->password=bcrypt($request->pass);
                $objuser->Id_Rol=3;
                $objuser->Id_Est=1;
                $save=$objuser->save();
                $dni=$request->dni;
                //return redirect()->action('RecepController@zone',['dni'=>$dni]);
                //return redirect()->route('recep.zone',[$dni]);
                return redirect('/recep/zone/'.$dni);
            }
            catch (Exception $e){
                return view('recepcionist.register');
            }
        }
        else{
            return view('recepcionist.register');
        }

    }
    public function first(Request $request){
        $dni=$request->dni;
        return view('recepcionist.first')->with(compact('dni'));
    }
    //-------------------------------------------POST----------------------------------------------------
    public function secondday($dni,$date)
    {
        $box=Box::where('Id_Est','Activo')->get();
        $presentation=Presentation::orderBy('Date','desc')->limit(3)->get();
//        return view('recepcionist.second')->with(compact('dni','box'));
        return view('recepcionist.second')->with(compact('dni','box','presentation'));
    }
}
