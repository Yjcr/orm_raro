<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    
    protected $table = "companies";
    // protected $primarykey = "id";

    protected $fillable =[
        'name'
    ];

    public function companies(){
        return $this->hasMany(Project::class);
    }
}
