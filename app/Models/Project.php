<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "project";
    // protected $primarykey = "id";

    public $fillable = [
        'name',
        'execution_date',
        'is_active',
    ];

    public function city(){
        return $this->belongsTo(City::class);
    } 
    public function company(){
        return $this->belongsTo(Company::class);
    } 
    public function user(){
        return $this->belongsTo(User::class);
    } 
}
