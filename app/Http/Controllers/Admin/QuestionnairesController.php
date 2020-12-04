<?php

namespace App\Http\Controllers\Admin;

use App\Audit;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreQuestionnairesRequest;
use App\Principal;
use Illuminate\Http\Request;
use App\Questionnaire;
use App\Survey;
use App\Section;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Collection;

class QuestionnairesController extends Controller
{
    /**
     * Display a listing of Category.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $surveys = Survey::all();

        return view('admin.questionnaires.index', compact('surveys'));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $surveys = Survey::all();
        $sections = Section::all();
        //$principals = Principal::all();
        $principals = Principal::with('surveys')->orderBy('id', 'asc')->limit(75)->get();

        return view('admin.questionnaires.create', compact(
            'surveys', 'sections', 'principals'));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionnairesRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionnairesRequest $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $sections = Section::all();
        $principals = Principal::all();

        $surveys = Survey::all();

        if(!empty($surveys)){
            foreach($surveys as $survey){
                if($survey->id == 1 || $survey->id == 2 || $survey->id == 3 ||
                   $survey->id == 4 || $survey->id == 5 || $survey->id == 6 ||
                   $survey->id == 7 || $survey->id == 8 || $survey->id == 9 ||
                   $survey->id == 10 || $survey->id == 11 || $survey->id == 12 ||
                   $survey->id == 13 || $survey->id == 14 || $survey->id == 15 ||
                   $survey->id == 16 || $survey->id == 17 || $survey->id == 18 ||
                   $survey->id == 19 || $survey->id == 20 || $survey->id == 21 ||
                   $survey->id == 22 || $survey->id == 23 || $survey->id == 24 ||
                   $survey->id == 25 || $survey->id == 26 || $survey->id == 27 ||
                   $survey->id == 28 || $survey->id == 29 || $survey->id == 30 ||
                   $survey->id == 31 || $survey->id == 32 || $survey->id == 33 ||
                   $survey->id == 34 || $survey->id == 35 || $survey->id == 36 ||
                   $survey->id == 37 || $survey->id == 38 || $survey->id == 39 ||
                   $survey->id == 40 || $survey->id == 41 || $survey->id == 42 ||
                   $survey->id == 43 || $survey->id == 44 || $survey->id == 45 ||
                   $survey->id == 46 || $survey->id == 47 || $survey->id == 48
                ){
                    $questionnaire = $request->all();
                    $questionnaire['user_id'] = Auth::user()->id;
                    $questionnaire['survey_id'] = $survey->id;
                    Questionnaire::create($questionnaire);
                    $audits = $request->all();
                    Audit::create($audits);

                    foreach($audits as $val){
                        if($val->id >= 1 ){
                            //get all  data
                            $audit_data = $request->all();
                            $val = Audit::find(1);
                            $val * 2;
                            //update date
                            Audit::find($val)->update($audit_data);
                        }
                    }

                }

            }
        }

        return redirect()->route('admin.mysurveys.index');
    }

}
