@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.survey.principal_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.surveys.update", [$survey->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('principal') ? 'has-error' : '' }}">
                <label for="principal">{{ trans('cruds.survey.fields.principal') }}</label>
                <input type="text" id="principal" name="principal" class="form-control" value="{{ old('principal', isset($survey) ? $survey->principal : '') }}">
                @if($errors->has('principal'))
                    <em class="invalid-feedback">
                        {{ $errors->first('principal') }}
                    </em>
                    <p class="helper-block">
                        {{ trans('cruds.survey.fields.principal_helper') }}
                    </p>
                @endif
            </div>
            <div>
                <label for="question_description">{{ trans('cruds.survey.fields.questionnaire') }}</label>
                <textarea id="question_description" name="question_description" class="form-control">{{ old('question_description', isset($survey) ? $survey->question_description : '') }}</textarea>
                @if($errors->has('question_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('question_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.survey.fields.questionnaire_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection
