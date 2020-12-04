<?php


namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\UpdateMySurveysRequest;
use App\Http\Requests\Admin\StoreMySurveysRequest;
use App\MySurvey;
use App\Survey;
use App\Category;
use App\Section;
use Illuminate\Support\Facades\Gate;

class MySurveysController {
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

        $categories = Category::all();

        return view('admin.mysurveys.index', compact('surveys', 'categories'));
    }

}
