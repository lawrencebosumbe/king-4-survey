<?php


namespace App\Http\Controllers\Admin;

use App\Company;
use App\Http\Requests\Admin\StoreCompaniesRequest;
use App\Http\Requests\Admin\UpdateCompaniesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CompaniesController
{
    /**
     * Display a listing of Company.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $companies = Company::all();

        return view('admin.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating new Company.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        return view('admin.companies.create');
    }

    /**
     * Store a newly created Company in storage.
     *
     * @param  \App\Http\Requests\StoreCompaniesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompaniesRequest $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $company = Company::create($request->all());

        return redirect()->route('admin.companies.index');
    }


    /**
     * Show the form for editing Company.
     *
     * @param Company $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update Company in storage.
     *
     * @param  \App\Http\Requests\UpdateCompaniesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompaniesRequest $request, Company $company)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $company->update($request->all());

        return redirect()->route('admin.companies.index');
    }

    public function show(Company $company)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        return view('admin.companies.show', compact('company'));
    }

    /**
     * Remove Company from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $company->delete();

        return redirect()->route('admin.companies.index');
    }

    /**
     * Delete all selected Company at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        Company::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
