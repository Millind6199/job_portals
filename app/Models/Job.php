<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs';
    protected $fillable = [
      'comp_name',
      'post',
      'place',
        'mobile_no',
        'req_skills',
        'req_experience',
        'req_qualification',
        'salary',
        'city_id',
    ];
    public function cities(){
        return $this->HasOne(City::class, 'city_id', 'id');
    }
}
