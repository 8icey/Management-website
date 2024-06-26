<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entreprises extends Model
{
    use HasFactory;

    protected $guarded =[
        

        

    ];
    protected $primaryKey = 'ID_entreprise';

    public function sites()
    {
        return $this->hasMany(\App\Models\sites::class, 'ID_entreprise', 'ID_entreprise');
    }
    



}
