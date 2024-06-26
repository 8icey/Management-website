<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    use HasFactory;
    protected $guarded =[
        

        

    ];
    protected $primaryKey = 'ID_user';
    public function faire()
    {
        return $this->hasMany(Faire::class, 'IDuser', 'ID_user');
    }

    public function regler()
    {
        return $this->hasMany(Regler::class, 'IDuser', 'ID_user');
    }



    public function sentMessages(): HasMany
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function receivedMessages(): HasMany
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }
    



}


