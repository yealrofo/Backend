<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class interesado extends Model
{
    use HasFactory;
    protected $table = "interesados";
    protected $primarykey = "id";
    protected $fillable = ["name","empresa","cargo","vacante","correo","telefono"];
    
}