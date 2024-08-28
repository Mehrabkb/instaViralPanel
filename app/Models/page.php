<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    use HasFactory;
    protected $table = 'pages';
    protected $primaryKey = 'page_id';
    public $timestamps = false;
    protected $fillable = ['page_instagram_id' , 'page_title' , 'image' , 'follower'];
}
