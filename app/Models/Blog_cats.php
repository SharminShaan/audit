<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_cats extends Model
{
    use HasFactory;
    protected $fillable = ['blog_cat_name'];
}
