<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Course;
use App\Topic;
use App\TaskTag;
use App\TaskFile;

class Task extends Model
{
    //

    //
	 use SoftDeletes, Notifiable, HasApiTokens;

     public $table = 'tasks';

    protected $casts = [
        'is_completed' => 'boolean',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $guarded  = [];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
   public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }
    public function files()
    {
        return $this->belongsToMany(TaskFile::class);
    }
     public function tags()
    {
        return $this->belongsToMany(TaskTag::class);
    }
}
