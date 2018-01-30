<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Transforsmers\UserTransformer;
class UserController extends Controller
{
    public function users(User $pegawai){

      $pegawai = $pegawai->all();
    return response()->json($pegawai, 201);
    }
    public function profileById(User $pegawai, $id){

      $pegawai = $pegawai->find($id);
      return response()->json($pegawai, 201);


        }

        public function store(Request $request){
          $pegawai = User::create($request->all());
          return response()->json($pegawai, 201);
        }

        public function update(Request $request, $id){
          $pegawai = User::find($id);
          $pegawai->update($request->all());

        }

        public function delete($id){
        User::destroy($id);
        return response()->json();
      }
}
