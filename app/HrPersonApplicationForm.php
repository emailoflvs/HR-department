<?php

namespace App;

use App\Filiation;
use App\HrAction;
use App\HrInterview;
use App\HrOperator;
use App\HrInvite;
use App\HrPerson;
use \App\HelpModule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Role;
use DB;

class HrPersonApplicationForm extends Model
{
    use Notifiable;

//    protected $table = "hr_person_application_forms";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'person_id', 'comments', 'type', 'status'
    ];

    /**
     * Get the application edit form
     * @param intereg $aplicationFormId
     * @param intereg $persosnId
     * @param string $action
     * @var array
     */
    public function getEditForm($aplicationFormId, $personId = null, $action = null)
    {
        $hrQuestions = new HrQuestions();
        $filiations = new Filiation();
        $hrOperators = new HrOperator();
        $application = new ApplicationForm();

        $form = $application->getEditForm($aplicationFormId);

        // в зависимости от $action, выставляю на заполнение новой анкеты или обновление готовой
        if ($action == 'store' && $personId)
            $form += ['personId' => $personId,];
        elseif ($action == 'update' && $personId)
            $form += ['id' => $personId,];

        return $form;
    }

    /**
     * Show application data
     * @param intereg $applicationFormId
     * @var array
     */
    public function showApplicationForm($personApplicationFormId)
    {
        $hrQuestions = new HrQuestions();
        $filiations = new Filiation();
        $hrOperators = new HrOperator();
        $person = new HrPerson();
        $applicationFormObject = new ApplicationForm();

        $appData = DB::table('hr_person_answers')
            ->where('person_application_form_id', $personApplicationFormId)->get();


        $fullInfo = [];
        $personApplicationForm = [];
        foreach ($appData as $value) {
            $row = [];

            /* получаем вопрос из таблицы */
            $question = HrQuestions::where('vendor_code', $value->question_vendor_code)->first();

            if (!empty($question->answer_table)) {

                //результат из таблицы ответов (answer_table), соответствующих конкретному вопросу
                $answer = DB::table($question->answer_table)->where('id', $value->answer)
                    ->first();
                //колонка с нужным значением (result_column)
                $columnName = $question->result_column;

                //значение для отображения на фронте
                $value->answer = $answer->$columnName;
            }

            $row['question'] = $question->question;
            $row['answer'] = $value->answer;

            $applicationForm[] = $row;
        }


        $appForm = HrPersonApplicationForm::where('id', $personApplicationFormId)->get();

        $applicationFormId = last(last($appForm))->id;
        $personId = last(last($appForm))->person_id;

        $fullInfo['applicationForm'] = $applicationForm;
        $fullInfo['person'] = HrPerson::where('id', $personId)->first();

        //        $fullInfo['applicationForm2'] = ApplicationForm::where('id',$applicationFormId)->first();
        $application_form_id = HrPersonApplicationForm::where('id', $applicationFormId)->first()['application_form_id'];
        $fullInfo['applicationFormInfo'] = last($applicationFormObject->getApplicationForms($application_form_id));

        //переменные со знаком _ меняем на нижний-верхний регистр
        $module = new HelpModule();
        $fullInfo = $module->changeRegisterToTop($fullInfo);

        return $fullInfo;
    }


    /**
     * Update or store Application Form
     * @param object $form
     * @param int $id
     *
     * @var array
     */
    public
    function updateOrCreateApplicationForm($form, $personApplicationFormId = null)
    {

        $applicationForm = [];

        $applicationForm += isset($form['applicationFormId']) ? ['application_form_id' => $form['applicationFormId'],] : [];
        $applicationForm += isset($form['personId']) ? ['person_id' => $form['personId'],] : [];
        $applicationForm += isset($form['applicationComments']) ? ['comments' => $form['applicationComments'],] : [];
        $applicationForm += isset($form['applicationType']) ? ['type' => $form['applicationType'],] : [];
        $applicationForm += isset($form['applicationStatus']) ? ['status' => $form['applicationStatus'],] : [];

        if (!$personApplicationFormId) {
            $personApplicationFormId = isset($form['personApplicationFormId']) ? $form['personApplicationFormId'] : null;
            $applicationForm += isset($form['personApplicationFormId']) ?
                ['personApplication_form_id' => $form['personApplicationFormId'],] : [];
        }

        if ($personApplicationFormId) {
            $result = HrPersonApplicationForm::where('id', $personApplicationFormId)
                ->update($applicationForm);
        } else {
            $personApplicationFormId = HrPersonApplicationForm::insertGetId($applicationForm);
        }

        $hrQuestions = new HrQuestions();
        $questions = $hrQuestions->updateOrCreateAnswers($form, $personApplicationFormId);

        return;
        if ($applicationFormId) {
            $result = DB::table('HrAnswersTable')->where('id', $applicationFormId)
                ->update($applicationForm);
        } else {
            $applicationForm += ['id' => null];
            $result = DB::table('HrAnswersTable')->insert($applicationForm);
        }
        return $result;
    }

    /**
     * Get the people by application
     * @param intereg $applicationId
     * @var array
     */
    public
    function getPersonById($applicationId = null)
    {
        $form = HrPersonApplicationForm::where('id', $applicationId)->first();

        $person = new HrPerson();

        if ($form)
            return $person->getPerson($form->person_id);
        return null;
    }

}


