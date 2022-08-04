<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image', 'interesting', 'user_id'];
    public $title;
    public $description;
    public $image;
    public $interesting;
    public $user_id;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
