<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Principal;
use Illuminate\Http\Request;
use App\Audit;
use App\User;
use App\Questionnaire;
use App\Survey;
use App\Member;
use App\Assessment;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\StoreAuditsRequest;
use Illuminate\Support\Facades\DB;


class AuditsController extends Controller
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

        $principals = Principal::withCount('surveys')->get();
        $count = Questionnaire::count();
        $countAr[] = Questionnaire::count();
        $userCount = Questionnaire::count() / 48;
        $principal_counter = Principal::count();
        $survey_counter = Survey::count();
        $audit_percent = 1;
        $questions = Questionnaire::all();

        /*
        -------------------------------------------------------------------
            SECTIONS CALCULATIONS
        -------------------------------------------------------------------
        */
        //score for Section A. Committee Composition calculations
        $questionAsked3 = 3;
        $sectionATotalValue = 1 * 3;
        $sectionAScore = (3.3 * $questionAsked3) * 1/$sectionATotalValue ;

        //score for Section B. Committee Responsibilities calculations
        $questionAsked6 = 6;
        $sectionBTotalValue = 1 * 6;
        $sectionBScore = (3.3 * $questionAsked6) * 1/$sectionBTotalValue ;

        //score for Section C. Operating Practices calculations
        $questionAsked6 = 6;
        $sectionCTotalValue = 1 * 6;
        $sectionCScore = (3.3 * $questionAsked6) * 1/$sectionCTotalValue ;

        //score for Section D. Committee Governance calculations
        $questionAsked4 = 4;
        $sectionDTotalValue = 1 * 4;
        $sectionDScore = (3.3 * $questionAsked4) * 1/$sectionDTotalValue ;

        //score for size & independence calculations
        $questionAsked1 = 1;
        $sizeTotalValue = 1 * 5;
        $surveyScore = (3.3 * $questionAsked1) * 1/$sizeTotalValue ;

        //score for financial literacy calculations
        $questionAsked3 = 3;
        $financialLiteracyTotalValue = 1 * 5;
        $financialLiteracyScore = (3.3 * $questionAsked3) * 1/$financialLiteracyTotalValue ;

        //score for financial reporting calculations
        $questionAsked4 = 4;
        $financialReportingTotalValue = 1 * 5;
        $financialReportingScore = (3.3 * $questionAsked4) * 1/$financialReportingTotalValue ;

        //score for interim financial reports calculations
        $interimFinancialReportsTotalValue = 1 * 5;
        $interimFinancialReportsScore = (3.3 * $questionAsked4) * 1/$interimFinancialReportsTotalValue ;

        //score for annual financial reports calculations
        $annualFinancialReportsTotalValue = 1 * 5;
        $annualFinancialReportsScore = (3.3 * $questionAsked3) * 1/$annualFinancialReportsTotalValue ;

        //score for internal reports calculations
        $questionAsked5 = 5;
        $internalReportsTotalValue = 1 * 5;
        $internalReportsScore = (3.3 * $questionAsked5) * 1/$internalReportsTotalValue ;

        //score for independent auditor calculations
        $questionAsked8 = 8;
        $independentAuditorTotalValue = 1 * 8;
        $independentAuditorScore = (3.3 * $questionAsked8) * 1/$independentAuditorTotalValue ;

        //score for internal audit calculations
        $internalAuditTotalValue = 1 * 5;
        $internalAuditScore = (3.3 * $questionAsked5) * 1/$internalAuditTotalValue ;

        //score for agenda setting calculations
        $questionAsked2 = 2;
        $agendaSettingTotalValue = 1 * 2;
        $agendaSettingScore = (3.3 * $questionAsked2) * 1/$agendaSettingTotalValue ;

        //score for advanced materials calculations
        $advancedMaterialsTotalValue = 1 * 1;
        $advancedMaterialsScore = (3.3 * $questionAsked1) * 1/$advancedMaterialsTotalValue ;

        //score for meetings calculations
        $meetingsTotalValue = 1 * 2;
        $meetingsScore = (3.3 * $questionAsked2) * 1/$meetingsTotalValue ;

        //score for private meetings calculations
        $privateMeetingsTotalValue = 1 * 1;
        $privateMeetingsScore = (3.3 * $questionAsked1) * 1/$privateMeetingsTotalValue ;

        //score for education and knowledge calculations
        $educationKnowledgeTotalValue = 1 * 1;
        $educationKnowledgeScore = (3.3 * $questionAsked1) * 1/$educationKnowledgeTotalValue ;

        //score for minutes calculations
        $minutesTotalValue = 1 * 1;
        $minutesScore = (3.3 * $questionAsked1) * 1/$minutesTotalValue ;

        //score for performance assessment calculations
        $performanceAssessmentTotalValue = 1 * 1;
        $performanceAssessmentScore = (3.3 * $questionAsked1) * 1/$performanceAssessmentTotalValue ;

        //score for charter calculations
        $charterTotalValue = 1 * 2;
        $charterScore = (3.3 * $questionAsked2) * 1/$charterTotalValue ;

        //score for communication with board calculations
        $communicationWithBoardTotalValue = 1 * 1;
        $communicationWithBoardScore = (3.3 * $questionAsked1) * 1/$communicationWithBoardTotalValue ;

        //score for risk management calculations
        $riskManagementTotalValue = 1 * 2;
        $riskManagementScore = (3.3 * $questionAsked2) * 1/$riskManagementTotalValue ;

        if($principal_counter == 1){
            $audit_percent = 1;
        }
        else if($principal_counter == 2){
            $audit_percent = $survey_counter * 2;
        }

        $results = Principal::all();
        $total_surveys = $results->sum('id');

        //$user_count[] = array();
        $audits = DB::table('principals')
            ->leftJoin('surveys', 'surveys.principal_id', '=', 'principals.id')
            ->leftJoin('questionnaires', 'questionnaires.survey_id', '=', 'surveys.id')
            ->leftJoin('users', 'questionnaires.user_id', '=', 'users.id' )
            ->select('principals.*', 'surveys.*', 'questionnaires.*', 'users.*')
            ->limit(10)
            ->get();

        $principal_checklist1 = 1;
        $question_principal1 = Questionnaire::find('principal_checklist1');

        if ($principal_checklist1 === 1){
            $question_principal1 = 1;
        }

        $principal_checklist1 = 2;
        $question_principal2 = Questionnaire::find('principal_checklist2');

        if ($principal_checklist1 === 2){
            $question_principal2 = 2;
        }

        $principal_checklist3 = 3;
        $question_principal3 = Questionnaire::find('principal_checklist3');

        if ($principal_checklist1 === 3){
            $question_principal1 = 3;
        }

        $principal_checklist4 = 4;
        $question_principal4 = Questionnaire::find('principal_checklist4');

        if ($principal_checklist4 === 4){
            $question_principal4 = 4;
        }

        $principal_checklist5 = 5;
        $question_principal5 = Questionnaire::find('principal_checklist5');

        if ($principal_checklist5 === 5){
            $question_principal5 = 5;
        }

        $audit_result = Audit::find(1);

        $sectionA_result = 3 * $sectionAScore;
        $sectionB_result = 6 * $sectionBScore;
        $sectionC_result = 6 * $sectionCScore;
        $sectionD_result = 4 * $sectionDScore;

        /*
        -------------------------------------------------------------------
            PRINCIPALS CALCULATIONS
        -------------------------------------------------------------------
        */

        // print_r("<pre>"); var_dump($users);
        // $surveys = Survey::with('audits')->orderBy('id', 'asc')->get();

        $user = User::count();

        return view('admin.audits.index', compact(
                'surveys', 'principals', 'audits', 'userCount', 'count', 'principal_counter',
                'audit_percent', 'survey_counter', 'total_surveys', 'results', 'questions', 'audit_result',
                'countAr', 'sizeTotalValue', 'surveyScore', 'financialReportingScore',
                'financialLiteracyScore', 'interimFinancialReportsScore', 'annualFinancialReportsScore',
                'internalReportsScore', 'independentAuditorScore', 'internalAuditScore', 'agendaSettingScore',
                'advancedMaterialsScore', 'meetingsScore', 'privateMeetingsScore', 'educationKnowledgeScore',
                'minutesScore', 'performanceAssessmentScore', 'charterScore', 'communicationWithBoardScore',
                'riskManagementScore', 'sectionA_result', 'sectionB_result', 'sectionC_result', 'sectionD_result', 'size',
                'user', 'question_principal1', 'question_principal2', 'question_principal3', 'question_principal4', 'question_principal5'
            )
        );
    }

    /**
     * Display a listing of Category.
     *
     * @return \Illuminate\Http\Response
     */
    public function members()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $countAr[] = Member::count();
        $audit_result = Audit::find(1);

        return view('admin.audits.members', compact(
                'audit_result', 'countAr'
            )
        );
    }

    /**
     * Display a listing of Category.
     *
     * @return \Illuminate\Http\Response
     */
    public function iss()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $countAr[] = Assessment::count();
        $audit_result = Audit::find(1);

        return view('admin.audits.iss', compact(
                'audit_result', 'countAr'
            )
        );
    }

}
