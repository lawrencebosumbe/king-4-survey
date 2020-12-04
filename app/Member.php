<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'user_id', 'survey_id', 'principal_checklist1', 'principal_checklist2',
        'principal_checklist3', 'principal_checklist4', 'principal_checklist5',
        'principal_checklist6', 'principal_checklist7', 'principal_checklist8',
        'principal_checklist9', 'principal_checklist10', 'principal_checklist11',
        'principal_checklist12', 'principal_checklist13', 'principal_checklist14',
        'principal_checklist15', 'principal_checklist16', 'principal_checklist17',
        'principal_checklist18', 'principal_checklist19', 'principal_checklist20',
        'principal_checklist21', 'principal_checklist22', 'principal_checklist23',
        'principal_checklist24', 'principal_checklist25', 'principal_checklist26',
        'principal_checklist27', 'principal_checklist28', 'principal_checklist29',
        'principal_checklist30', 'principal_checklist31', 'principal_checklist32',
        'principal_checklist33', 'principal_checklist34', 'principal_checklist35',
        'principal_checklist36', 'principal_checklist37', 'principal_checklist38',
        'principal_checklist38', 'principal_checklist39', 'principal_checklist40',
        'principal_checklist41', 'principal_checklist42', 'principal_checklist43',
        'principal_checklist44', 'principal_checklist45', 'principal_checklist46',
        'principal_checklist47', 'principal_checklist48'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function survey()
    {
        return $this->belongsTo('App\Survey');
    }

    public function principal()
    {
        return $this->belongsTo('App\Principal');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function audits()
    {
        return $this->hasMany('App\Audit');
    }
}
