<?php

namespace App;

use App\Filiation;
use App\HrAction;
use App\HrInterview;
use App\HrOperator;
use App\HrInvite;
use App\HrPerson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Role;
use DB;
use \App\HelpModule;

class HrQuestions extends Model
{
    use Notifiable;

//    public $personAction;
    /**
     * The attributes that are mass assignabfile.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'person_id', 'question', 'vendor_code', 'details', 'answer', 'answer_table', 'type', 'status'
    ];

    /**
     * Get the person form
     * @param intereg $id
     * @var array
     */
    public function getQuestions($id = null, $hrQuestions = null)
    {
        $module = new HelpModule();
//        $hrQuestions = HrQuestions::all();
//        $hrQuestions = HrQuestions::where('type', '<>', 'sub')->get();
        $questions = [];
        $answers = [];
        $answer_tables = [];

        if (!$hrQuestions)
            $hrQuestions = HrQuestions::where('vendor_code', '<>', '')->get();

        if ($hrQuestions) {
            foreach ($hrQuestions as $item) {
                $question = [];

                // получаем список потенциальных ответов поэтому артикулу
//                $questions[$item->vendor_code]['answers'] = $this->getAnswersByVendorCode($item->vendor_code);
//
//                $questions[$item->vendor_code]['question'] = $item->question;
//
//                $questions[$item->vendor_code]['id'] = $item->id;
//                $questions[$item->vendor_code]['personId'] = $item->person_id;
//                $questions[$item->vendor_code]['vendorCode'] = $item->vendor_code;
//                $questions[$item->vendor_code]['details'] = $item->details;
//                $questions[$item->vendor_code]['answer'] = $item->answer;
//                $questions[$item->vendor_code]['answerTable'] = $item->answer_table;
//                $questions[$item->vendor_code]['type'] = $item->type;
//                $questions[$item->vendor_code]['status'] = $item->status;

                $question['answers'] = $this->getAnswersByVendorCode($item->vendor_code);

                $question['question'] = $item->question;

                $question['id'] = $item->id;
                $question['personId'] = $item->person_id;

                //vendorCode переводим в верхни регистр
                if (strstr($item->vendor_code, '_')) {
                    $code = "";
                    $explode = explode('_', $item->vendor_code);
                    foreach ($explode as $word)
                        $code .= ucfirst($word);
                    $item->vendor_code = lcfirst($code);
                }
                $question['vendorCode'] = $item->vendor_code;
                $question['details'] = $item->details;
                $question['answer'] = $item->answer;
                $question['answerTable'] = $item->answer_table;
                $question['type'] = $item->type;
                $question['required'] = $item->required;
                $question['status'] = $item->status;

                if (!empty($item->answer_table) && $item->answer_table != 'hr_questions') {

                    //результат из таблицы ответов (answer_table), соответствующих конкретному вопросу
//                    $questions[$item->vendor_code]['answers'] = DB::table($item->answer_table)->get();
                    $question['answers'] = DB::table($item->answer_table)->get();

                    //колонка с нужным значением (result_column)
                    $columnName = $item->result_column;

                    $arrays = [];
//                    foreach ($questions[$item->vendor_code]['answers'] as $value) {
                    foreach ($question['answers'] as $value) {
                        $array = [];
                        $array['id'] = $value->id;
                        $array['answer'] = $value->$columnName;
                        $arrays[] = $array;
                    }

                    $question['answers'] = $arrays;

                    //значение для отображения на фронте
                    $question['answer'] = $item->result_column;
                }
                $questions[] = $question;
            }
        }
        //переменные со знаком _ меняем на нижний-верхний регистр
        $questions = $module->changeRegisterToTop($questions);

        return $questions;
    }


    /**
     * Update or store answers
     * @param object $form
     * @param int $id
     *
     * @var array
     */
    public
    function updateOrCreateAnswers($form, $personApplicationFormId = null)
    {

        $help = new HelpModule();
        $answer = [];
        $answersForm = $help->changeRegisterToUnderline($form);

        foreach ($answersForm as $key => $value) {
            if (strstr($key, "_method")
                || strstr($key, "table")
                || strstr($key, "_token")
                || strstr($key, "person_id")
                || strstr($key, "application_form_id")
            )
                continue;

            if (strstr($key, "checkbox")) {
                $key = explode("-", $key);
                $key = $key[1];
            }

            $answerForm = [
                'person_application_form_id' => $personApplicationFormId,
                'question_vendor_code' => $key,         //name of question
                'answer' => $value,
            ];

            $result = DB::table('hr_person_answers')->insertGetId($answerForm);

        }
        return true;

        $answers = [
            'name' => $form['name'] ?? '',
            'phone_number' => $form['phoneNumber'],
            'filiation' => $form['filiation'],
            'years' => $form['years'],
            'hr_employment_rule' => $form['hrEmploymentRule'],
            'desired_salary_first' => $form['desiredSalaryFirst'],
            'desired_salary_second' => $form['desiredSalarySecond'],
            'info_source' => $form['infoSource'],
            'info_source_name' => $form['infoSourceName'] ?? '',
            'education' => $form['education'] ?? '',
            'children' => $form['children'] ?? '',
            'desired_work_time' => $form['desiredWorkTime'],
            'operator_experience' => $form['operatorExperience'] ?? '',
            'opinion' => $form['opinion'],
            'work_location_rating' => $form['workLocationRating'],
            'raising_career_rating' => $form['raisingCareerRating'],
            'salary_important' => $form['salaryImportant'],
            'professional_personal_development' => $form['professionalPersonalDevelopment'],
            'prestige_work' => $form['prestigeWork'],
            'ru_to_ua_translation' => $form['ruToUaTranslation'],
            'computer_skills' => $form['computerSkills'],
            'computer_skills_pusk' => $form['computerSkillsPusk'],
            'computer_skills_turn_off' => $form['computerSkillsTurnOff'],
            'ua_to_ru_translation' => $form['uaToRuTranslation'],
        ];

        foreach ($answers as $vendorCode => $answer) {

            $answerForm = [
                'person_application_form_id' => $applicationFormId,
                'question_vendor_code' => $vendorCode,         //name of question
                'answer' => $answer,
            ];

            $result = DB::table('hr_person_answers')
                ->where('person_application_form_id', $applicationFormId)
                ->where('question_vendor_code', $vendorCode)
                ->update($answerForm);
            if (!$result)
                $result = DB::table('hr_person_answers')->insertGetId($answerForm);

        }

        return $result;
    }


    /**
     * Get the people by operator
     * @param intereg $operatorId
     * @var array
     */
    public
    function getAnswersByVendorCode($questionName)
    {
        $questions = HrQuestions::where('vendor_code', $questionName)->get();

        $answers = [];
        foreach ($questions as $question) {
            $answer = [];
            $answer['id'] = $question->id;
            $answer['answer'] = $question->answer;
            $answer['details'] = $question->details;
            $answers[] = $answer;
        }

        return $answers;
    }


    /**
     * Get the questions by Id
     * @param intereg $questionId
     * @var array
     */
    public
    function getQuestionsById($questionId = null)
    {
        $people = [];
        $hrPeople = HrPerson::all();

        $hrOperators = new HrOperator();
        $filiations = new Filiation();
        $interviews = new HrInterview();
        foreach ($hrPeople as $item) {
            $person[] = $this->getPerson($item->id)->toArray();

            if ($item['hr_specialization_id']) {
                $hrSpecialization = DB::table('hr_specializations')->
                where('id', $item['hr_specialization_id'])->first()->name;
                $person[0]['hrSpecialization'] = $hrSpecialization;
            }

            if ($item['hr_operator_id'])
                $person[0]['hrOperator'] = $hrOperators->getOperatorName($item['hr_operator_id']);

            if ($item['filiation_id'])
                $person[0]['personFiliation'] = $filiations->getFilialName($item['filiation_id']);

            $interview = $interviews->getInterview($item['id']);

            if (isset($interview->inviteResult)) {
                if ($interview->inviteResult == 'invite')
                    $person[0]['personInvite'] = 'приглашен';
                elseif ($interview->inviteResult == 'refusing')
                    $person[0]['personInvite'] = 'отказ';
                elseif ($interview->inviteResult == 'clarification')
                    $person[0]['personInvite'] = 'на уточнении';
                else
                    $person[0]['personInvite'] = '+';
            }
            $people = $person;

        }
        return $people;
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function applicationForms()
    {
        return $this->belongsToMany(ApplicationForm::class, 'application_form_hr_question',
            'hr_question_id', 'application_form_id');
    }
}
