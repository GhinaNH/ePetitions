<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;
    protected $fillable = ['title' , 'description' , 'category' , 'author' , 'signees'];
    protected $guarded ; //for large data , and we want to exclude some of field 
}
