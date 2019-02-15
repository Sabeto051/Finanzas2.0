<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
 protected $fillable=[
     	'user_id',
     	'tipo',
     	'valor',
     ];
      public function User()
    {
        return $this->belongsTo(User::class);
    }
}
