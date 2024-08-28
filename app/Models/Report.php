<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table = 'reports';
    protected $primaryKey = 'report_id';

    public $timestamps = false;

    protected $fillable = ['report_id', 'report_name' , 'report_description' , 'customer_id'];
}
