<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'ocupation', 'area', 'created_at', 'updated_at'];
    public $name;
    public $ocupation;
    public $area;
    public $created_at;
    public $updated_at;
}
