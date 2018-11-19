<?php

namespace App\Http\Controllers;

use App\Box;
use App\Onelevel;
use App\Onelevel_Presentation;
use App\Presentation;
use App\User;
use Illuminate\Http\Request;
use App\Box_Presentation;
use App\Reservation;
use Illuminate\Support\Facades\Auth;
use App\Twolevel_Box;


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
       // $boxes=Box_Presentation::where('Id_Pre',$presentation[2]->Id_Pre)->get();
      //  return view('recepcionist.zone')->with(compact('dni','presentation','date','boxes'));
        return view('recepcionist.zone')->with(compact('dni','presentation','date'));
    }
    public function search(Request $request)
    {

        $dato = User::where('DNI',$request->dni)->get();
        $dni=$request->dni;
        $mensaje=true;
        if($dni != null && strlen($dni) == 8){
            $mensaje2=false;
            return view('recepcionist.search')->with(compact('dato','mensaje','dni','mensaje2'));
        }
        else{
            $mensaje2=true;
            return view('recepcionist.search')->with(compact('dato','mensaje','dni','mensaje2'));
        }

    }
    public function searchindex()
    {
        $dni=null;
        $mensaje=false;
        return view('recepcionist.search')->with(compact('mensaje','dni'));
    }
    public function modify(Request $request)
    {
        $dni=null;
        $x=$request->iduser;
        $user=User::find($request->iduser);
        //dd($request["name$x"]);
        $user->name=$request["name$x"];
        $user->surname=$request["ape$x"];
        $user->DNI=$request["dni$x"];
        $user->phone=$request["phone$x"];
        $user->save();
        return view('recepcionist.search')->with(compact('dni'));
    }
    public function registerindex($id)
    {
        $mensaje=false;
        return view('recepcionist.register')->with(compact('id','mensaje'));
    }
    public function register(Request $request)
    {
        $dni=$request->dni;
        $id=$dni;
        $phone=$request->phone;
        $user=User::where('name','like','%',$dni)->orWhere('name','like','%',$phone);
        if($dni != null && strlen($dni) == 8) {
            if ($user==null) {
                try {
                    $objuser = new User();
                    $objuser->DNI = $dni;
                    $objuser->name = $request->name;
                    $objuser->surname = $request->surname;
                    $objuser->phone = $request->phone;
                    $objuser->email = $request->email;
                    $objuser->password = bcrypt($request->pass);
                    $objuser->Id_Rol = 3;
                    $objuser->Id_Est = 1;
                    $save = $objuser->save();
                    
                    $dni = $request->dni;
                    //return redirect()->action('RecepController@zone',['dni'=>$dni]);
                    //return redirect()->route('recep.zone',[$dni]);
                    return redirect('/recep/zone/'. $dni);
                } catch (Exception $e) {
                    return view('recepcionist.register')->with(compact('id'));
                }
            } else {
                $mensaje=true;
                return view('recepcionist.register')->with(compact('id','mensaje'));
            }
        }
        else{

            return view('recepcionist.register')->with(compact('id'));
        }
    }
    public function first($dni,$date){
        $presentation=Presentation::orderBy('Date','desc')->limit(3)->get();
        foreach ($presentation as $item)
        {
            if($date==$item['Date'])
            {
                $idpresentacion=$item['Id_Pre'];
            }
        }
        $disponible=Onelevel_Presentation::where('Id_Pre','=',$idpresentacion)->get();
        return view('recepcionist.first')->with(compact('dni','presentation','disponible'));
    }
    public function firstlevelReserva(Request $request){
        $dni=$request->dni;
        $id=$request->id;
        $iduser=$request->user;
        $presentation=Presentation::Where('Id_Pre','=',$id)->get();
        $cantidad=$request->cantidad;
        foreach ($presentation as $item){
            $fecha=$item['Date'];
        }
        $clien=User::Where('DNI','=',$dni)->get();
        foreach ($clien as $cliente){
            $idcli=$cliente['id'];
        }
        if($cantidad!=""){
            //---------RESERVATION-----------
            $objReserva = new Reservation();
            $objReserva->Date=$fecha;
            $objReserva->Id_Est=6;
            $objReserva->Id_U=$iduser;
            $objReserva->Id_Cli=$idcli;
            $objReserva->Total=$cantidad*25;
            $objReserva->save();
            //--------ONE LEVEL--------------
            $idRe=Reservation::orderBy('Id_Re','desc')->limit(1)->get();
            foreach ($idRe as $item){
                $idreservation=$item['Id_Re'];
            }
            $objone= new Onelevel();
            $objone->Id_Re=$idreservation;
            $objone->quantity=$cantidad;
            $objone->total=$cantidad*20;
            $objone->Id_pre=$id;
            $objone->save();
            //-----------ONELEVEL PRESENTATION--------------
            $objonePresentation=Onelevel::where('Id_Re','=',$idreservation)->get();
            foreach ($objonePresentation as $item){
                $contador=$item['quantity'];
                if($contador<=60){
                    $contador=60-$contador-$cantidad;
                    Onelevel_Presentation::where('Id_Pre','=',$item['Id_Pre'])->update(['quantity' => $contador]);
//                    DB::table('onelevels_presentations')
//                        ->where('Id_Pre', $item['Id_Pre'])
//                        ->update(['quantity' => $contador]);
                }
                else{
                    return redirect('/recep/zone/firstlevel/'.$dni.'/day/'.$fecha);
                }
            }
        }
        else{
            return redirect('/recep/zone/firstlevel/'.$dni.'/day/'.$fecha);
        }
        return view('recepcionist.confirm');

    }
    //-------------------------------------------POST----------------------------------------------------
    public function seconddayindex($dni,$date)
    {
        $presentation=Presentation::orderBy('Date','desc')->limit(3)->get();
        foreach ($presentation as $item)
        {
            if($date==$item['Date'])
            {
                $fecha=$item['Id_Pre'];
            }
        }

        $boxes=Box_Presentation::where('Id_Pre',$fecha)->get();
        return view('recepcionist.second')->with(compact('dni','boxes','presentation','date'));
    }
    public function secondday(Request $request,$dni,$date)
    {
        //dd(Auth::user()->id);
        $reservation=new Reservation();
        $reservation->Date=$date;
        $reservation->Id_Est=5;
        $reservation->Id_U=Auth::user()->id;
        $user=User::where('DNI','=',$dni)->get();
        $reservation->Id_Cli=$user[0]->id;
        $reservation->Total=$request->total;
        $reservation->save();
        $box=Box::all();
        foreach ($box as $item)
        {
            if($request[$item['Cod_Bo']]!==null)
            {
                $twolevel_box=new Twolevel_Box();
                $twolevel_box->Id_Bo=$item['Id_Bo'];
                $reservation1=Reservation::orderBy('Id_Re','desc')->limit(1)->get();
                foreach ($reservation1 as $item2)
                {
                    $twolevel_box->Id_Re=$item2['Id_Re'];
                    $presentation=Presentation::where('Date','=',$date)->get();
                    Box_Presentation::where('Id_Bo','=',$item['Id_Bo'])->where('Id_Pre','=',$presentation[0]->Id_Pre)->update(['Id_Est' => 5]);
                }
                $twolevel_box->save();
            }
        }
        return redirect('/recep/zone/secondlevel/'.$dni.'/day/'.$date.'/confirm');
    }
    public function confirmindex($dni,$date)
    {
        return view('recepcionist.confirm')->with(compact('dni','date'));
    }
}
