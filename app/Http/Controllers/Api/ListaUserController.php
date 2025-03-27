<?php

namespace App\Http\Controllers\Api;
use App\Models\User; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;
use Exception;



class ListaUserController extends Controller
{
    public function index() : JsonResponse
    {
        $users = User::orderBy('id', 'DESC')-> paginate(2);
        return response()->json([
            'status'=> true,
            'users' => $users,
        ], 200);
    }

    public function show (User $user) : JsonResponse
    {
        return response()->json([
            'status'=> true,
            'users' => $user,
        ], 200);

    }

    public function store (UserRequest $request) : JsonResponse
    {
        DB::beginTransaction();

        try{

            $user = User::create([

                'name'=> $request-> name,
                'email'=> $request-> email,
                'password'=> $request-> password,

              
            ]);  //41:43
            
            DB::commit();
            
            return response()->json([
                'status'=> true,
                'user' => $user,
                'message' => "Usuário editado",
            ], 200);

        }catch(Exception $e){
          
            DB::rollBack();

            return response()->json([
                'status'=> false,
                'message' => "Usuário não editado",
            ], 400);
            
        }

    }

    public function update(UserRequest $request, User $user) : JsonResponse
    {

        DB::beginTransaction();

        try{

            $user->update([
 

            ]);

        }catch (Exception $e){
            DB::rollBack();

            return response()->json([
                'status'=> false,
                'message' => "Usuário não editado",
            ], 400);

        }

    }

    public function destroy( User $user) : JsonResponse
    {

        DB::beginTransaction();

        try{

            $user->delete();
            return response()->json([
                'user'=> $user,
                'message' => "Usuário apagado",
            ], 400);



        }catch (Exception $e){
            DB::rollBack();

            return response()->json([
                'status'=> false,
                'message' => "Usuário não apagado",
            ], 400);

        }

    }

}
