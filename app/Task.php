<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Course;
use App\Topic;
class Task extends Model
{
    //

    //
	 use SoftDeletes, Notifiable, HasApiTokens;

    public $table = 'tasks';

 
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'due_date',
        'completion_date',
    ];

    protected $fillable = [
        'title',
        'type',
        'due_date',
        'completion_date',
        'is_complete',
        'instruction',
        'amout',
        
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
    public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }
}
