<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSurvey extends Model
{
    protected $fillable = ['survey_id', 'checklist'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function survey()
    {
        return $this->belongsTo('App\Survey');
    }
}
