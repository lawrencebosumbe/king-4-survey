<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssessmentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'principal_checklist1' => 'required',
            'principal_checklist2' => 'required',
            'principal_checklist3' => 'required',
            'principal_checklist4' => 'required',
            'principal_checklist5' => 'required',
            'principal_checklist6' => 'required',
            'principal_checklist7' => 'required',
            'principal_checklist8' => 'required',
            'principal_checklist9' => 'required',
            'principal_checklist10' => 'required',
            'principal_checklist11' => 'required',
            'principal_checklist12' => 'required',
            'principal_checklist13' => 'required',
            'principal_checklist14' => 'required',
            'principal_checklist15' => 'required',
            'principal_checklist16' => 'required',
            'principal_checklist17' => 'required',
            'principal_checklist18' => 'required',
            'principal_checklist19' => 'required',
            'principal_checklist20' => 'required',
            'principal_checklist21' => 'required',
            'principal_checklist22' => 'required',
            'principal_checklist23' => 'required',
            'principal_checklist24' => 'required',
            'principal_checklist25' => 'required',
            'principal_checklist26' => 'required',
            'principal_checklist27' => 'required',
            'principal_checklist28' => 'required',
            'principal_checklist29' => 'required',
            'principal_checklist30' => 'required',
            'principal_checklist31' => 'required',
            'principal_checklist32' => 'required',
            'principal_checklist33' => 'required',
            'principal_checklist34' => 'required',
            'principal_checklist35' => 'required',
            'principal_checklist36' => 'required',
            'principal_checklist37' => 'required',
            'principal_checklist38' => 'required',
            'principal_checklist39' => 'required',
            'principal_checklist40' => 'required',
            'principal_checklist41' => 'required',
            'principal_checklist42' => 'required',
            'principal_checklist43' => 'required',
            'principal_checklist44' => 'required',
            'principal_checklist45' => 'required',
            'principal_checklist46' => 'required',
            'principal_checklist47' => 'required',
            'principal_checklist48' => 'required'
        ];
    }
}
