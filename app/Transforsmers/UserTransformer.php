<?php

namespace App\Transforsmers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract{
  public function transform(User $user){
    return [
        'id'          => $user->id,
        'name'        => $user->nama,
        'email'       => $user->email,
        'alamat'      => $user->alamat,

    ];
  }
}
