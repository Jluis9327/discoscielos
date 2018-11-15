<?php
/**
 * Created by PhpStorm.
 * User: vicki
 * Date: 10/11/2018
 * Time: 15:15
 */

namespace App\Http\Controllers;


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
    public function zone(){
        return view('client.zone');
    }
    public function first(){
        return view('client.first');
    }
    public function second(){
        return view('client.second');
    }

}