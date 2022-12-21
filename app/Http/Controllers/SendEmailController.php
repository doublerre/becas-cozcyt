<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;
use App\Models\user;
use Illuminate\Support\Facades\DB;

class SendEmailController extends Controller
{
    public function GetUsers(){
        //consulta
        $users = DB::table('users')->get();

        foreach($users as $user){
            echo $user->name;
        }
    }
    public function MesseagBase(){

        $deudores = DB::table('solicitudes')->where('adeudo')->value('1');

        //traer directamente al usuario
        $user = User::first()->name;
        $usermail = User::first()->email;
        Mail::to($usermail)->send(new NotifyMail($user));
    }

    public function MessageTodos(){
    $destinatarios = [];
    foreach(['cruzlopez999@gmail.com','jrodriguez@utzac.edu.mx'] as $destinatarios){
        Mail::to($destinatarios)->send(new NotifyMail($destinatarios));
    }
    }
    //

    public function EnviarCorreo(){
        // return view('welcome');
        $destinatario = "cruzlopez999@gmail.com";
        $nombre = "Cruz Isaias Lopez";
        Mail::to($destinatario)->send(new NotifyMail($nombre));
    }
}
