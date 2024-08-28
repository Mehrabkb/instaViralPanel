<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportItem extends Model
{
    use HasFactory;
    protected $table = 'report_items';
    protected $primaryKey = 'report_item_id';
    public $timestamps = false;
    protected $fillable = ['report_id' , 'social_name' , 'social_link' , 'social_image' , 'social_follower_count' , 'social_date_registered' , 'social_story_viewed'];
}
