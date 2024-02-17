<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotpasswordMail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        // $password = "admin";
        //$dd = Hash::make($password);
        //dd($dd);
        return view('backend.auth.login');
    }

    public function forgot(Request $request)
    {
        return view('backend.auth.forgot');
    }
    public function forgot_admin(Request $request)
{
    $rendome_password = rand(111111111, 999999999);
    
    // Vérifier si l'utilisateur existe avec l'adresse e-mail donnée
    $user = User::where('email', '=', $request->email)->first();

    // Utiliser une condition ternaire pour vérifier si $user est défini
    $userExists = $user ? true : false;

    // Si l'utilisateur existe, générer un nouveau mot de passe et l'envoyer à l'utilisateur
    if ($userExists) {
        // Générer et sauvegarder le nouveau mot de passe
        $user->password = Hash::make($rendome_password);
        $user->save();

        // Retourner le nouveau mot de passe à l'utilisateur
        return response()->json(['success' => true, 'message' => 'Votre nouveau mot de passe a été généré : ' . $rendome_password], 200);
    } else {
        return response()->json(['success' => false, 'message' => 'L\'adresse email n\'est pas valide'], 404);
    }
}

    
    



    public function login_admin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            if (Auth::user()->status) {
                if (Auth::user()->is_role == 1) {
                    return redirect()->intended('admin/dashboard'); // Rediriger vers le tableau de bord si la connexion réussit
                } else {
                    return redirect('login')->with('error', 'Vous n\'est pas un administrateur');
                }
            } else {
                $user_id =  Auth::user()->id;
                Auth::logout();
                $user_id = User::find($user_id);

                return redirect('login')->with('error', 'Votre email n\'est pas vérifié'); // Rediriger vers la page de connexion avec un message d'erreur
            }
        }
        return redirect('login')->with('error', 'Identifiants incorrects'); // Rediriger vers la page de connexion avec un message d'erreur si la tentative de connexion échoue
    }

    public function logout()
    {

        Auth::logout();
        return redirect('login');
    }
}
