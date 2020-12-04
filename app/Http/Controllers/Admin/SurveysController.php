<?php


namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\UpdateSurveysRequest;
use App\Http\Requests\Admin\StoreSurveysRequest;
use App\Section;
use App\Survey;
use Illuminate\Support\Facades\Gate;

class SurveysController {
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

        return view('admin.surveys.index', compact('surveys'));
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

        $sections = Section::all();

        return view('admin.surveys.create', compact('sections'));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreSurveysRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSurveysRequest $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $surveys = Survey::create($request->all());

        return redirect()->route('admin.surveys.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param Survey $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Survey $survey)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        return view('admin.surveys.edit', compact('survey'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateSurveysRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSurveysRequest $request, Survey $survey)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $survey->update($request->all());

        return redirect()->route('admin.surveys.index');
    }

    public function show(Survey $survey)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        return view('admin.surveys.show', compact('survey'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $survey->delete();

        return redirect()->route('admin.surveys.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        Survey::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
