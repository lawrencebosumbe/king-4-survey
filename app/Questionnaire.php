<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
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
        'principal_checklist47', 'principal_checklist48', 'principal_checklist49',
        'principal_checklist50', 'principal_checklist51', 'principal_checklist52',
        'principal_checklist53', 'principal_checklist54', 'principal_checklist55',
        'principal_checklist56', 'principal_checklist57', 'principal_checklist58',
        'principal_checklist59', 'principal_checklist60', 'principal_checklist61',
        'principal_checklist61', 'principal_checklist62', 'principal_checklist63',
        'principal_checklist64', 'principal_checklist65', 'principal_checklist66',
        'principal_checklist67', 'principal_checklist68', 'principal_checklist69',
        'principal_checklist70', 'principal_checklist71', 'principal_checklist72',
        'principal_checklist73', 'principal_checklist74', 'principal_checklist75',
        'principal_checklist76', 'principal_checklist77', 'principal_checklist78',
        'principal_checklist79', 'principal_checklist80', 'principal_checklist81',
        'principal_checklist82', 'principal_checklist83', 'principal_checklist84',
        'principal_checklist85', 'principal_checklist86', 'principal_checklist87',
        'principal_checklist88', 'principal_checklist89', 'principal_checklist90',
        'principal_checklist91', 'principal_checklist92', 'principal_checklist93',
        'principal_checklist94', 'principal_checklist95', 'principal_checklist96',
        'principal_checklist97', 'principal_checklist98', 'principal_checklist99',
        'principal_checklist100', 'principal_checklist101', 'principal_checklist102',
        'principal_checklist103', 'principal_checklist104', 'principal_checklist105',
        'principal_checklist106', 'principal_checklist107', 'principal_checklist108',
        'principal_checklist109', 'principal_checklist110', 'principal_checklist111',
        'principal_checklist112', 'principal_checklist113', 'principal_checklist114',
        'principal_checklist115', 'principal_checklist116', 'principal_checklist117',
        'principal_checklist118', 'principal_checklist119', 'principal_checklist120',
        'principal_checklist121', 'principal_checklist122', 'principal_checklist123',
        'principal_checklist124', 'principal_checklist125', 'principal_checklist126',
        'principal_checklist127'
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
}
