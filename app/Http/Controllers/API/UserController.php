<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $club = request()->club;
        print($club);
        // if($club){
            // $users = User::where("club",$club)->get();
        // }
        // else{

            $users = User::latest()->all();
        // }

    // On retourne les informations des utilisateurs en JSON
    return response()->json($users);
    }
    public function userByClub($club)
    {
        // $club = request()->club;

        // if($club){
            // $users = User::where("club",$club)->get();
        // }
        // else{

            $users = User::where("club",$club)->get();
        // }

    // On retourne les informations des utilisateurs en JSON
    return response()->json($users);
    }

    public function login()
    {
        if (\Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = \Auth::user();
            $success['token'] = $user->createToken('appToken')->accessToken;
           //After successfull authentication, notice how I return json parameters
            return response()->json([
              'success' => true,
              'token' => $success,
              'user' => $user
          ]);
        } else {
       //if authentication is unsuccessfull, notice how I return json parameters
       $ex = User::where("email",request('email'))->first();
       if($ex){
        return response()->json([
            'success' => false,
            'message' => 'mauvais mot de passe',
        ], 401);

       }
       else{

           return response()->json([
             'success' => false,
             'message' => 'un membre avec ce mail n\'existe pas',
         ], 401);
       }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // La validation de données
    // $this->validate($request, [
    //     'name' => 'required|max:100',
    //     'email' => 'required|email|unique:users',
    //     'password' => 'required|min:8'
    // ]);
// dd($request->input());
    // On crée un nouvel utilisateur
    $validator = Validator::make($request->all(), [
        'email' => 'required',
        // 'phone' => 'required|unique:users|regex:/(0)[0-9]{10}/',
        // 'email' => 'required|email|unique:users',
        'password' => 'required',
    ]);
    if ($validator->fails()) {
      return response()->json([
        'success' => false,
        'message' => $validator->errors(),
      ], 401);
    }
    // $input = $request->all();
    // $input['password'] = bcrypt($input['password']);
    $ex = User::where("email",request('email'))->first();
       if($ex){
        return response()->json([
            'success' => false,
            'message' => 'un membre existe deja avec ce mail',
        ], 401);

       }
       else{
    $user = User::create([
        'name' => $request->name,
        // 'prenom' => $request->prenom,
        'pcc' => "50",
        'niveau' => $request->niveau,
        'club' => $request->club,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        // 'profileImage' => "images/avatar.png",
    ]);
    $success['token'] = $user->createToken('appToken')->accessToken;
    return response()->json([
      'success' => true,
      'token' => $success,
      'user' => $user
  ]);
       }


    // On retourne les informations du nouvel utilisateur en JSON
    // return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // dd($user);
        return response()->json($user);
    }
    public function showByMail()
    {
        $user = [];
        $email = Request('mail');
        if(substr($email, -1)=="\"") $email = substr($email, 1,-1);
        // dd($email);
        $ex = User::get()->where("email",$email)->first();
        if($ex) $user = $ex;
        return response()->json($user);
    }

    public function setAvatar(Request $request)
    {
        $user =[];
        $ex = User::where('id',$request->user_id)->first();
        if($ex) {
            $ex->update([
                "profileImage"=>$request->avatar,
            ]);
            $user=$ex;
        }
        return response()->json($user);

    }
    public function setPcc(Request $request)
    {
        $user =[];
        $ex = User::where('id',$request->user_id)->first();
        if($ex) {
            $pcc=intval($ex->pcc)+intval($request->pcc);
            $ex->update([
                "pcc"=>$pcc,
            ]);
            $user=$ex;
        }
        return response()->json($user);

    }
    // public function getPcc(Request $request)
    // {
    //     $user =[];
    //     $ex = User::where('id',$request->user_id)->first();
    //     if($ex) {
    //         $pcc=intval($ex->pcc)+intval($request->pcc);
    //         $ex->update([
    //             "pcc"=>$pcc,
    //         ]);
    //         $user=$ex;
    //     }
    //     return response()->json($user);

    // }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
      // La validation de données


    // On modifie les informations de l'utilisateur
    $user->update([
        'name' => $request->name,
        // 'prenom' => $request->prenom,
        'pcc' => $request->pcc,
        'niveau' => $request->niveau,
        'email' => $request->email,
        'club' => $request->club,
        'password' => bcrypt($request->password)
    ]);

    // On retourne la réponse JSON
    return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
      // On supprime l'utilisateur
    $user->delete();

    // On retourne la réponse JSON
    return response()->json();
    }

    public function logout(Request $res)
    {
      if (\Auth::user()) {
        $user = \Auth::user()->token();
        $user->revoke();

        return response()->json([
          'success' => true,
          'message' => 'Logout successfully'
      ]);
      }else {
        return response()->json([
          'success' => false,
          'message' => 'Unable to Logout'
        ]);
      }
     }
}
