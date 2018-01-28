<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Transforsmers\UserTransformer;
class UserController extends Controller
{
    public function users(User $user){

      $users = $user->all();
      return fractal()
            ->collection($users)
            ->transformWith(new UserTransformer)
            ->toArray();
    }
    public function profileById(User $user, $id){

      $users = $user->find($id);
      return fractal()
            ->item($users)
            ->transformWith(new UserTransformer)
            ->toArray();
    }

}
