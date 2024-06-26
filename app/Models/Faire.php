<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faire extends Model
{
    use HasFactory;

    protected $fillable = ['ID_user', 'ID_demande'];

    public function user()
    {
        return $this->belongsTo(User::class, 'ID_user');
    }
    

    public function demande()
    {
        return $this->belongsTo(Demande::class, 'ID_demande');
    }



}
