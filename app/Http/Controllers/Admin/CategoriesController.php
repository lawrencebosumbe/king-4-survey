<?php


namespace App\Http\Controllers\Admin;


use App\Category;
use App\Http\Requests\Admin\UpdateCategoriesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Admin\StoreCategoriesRequest;

class CategoriesController
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

        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
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

        return view('admin.categories.create', compact('roles'));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreCategoriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriesRequest $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $category = Category::create($request->all());

        return redirect()->route('admin.categories.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param Category $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoriesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriesRequest $request, Category $category)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $category->update($request->all());

        return redirect()->route('admin.categories.index');
    }

    public function show(Category $category)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        return view('admin.categories.show', compact('category'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $category->delete();

        return redirect()->route('admin.categories.index');
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
        Category::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
