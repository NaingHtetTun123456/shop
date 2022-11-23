<?php

namespace App\Models;

use App\Models\brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table= 'categories';
    protected $fillable = ['title'];    


    
}
