@extends('layouts.admin')
@section('content')
@can('users_manage')

@endcan

<h4>Iss Survey Scores</h4><br />

@if(!empty($audit_result))
    @for($i = 0; $i < count($countAr); $i++)
        @if($countAr[$i])
            @if($audit_result->size)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Size</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->size + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->independence)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Independence</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->independence + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->financial_literacy)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Financial Literacy</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->financial_literacy + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->financial_reporting)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Financial Reporting</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->financial_reporting + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->interim_financial_reports)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Interim Financial Reports</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->interim_financial_reports + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->annual_financial_reports)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Annual Financial Reports</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->annual_financial_reports + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->internal_reports)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Internal Reports</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->internal_reports + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->independent_auditor)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Independent Auditor</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->independent_auditor + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->internal_audit)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Internal Audit</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->internal_audit + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->agenda_setting)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Agenda Setting</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->agenda_setting + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->advanced_materials)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Advanced Materials</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->advanced_materials + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->meetings)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Meetings</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->meetings + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->private_meetings)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Private Meetings</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->private_meetings + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->education_knowledge)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Education Knowledge</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->education_knowledge + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->minutes)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Minutes</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->minutes + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->performance_assessment)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Performance Assessment</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->performance_assessment + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->charter)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Charter</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->charter + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->communication_with_board)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Communication With Board of Directors</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->communication_with_board + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if($audit_result->risk_management)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <label><strong>Risk Management</strong></label>
                            </div>
                            <div class="col-md-2">
                                <small class="badge badge-primary badge-pill">{{ $audit_result->risk_management + $countAr[$i] / 48}} %</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    @endfor
@endif

@endsection
@section('scripts')
@parent

@endsection
