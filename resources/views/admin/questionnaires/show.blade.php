@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.survey.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.survey.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.survey.fields.principal') }}
                        </th>
                        <th>
                            {{ trans('cruds.survey.fields.questionnaire') }}
                        </th>
                    </tr>
                    <tr>
                        <td>
                            {{ $survey->id }}
                        </td>
                        <td>
                            {{ $survey->principal }}
                        </td>
                        <td>
                            {{ $survey->question_description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection
