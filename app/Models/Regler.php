<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regler extends Model
{
    use HasFactory;

    protected $fillable = ['ID_user', 'ID_derangement'];

    public function user()
    {
        return $this->belongsTo(User::class, 'ID_user');
    }
    

    public function derangement()
    {
        return $this->belongsTo(Derangement::class, 'ID_derangement');
    }
    



}
