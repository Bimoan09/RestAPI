<?php

namespace App\Transforsmers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract{
  public function transform(User $user){
    return [
        'id'          => $user->id,
<<<<<<< HEAD
        'name'        => $user->name,
        'email'       => $user->email,
        'department' => $user->Departement,
=======
        'name'        => $user->nama,
        'email'       => $user->email,
>>>>>>> f94ca10abcb4f924c27ef2270467ff9eca9c9069
        'alamat'      => $user->alamat,

    ];
  }
}
