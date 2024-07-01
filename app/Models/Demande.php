<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $guarded =[
        

        

    ];
    protected $primaryKey = 'ID_demande';

    public function faire()
    {
        return $this->hasMany(Faire::class, 'ID_demande', 'IDdemande');
    }
    

    
    
    
    
    
    public function client()
    {
        return $this->belongsTo(Client::class, 'IDclient', 'ID_Client');
    }

}
