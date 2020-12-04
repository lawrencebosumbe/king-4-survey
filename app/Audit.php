<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $fillable = ['user_id', 'questionnaire_id', 'survey_id', 'score'];

    public $timestamps = false;

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function questionnaire() {
        return $this->belongsTo('App\Questionnaire');
    }

    public function survey() {
        return $this->belongsTo('App\Survey');
    }

}
