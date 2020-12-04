@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.questionnaire.principal_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.questionnaires.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('principal') ? 'has-error' : '' }}">
                @if(!empty($surveys))
                    <div class="row">
                        <div class="col-md-7"></div>
                        <div class="col-md-1"><label class="radio-header">1</label></div>
                        <div class="col-md-1"><label class="radio-header">2</label></div>
                        <div class="col-md-1"><label class="radio-header">3</label></div>
                        <div class="col-md-1"><label class="radio-header">4</label></div>
                        <div class="col-md-1"><label class="radio-header">5</label></div>
                    </div>
                    @foreach($surveys as $survey)
                        @if($survey->id === 1)
                            <div class="row survey-row">
                                <div class="col-md-7">
                                    <p>
                                        <strong>{{ $survey->principal }}</strong>
                                    </p>
                                    <p>
                                        {{ $survey->question_description }}
                                    </p>
                                </div>
                                <div class="col-md-1">
                                    <label class="radio-inline">
                                        <input type="radio" name="principal_checklist1" class="form-check-input" value="1">
                                        <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                        <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                    </label>
                                </div>
                                <div class="col-md-1">
                                    <label class="radio-inline">
                                        <input type="radio" name="principal_checklist1" class="form-check-input" value="2">
                                    </label>
                                </div>
                                <div class="col-md-1">
                                    <label class="radio-inline">
                                        <input type="radio" name="principal_checklist1" class="form-check-input" value="3">
                                    </label>
                                </div>
                                <div class="col-md-1">
                                    <label class="radio-inline">
                                        <input type="radio" name="principal_checklist1" class="form-check-input" value="4">
                                    </label>
                                </div>
                                <div class="col-md-1">
                                    <label class="radio-inline">
                                        <input type="radio" name="principal_checklist1" class="form-check-input" value="5">
                                    </label>
                                </div>
                            </div>
                        @endif
                        @if($survey->id === 2)
                             <div class="row survey-row">
                                 <div class="col-md-7">
                                     <p>
                                         <strong>{{ $survey->principal }}</strong>
                                     </p>
                                     <p>
                                         {{ $survey->question_description }}
                                     </p>
                                  </div>
                                  <div class="col-md-1">
                                      <label class="radio-inline">
                                          <input type="radio" name="principal_checklist2" class="form-check-input" value="1">
                                          <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                          <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                      </label>
                                  </div>
                                  <div class="col-md-1">
                                      <label class="radio-inline">
                                          <input type="radio" name="principal_checklist2" class="form-check-input" value="2">
                                      </label>
                                  </div>
                                  <div class="col-md-1">
                                      <label class="radio-inline">
                                                <input type="radio" name="principal_checklist2" class="form-check-input" value="3">
                                      </label>
                                  </div>
                                   <div class="col-md-1">
                                            <label class="radio-inline">
                                                <input type="radio" name="principal_checklist2" class="form-check-input" value="4">
                                            </label>
                                   </div>
                                   <div class="col-md-1">
                                       <label class="radio-inline">
                                                <input type="radio" name="principal_checklist2" class="form-check-input" value="5">
                                       </label>
                                    </div>
                             </div>
                        @endif
                        @if($survey->id === 3)
                            <div class="row survey-row">
                                 <div class="col-md-7">
                                     <p>
                                         <strong>{{ $survey->principal }}</strong>
                                     </p>
                                     <p>
                                         {{ $survey->question_description }}
                                     </p>
                                  </div>
                                  <div class="col-md-1">
                                      <label class="radio-inline">
                                          <input type="radio" name="principal_checklist3" class="form-check-input" value="1">
                                          <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                          <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                      </label>
                                  </div>
                                  <div class="col-md-1">
                                      <label class="radio-inline">
                                          <input type="radio" name="principal_checklist3" class="form-check-input" value="2">
                                      </label>
                                  </div>
                                   <div class="col-md-1">
                                       <label class="radio-inline">
                                           <input type="radio" name="principal_checklist3" class="form-check-input" value="3">
                                       </label>
                                   </div>
                                   <div class="col-md-1">
                                       <label class="radio-inline">
                                           <input type="radio" name="principal_checklist3" class="form-check-input" value="4">
                                       </label>
                                   </div>
                                   <div class="col-md-1">
                                       <label class="radio-inline">
                                           <input type="radio" name="principal_checklist3" class="form-check-input" value="5">
                                       </label>
                                   </div>
                            </div>
                        @endif
                        @if($survey->id === 4)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist4" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist4" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist4" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist4" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist4" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                         @endif
                         @if($survey->id === 5)
                            <div class="row survey-row">
                                 <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                 </div>
                                 <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist5" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                 </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist5" class="form-check-input" value="2">
                                        </label>
                                 </div>
                                 <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist5" class="form-check-input" value="3">
                                        </label>
                                 </div>
                                 <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist5" class="form-check-input" value="4">
                                        </label>
                                 </div>
                                 <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist5" class="form-check-input" value="5">
                                        </label>
                                 </div>
                            </div>
                        @endif
                        @if($survey->id === 6)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist6" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist6" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist6" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist6" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist6" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                         @endif
                         @if($survey->id === 7)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist7" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist7" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist7" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist7" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist7" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                         @endif
                         @if($survey->id === 8)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist8" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist8" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist8" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist8" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist8" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                         @endif
                         @if($survey->id === 9)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist9" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist9" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist9" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist9" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist9" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                         @endif
                         @if($survey->id === 10)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist10" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist10" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist10" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist10" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist10" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                         @endif
                         @if($survey->id === 11)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist11" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist11" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist11" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist11" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist11" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                         @endif
                         @if($survey->id === 12)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist12" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist12" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist12" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist12" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist12" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                         @endif
                         @if($survey->id === 13)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist13" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist13" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist13" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist13" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist13" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                         @endif
                         @if($survey->id === 14)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist14" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist14" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist14" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist14" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist14" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                         @endif
                         @if($survey->id === 15)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist15" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist15" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist15" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist15" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist15" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                         @endif
                         @if($survey->id === 16)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist16" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist16" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist16" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist16" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist16" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                         @if($survey->id === 17)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist17" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist17" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist17" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist17" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist17" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                         @if($survey->id === 18)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist18" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist18" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist18" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist18" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist18" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                          @endif
                         @if($survey->id === 19)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist19" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist19" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist19" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist19" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist19" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                          @endif
                         @if($survey->id === 20)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist20" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist20" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist20" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist20" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist20" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 21)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist21" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist21" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist21" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist21" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist21" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 22)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist22" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist22" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist22" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist22" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist22" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 23)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist23" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist23" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist23" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist23" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist23" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 24)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist24" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist24" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist24" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist24" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist24" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 25)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist25" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist25" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist25" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist25" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist25" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 26)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist26" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist26" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist26" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist26" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist26" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 27)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist27" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist27" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist27" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist27" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist27" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 28)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist28" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist28" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist28" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist28" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist28" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 29)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist29" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist29" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist29" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist29" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist29" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 30)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist30" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist30" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist30" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist30" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist30" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 31)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist31" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist31" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist31" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist31" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist31" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 32)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist32" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist32" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist32" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist32" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist32" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 33)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist33" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist33" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist33" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist33" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist33" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 34)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist34" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist34" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist34" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist34" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist34" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 35)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist35" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist35" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist35" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist35" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist35" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 36)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist36" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist36" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist36" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist36" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist36" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 37)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist37" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist37" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist37" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist37" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist37" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 38)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist38" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist38" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist38" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist38" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist38" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 39)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist39" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist39" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist39" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist39" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist39" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 40)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist40" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist40" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist40" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist40" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist40" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 41)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist41" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist41" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist41" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist41" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist41" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 42)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist42" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist42" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist42" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist42" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist42" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 43)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist43" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist43" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist43" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist43" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist43" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 44)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist44" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist44" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist44" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist44" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist44" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($survey->id === 45)
                                <div class="row survey-row">
                                    <div class="col-md-7">
                                        <p>
                                            <strong>{{ $survey->principal }}</strong>
                                        </p>
                                        <p>
                                            {{ $survey->question_description }}
                                        </p>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist45" class="form-check-input" value="1">
                                            <input type="hidden" name="user_id" value="{{ old('user_id', isset($questionaire) ? $questionaire->user_id : '') }}" required>
                                            <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist45" class="form-check-input" value="2">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist45" class="form-check-input" value="3">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist45" class="form-check-input" value="4">
                                        </label>
                                    </div>
                                    <div class="col-md-1">
                                        <label class="radio-inline">
                                            <input type="radio" name="principal_checklist45" class="form-check-input" value="5">
                                        </label>
                                    </div>
                                </div>
                            @endif
                    @endforeach
                @endif

            </div>
            <div>
                <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection
