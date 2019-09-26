<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Course;
use App\Task;
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
        'title',
        
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
     public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
