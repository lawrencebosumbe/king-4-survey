@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.survey.principal_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.surveys.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('principal') ? 'has-error' : '' }}">
                <select name="section_id" id="section_id" class="form-control select2" required>
                    @if(!empty($sections))
                        <option selected="selected">Select Survey Section</option>
                        @foreach($sections as $section)
                            <option value="{{$section->id}}">
                                {{ $section->name }}
                            </option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div>
                <label for="name">{{ trans('cruds.survey.fields.principal') }}*</label>
                <input type="text" id="principal" name="principal" class="form-control" value="{{ old('principal', isset($survey) ? $survey->princial : '') }}" required>
            </div>
            <div>
                <label for="question_description">{{ trans('cruds.survey.fields.questionnaire') }}*</label>
                <textarea id="question_description" name="question_description" class="form-control" value="{{ old('question_description', isset($survey) ? $survey->question_description : '') }}" required></textarea>
                @if($errors->has('principal'))
                    <em class="invalid-feedback">
                        {{ $errors->first('principal') }}
                    </em>
                @endif
                @if($errors->has('question_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('question_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.survey.fields.principal_helper') }}
                </p>
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
