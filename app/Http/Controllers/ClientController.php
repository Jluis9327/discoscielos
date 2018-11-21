<?php
/**
 * Created by PhpStorm.
 * User: vicki
 * Date: 10/11/2018
 * Time: 15:15
 */

namespace App\Http\Controllers;
use App\Presentation;
use App\Box_Presentation;

class ClientController
{
    /*public function register(Request $request)
{
    if($request->pass===$request->conf)
    {
        try{
            $objuser=new User();
            $objuser->DNI=$request->dni;
            $objuser->name=$request->name;
            $objuser->surname=$request->apepat." ".$request->apemat;
            $objuser->phone=$request->phone;
            $objuser->email=$request->email;
            $objuser->password=bcrypt($request->pass);
            $objuser->Id_Rol=3;
            $objuser->Id_Est=1;
            $save=$objuser->save();
            return view('');
        }
        catch (Exception $e){
            return view('client.login');
        }
    }
    else{
        return view('client.login');
    }

}*/
    public function index(){
        return view('client.index');
    }
    public function zoneindex(){
        $presentation=Presentation::orderBy('Date','desc')->limit(3)->get();
        $date=$presentation[2]->Date;
        return view('client.zone')->with(compact('date'));
    }
    public function firstindex(){

        return view('client.first');
    }
    public function secondindex($dni,$date){
        $presentation=Presentation::orderBy('Date','desc')->limit(3)->get();
        foreach ($presentation as $item)
        {
            if($date==$item['Date'])
            {
                $fecha=$item['Id_Pre'];
            }
        }
        $boxes=Box_Presentation::where('Id_Pre',$fecha)->get();
        return view('client.second')->with(compact('dni','boxes','presentation','date'));
    }

}