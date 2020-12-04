<?php
Route::redirect('/', 'admin/home');

Auth::routes(['register' => false]);

// Change Password Routes...
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::delete('permissions_mass_destroy', 'Admin\PermissionsController@massDestroy')->name('permissions.mass_destroy');
    Route::resource('roles', 'Admin\RolesController');
    Route::delete('roles_mass_destroy', 'Admin\RolesController@massDestroy')->name('roles.mass_destroy');
    Route::resource('users', 'Admin\UsersController');
    Route::delete('users_mass_destroy', 'Admin\UsersController@massDestroy')->name('users.mass_destroy');
    Route::resource('categories', 'Admin\CategoriesController');
    Route::delete('categories_mass_destroy', 'Admin\CategoriesController@massDestroy')->name('categories.mass_destroy');
    Route::resource('sections', 'Admin\SectionsController');
    Route::delete('sections_mass_destroy', 'Admin\SectionsController@massDestroy')->name('sections.mass_destroy');
    Route::resource('surveys', 'Admin\SurveysController');
    Route::delete('surveys_mass_destroy', 'Admin\SurveysController@massDestroy')->name('surveys.mass_destroy');
    Route::resource('mysurveys', 'Admin\MySurveysController');
    Route::delete('mysurveys_mass_destroy', 'Admin\MySurveysController@massDestroy')->name('mysurveys.mass_destroy');
    Route::resource('companies', 'Admin\CompaniesController');
    Route::delete('companies_mass_destroy', 'Admin\CompaniesController@massDestroy')->name('companies.mass_destroy');
    Route::resource('questionnaires', 'Admin\QuestionnairesController');
    Route::delete('questionnaires_mass_destroy', 'Admin\QuestionnairesController@massDestroy')->name('questionnaires.mass_destroy');
    Route::resource('members', 'Admin\MembersController');
    Route::delete('members_mass_destroy', 'Admin\MembersController@massDestroy')->name('members.mass_destroy');
    Route::resource('assessments', 'Admin\AssessmentsController');
    Route::delete('assessments_mass_destroy', 'Admin\AssessmentsController@massDestroy')->name('assessments.mass_destroy');
    Route::resource('principals', 'Admin\PrincipalsController');
    Route::delete('principals_mass_destroy', 'Admin\PrincipalsController@massDestroy')->name('principals.mass_destroy');
    Route::resource('audits', 'Admin\AuditsController');
    Route::delete('audits_mass_destroy', 'Admin\AuditsController@massDestroy')->name('audits.mass_destroy');
});
