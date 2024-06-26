<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Derangement extends Model
{
    use HasFactory;

    protected $guarded =[
        
      
        

    ];
    protected $primaryKey = 'ID_Derangement';
    // protected $fillable = ['Status_Derangement']; 
    
    public function regler()
    {
        return $this->hasMany(Regler::class, 'ID_Derangement', 'IDderangement');
    }

    public function client()
    {
        return $this->belongsTo(Client::class , 'IDclient','ID_client');
    }

}
