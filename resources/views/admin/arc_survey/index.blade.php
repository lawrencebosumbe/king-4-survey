@extends('layouts.admin')
@section('content')

    <style>
        /* Style the form */
        #regForm {
            background-color: #ffffff;
            margin: 10px auto;
            padding: 5px;
            width: 100%;
            min-width: 70%;
        }

        #regForm .row{
            width: 95%;
        }

        /* Style the input fields */
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        /* Mark the active step: */
        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }
    </style>
</head>

<body>

<h3>ARC Self Assessment</h3>

<div class="card">
    <div class="card-header">
        <h4>My Survey</h4>
    </div>

    <form id="regForm" action="{{ route("admin.arc_survey.store") }}">
    <div class="card-body">
        <div class="table-responsive">

            <!-- One "tab" for each step in the form: -->
            <div>
                @if(!empty($principals))
                <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                    <thead>
                    <tr class="text-center">
                        <th width="10">
                            {{ $section->name }}
                        </th>
                        <th>
                            1
                        </th>
                        <th>
                            2
                        </th>
                        <th>
                            3
                        </th>
                        <th>
                            4
                        </th>
                        <th>
                            5
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr data-entry-id="">
                        <td>
                            <span>Size</span>
                        </td>

                        <td>
                            <span><input type="radio" name="checklist" value="1"></span>
                        </td>
                        <td>
                            <span><input type="radio" name="checklist" value="2"></span>
                        </td>
                        <td>
                            <span><input type="radio" name="checklist" value="3"></span>
                        </td>
                        <td>
                            <span><input type="radio" name="checklist" value="4"></span>
                        </td>
                        <td>
                            <span><input type="radio" name="checklist" value="5"></span>
                        </td>
                    </tr>
                        </tbody>
                    </table>
                    <button type="submit">Submit</button>
                @endif
            </div>
            <!-- end tab -->
            <!--
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-check">
                            <label class="form-check-label"><strong>Principal</strong></label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                            <label>1</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                            <label>2</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                            <label>3</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                            <label>4</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                            <label>5</label>
                        </div>
                    </div>
                </div>

            </div>
            -->
            <!--
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-check">
                            <label class="form-check-label">Principal</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="process" name="process" value="Internal">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="process" name="process" value="Internal">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="process" name="process" value="Internal">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="process" name="process" value="Internal">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="process" name="process" value="Internal">
                        </div>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-check">
                            <label class="form-check-label">Principal</label>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="process" name="process" value="Internal">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="process" name="process" value="Internal">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="process" name="process" value="Internal">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="process" name="process" value="Internal">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="process" name="process" value="Internal">
                        </div>
                    </div>
                </div>

            </div>
            -->
        </div>
    </div>
    </form>
</div>

@endsection
