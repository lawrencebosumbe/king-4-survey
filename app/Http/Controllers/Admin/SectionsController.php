<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Section;
use App\Http\Requests\Admin\StoreSectionsRequest;
use App\Http\Requests\Admin\UpdateSectionsRequest;
use App\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class SectionsController {
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

        $sections = Section::all();

        return view('admin.sections.index', compact('sections'));
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

        $categories = Category::all();

        return view('admin.sections.create', compact('categories'));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreSectionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSectionsRequest $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $sections = Section::create($request->all());

        return redirect()->route('admin.sections.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param Survey $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        return view('admin.sections.edit', compact('section'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateSectionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSectionsRequest $request, Section $section)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $section->update($request->all());

        return redirect()->route('admin.sections.index');
    }

    public function show(Section $section)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        return view('admin.sections.show', compact('section'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $section->delete();

        return redirect()->route('admin.sections.index');
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
        Section::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
