<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
class Course extends Model
{
    //
    use SoftDeletes, Notifiable, HasApiTokens;

    public $table = 'courses';

    protected $casts = [
        'is_important' => 'boolean',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'professor_id',
        'login_id',
        'proxy_id',
        'name',
        'topic',
        'slug',
        'subject',
        'is_important',
        'course_objectives',
        'created_at',
        'updated_at',
        'deleted_at',
        'start_date',
        'completion_date',
        'setup',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }
}
