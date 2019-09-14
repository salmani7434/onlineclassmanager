<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Course;
class Topic extends Model
{
    //
	 use SoftDeletes, Notifiable, HasApiTokens;

    public $table = 'topics';

 
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        
    ];

     public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
