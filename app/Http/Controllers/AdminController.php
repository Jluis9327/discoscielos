<?php

namespace App\Http\Controllers;

use App\Presentation;
use Illuminate\Http\Request;
use App\Banner;
use App\User;
use File;
use App\Box;
use App\Box_Presentation;
use App\Onelevel_Presentation;
class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }
    public function banner()
    {
        $banner=Banner::find([1,2,3,4,5,6]);
        return view('admin.banner')->with(compact('banner'));
    }
    public function registerindex(){//L
        return view('admin.register');
    }
    public function register(Request $request)
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
                $objuser->Id_Rol=2;
                $objuser->Id_Est=1;
                $save=$objuser->save();
                return redirect('admin/confirm/');
            }
            catch (Exception $e){
                return view('admin.register');
            }
        }
        else{
            return view('admin.register');
        }

    }
    public function confirm(){
        return view('admin.confirm');
    }
    public function modify(Request $request){

        $x=$request->iduser;
        $user=User::find($request->iduser);
        //dd($request["name$x"]);
        $user->Name=$request["name$x"];
        $user->surname=$request["ape$x"];
        $user->DNI=$request["dni$x"];
        $user->phone=$request["phone$x"];
        $user->email=$request["email$x"];
        if($request["password$x"]!=""){
            $user->password=bcrypt($request["password$x"]);
        }
        else{
            $user->password;
        }
        if($request["estado$x"]=='Activo')
        {
            $user->Id_Est=1;
        }
        elseif ($request["estado$x"]=='Inactivo')
        {
            $user->Id_Est=2;
        }
        else{
            return back();
        }
        $user->save();
        return view('admin.index');
    }
    public function modifyindex()
    {
        $user=User::all();
        return view('admin.modify')->with(compact('user'));
    }
    public function up(Request $request)
    {
        date_default_timezone_set('America/Lima');
        $fechax = date('Y/m/d');
        $fecha=$request->fecha;
        if(isset($fecha)){
            $dia=$request->Day;
            $objpresentacion = new Presentation();
            $objpresentacion->Name = $dia;
            $objpresentacion->Date = $fecha;
            $objpresentacion->save();
            $boxes=Box::all();
            $presentation1=Presentation::where('Name', $request->Day)->orderBy('Date', 'DESC')->take(1)->get();
            foreach ($boxes as $item) {
                $box_presentation=new  Box_Presentation();
                $box_presentation->Id_Bo=$item->Id_Bo;
                $box_presentation->Id_Pre=$presentation1[0]->Id_Pre;
                $box_presentation->Id_Est=3;
                $box_presentation->save();
            }
            $onelevel_presentation=new Onelevel_Presentation();
            $onelevel_presentation->gauging=60;
            $onelevel_presentation->quantity=0;
            $onelevel_presentation->Date=$fechax;
            $onelevel_presentation->Id_Pre=$presentation1[0]->Id_Pre;
            $onelevel_presentation->save();
        }
        $file = $request->file('photo');
        if ($file == null) {
            return back();
        }
        $path = public_path() . '/images/banner';
        $fileName = uniqid() . $file->getClientOriginalName();
        $moved = $file->move($path, $fileName);
        if ($moved) {
            $banner = Banner::find($request->Id);
            $deleted = File::delete($path . "/" . $banner->Route);
            $banner->Route = $fileName;
            $banner->Day = $request->Day;
            $banner->Type = $request->Tipo;
            $presentation = Presentation::where('Name', $request->Day)->orderBy('Date', 'DESC')->take(1)->get();
            foreach ($presentation as $item) {
                $banner->Id_Pre = $item->Id_Pre;
                $banner->save();
            }
        }
        return back();

    }
}
