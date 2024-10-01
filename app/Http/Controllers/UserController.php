<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $this->validate($request,[
            "nom"=>"required",
            "prenom"=>"required",
            "email"=>["required","unique:users,email"],
            "phone"=>"required",
            "password"=>["required","string","min:8","max:30","confirmed"],
            "role_id"=>"required"
        ]);
        $user = User::create([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "password"=>bcrypt($request->password),
            "role_id"=>$request->role_id,
            "bio"=>$request->bio,
            "photo"=>$request->photo,
        ]);
        return response()->json([
            "user"=>$user
        ]);
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email'=>['required','email'],
            'password'=>'required'
        ]);

        $user = User::where('email',$credentials['email'])->first();

        if (!$user || !Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => ['Les informations d\'identification fournies sont incorrectes.']
            ]);
        }

        // Vérification de la vérification de l'email
        if ($user->email_verified_at === null) {
            return response()->json([
                'message' => 'Votre email n\'est pas encore vérifié. Veuillez entrer l\'OTP pour vérifier votre email.',
                'user' => $user
            ], 401);
        }

        // Création du token
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Connexion réussie',
            'user' => $user,
            'token' => $token
        ]);

    }

    public function verifyOtp(Request $request){
        $request->validate([
            'email'=>"required|email",
            "otp"=>"required|numeric"
        ]);

        $user = User::where('email',$request->email)->where('otp',$request->otp)->first();

        if ($user) {
            $user->email_verified_at = now();
            $user->otp = null;
            $user->save();

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                "message"=>"OTP vérifié avec succès et connexion effectuée",
                "user"=>$user,
                "token"=>$token
            ]);
        }
    }

    public function user(Request $request){
        $user = User::find(Auth::id());

        return response()->json([
            "user" => $user
        ]);
    }

    public function logout(Request $request){
        $user = Auth::user();
        if ($user) {
            Auth::logout();
            $user->tokens->each(function($token){
                $token->delete();
            });
            return response()->json([
                "message"=>"Deconnexion"
            ],200);
        }
    }
}
