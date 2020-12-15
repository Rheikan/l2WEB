<?php

namespace App\Http\Controllers;

use App\Mail\mailing;
use App\Models\cuentas;
use App\Models\items;
use App\Models\news;
use App\Models\personajes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class HomeController extends Controller
{


    public function main()
    {

        $imagesDir = 'css/images/chars/';

        $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

        $randomImage = $images[array_rand($images)];


        $imagesDir2 = 'css/images/carousel/';
        //$files = array();
        $cdir = scandir($imagesDir2);
        $images2 = glob($imagesDir2 . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
        foreach ($cdir as $key => $value)
        {
            if (!in_array($value,array(".","..")))
            {
                    $files[] = $imagesDir2.$value;

            }
        }

        //item de votacion para contabilizar las votaciones en el juego
        $votecoin = items::with('pj')->where('item_id','=','4358')->orderBy('count','DESC')->groupBy('owner_id', 'object_id')->havingRaw('max(count)')->paginate(10);
        


        return view('main',compact(['randomImage','files','votecoin']));
    }
    public function noticias()
    {
        $noticias = news::paginate(5);
        return view('noticias',compact(['noticias']));
    }
    public function cuentas()
    {
        return view('cuentas');
    }
    public function descargas()
    {
        return view('descargas');
    }
    public function redes()
    {
        return view('redes');
    }
    public function login(Request $request)
    {

        $valida = cuentas::with('chars')->where('login','=',$request->cuenta)->where('serial','=',$request->token)->get();
        $token = $request->token;

        $items = items::all();

        if(!$valida->count() == 0)
        {
            $chars = personajes::where('account_name','=',$request->cuenta)->get();
            $cuenta = $request->cuenta;
            return view('cuentas',compact(['chars','cuenta','token','items']));
        }
        else
        {
            return view('cuentas')->with('Mensaje','No se encontró la cuenta, o el token es invalido');
        }
    }
    public function passchange(Request $request)
    {
        cuentas::where('login','=',$request->cuenta)->update([
            'password' => $request->pass,
        ]);

        $valida = cuentas::with('chars')->where('login','=',$request->cuenta)->where('serial','=',$request->token)->get();

        if(!$valida->count() == 0)
        {
            $chars = personajes::where('account_name','=',$request->cuenta)->get();
            $cuenta = $request->cuenta;
            $token = $request->token;
            $items = items::with('armor')->with('weapon')->with('etc')->with('armorsets')->orderBy('loc', 'DESC')->get();

            return view('cuentas',compact(['chars','cuenta','token','items']))->with('Mensaje','Se cambio la contraseña!');
        }
        else
        {
            return view('cuentas')->with('Mensaje','No se encontró la cuenta, o el token es invalido');
        }
    }
    public function items($obj)
    {
       $char = items::where('owner_id','=',$obj)->get();
       return view('items',compact('char'));
    }
    public function obtenertoken(Request $request)
    {
        $user = cuentas::where('login','=',$request->acc)->first();
        $email = $user->email;
        $token = $user->serial;
        $cuenta = $user->login;

        Mail::to($email)->send(new mailing($token,$cuenta));

        return redirect()->back()->with('Mensaje','Se envio el TOKEN a tu Email, revisa la casilla de correo');
    }
    public function post(Request $request)
    {
        $foto = '';
        if ($request->hasFile('file')){
            $file = $request->file("file");
            $nombrearchivo  = $file->getClientOriginalName();
            $file->move("css/images/posts/",$nombrearchivo);
            $foto = $nombrearchivo;
        }

        news::create([
            'titulo'=>$request->titulo,
            'noticia'=>$request->cuerpo,
            'imagen'=>"css/images/posts/".$foto,
        ]);

        return redirect()->back();

    }
    public function newpost()
    {
        return view('post');
    }
    public function donacion()
    {
        return view('donaciones');
    }
    public function nuevacuenta()
    {
        return view('nuevacuenta');
    }
    public function crearcuenta(Request $request)
    {
        function Crypto($password){

        return base64_encode(pack("H*", sha1(utf8_encode($password))));

        }
        $passcrypted = Crypto($request->password);

        $serial = Str::random(8);

        $cc = cuentas::where('email','=',$request->email)->get();
        if($cc->count() < 12)
        {

            $ca = cuentas::where('login','=',$request->login)->first();

            if($ca)
            {
                return redirect()->route('main')->with('Mensaje','Esta cuenta ya existe!');
            }
            else
            {
                cuentas::create([
                    'login' => $request->login,
                    'email' => $request->email,
                    'password' => $passcrypted,
                    'serial' => $serial,
                ]);
                return redirect()->route('main')->with('Mensaje','Cuenta Creada!');

            }

        }
        else
        {
            return redirect()->route('main')->with('Mensaje','Llegaste al Maximo!');
        }

    }
}
