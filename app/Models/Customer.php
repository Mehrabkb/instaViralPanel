<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $table = 'customers';
    public $primaryKey = 'customer_id';
    public $timestamps = false;

    protected $fillable = ['customer_name', 'customer_brand', 'customer_instagram_page']; // فیلدهایی که قابل درج در دیتابیس هستند
}
