<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded =[
        

        

    ];
    protected $primaryKey = 'ID_client';

    public function demande()
    {
        return $this->hasMany(Demande::class);
    }

    public function derangement()
    {
        return $this->hasMany(Derangement::class);
    }
   

}
