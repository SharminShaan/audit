<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'subcats_id','type','name','designation','experience','short_description','long_description','email','phone','file_upload','youtube','title','subtitle','job_title','vacancy','age','education','responsibilities','compensation','employment_status','location','logo','image','image2','image3','image4','image5','image6','date','time','venue','link', 'specialization', 'short_text'];
}
