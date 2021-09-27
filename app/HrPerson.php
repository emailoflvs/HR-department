<?php

namespace App;

use App\Filiation;
use App\HrAction;
use App\HrInterview;
use App\HrInvite;
use App\HrOperator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\User;
use App\Help;
use Carbon\Carbon;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Role;
use DB;


class HrPerson extends Model
{
    use Notifiable;

    public $personAction;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'phone_number', 'date_added_to_database', 'birthday', 'history', 'filiation_id',
        'hr_operator_id', 'hr_specialization_id', 'hr_info_source_id', 'hr_mail_response_filiation_id',
        'hr_messenger_id', 'hr_person_status_id'
    ];

//    /**
//     * Create a person
//     * @param int
//     *
//     * @return void
//     */
//    public function __construct($id = null)
//    {
//        if (is_null($id)) {
//            $this->personAction = "create";
//            $this->id = "";
//        } else {
//            $this->personAction = "update";
//            $this->id = $id;
//        }
//    }

    /**
     * Get the person info
     * @param intereg $id
     * @var array
     */
    public function getPerson($id)
    {
//        $id = (!empty($id)) ? $id : $this->id;

        $info = HrPerson::where('id', $id)->first();

        if ($info) {
            $this->id = $id;
            $this->name = $info->name;
            $this->surname = $info->surname;
            $this->phoneNumber = $info->phone_number;
            $this->dateAddedToDatabase = $info->date_added_to_database;
            $this->history = $info->history;
//            $this->birthday = $info->birthday;
            $this->personFiliation = $info->filiation_id;
            $this->hrOperator = $info->hr_operator_id;
            $this->hrSpecialization = $info->hr_specialization_id;
            $this->hrInfoSource = $info->hr_info_source_id;
            $this->messenger = $info->hr_messenger_id;
            $this->mailResponseFiliation = $info->hr_mail_response_filiation_id;
            $this->hrPersonStatus = $info->hr_person_status_id;
        }

        return $this;
    }

    /**
     * Get the person form
     * @param intereg $id
     * @var array
     */
    public function getPersonEditForm($id = null)
    {
        $filiations = new Filiation();
        $hrOperators = new HrOperator();
        $hrRefusing = new HrInviteRefusingReason();
        $applicationForm = new ApplicationForm();
        $help = new HelpModule();

        $form = [
//            'hrActionDatetime' => $hrActionDatetime,
            'filiations' => $filiations->getFiliations(),
            'hrOperators' => $hrOperators->getHrOperators(),
            'messengers' => DB::table('hr_messengers')->get(),

            'hrInfoSources' => DB::table('hr_info_sources')->get(),
            'hrActionTypes' => DB::table('hr_action_types')->get(),
            'hrActionContactResults' => DB::table('hr_action_contact_results')->get(),

            'timetables' => DB::table('timetables')->get(),
            'hrSpecializations' => DB::table('hr_specializations')->get(),
            'inviteRefusingReasonsCompany' => $hrRefusing->getReasonList('company'),
            'inviteRefusingReasonsPerson' => $hrRefusing->getReasonList('person'),

        ];

        $hrPersonStatuses = DB::table('hr_person_statuses')->get();
        foreach ($hrPersonStatuses as $hrPersonStatuse) {
            $status = [];
            $status['id'] = $hrPersonStatuse->id;
            $status['name'] = $hrPersonStatuse->name;
            $status['value'] = $hrPersonStatuse->value;
            $status['displayName'] = $hrPersonStatuse->display_name;
            $personStatuses[] = $status;
        }
        $form += ['hrPersonStatuses' => $personStatuses];

        if ($id) {
            $form += [
                'id' => $id,
                'person' => $this->getPerson($id),];

            $hrApplicationForm = HrPersonApplicationForm::where('person_id', $id)->get();
            if (isset(last(last($hrApplicationForm))->id))
                $form += [
                    //ID последнией анкеты, заполненной этим пользователем
                    'hrApplicationFormId' => last(last($hrApplicationForm))->id,
                ];

        }

        $form += [
            'applicationForm' => $applicationForm->getApplicationFormByVendorCode('candidate_application_form'),
        ];

        $actions = new HrAction();
        $allActions = $actions->getAllActions($id);

        $form += ['actions' => $allActions];

        /* Приглашение на интервью */
        $interview = new HrInterview();
        $lastInterview = $interview->getLastInterview($id);
        $interviews = $interview->getInterviews($id);

        $form += ['interviews' => $interviews];
        $form += ['hrPersonPotentialStatus' => $lastInterview
        ];

        return $form;
    }


    /**
     * Update the person info or create new
     * @param object $form
     * @param int $id
     *
     * @var array
     */
    public function updateOrCreatePerson($form, $id = null)
    {

        $mailResponseFiliation = (!$form['mailResponseFiliation']) ? null : $form['mailResponseFiliation'];

        $personForm = [
            'name' => $form['name'],
            'surname' => $form['surname'],
            'phone_number' => $form['phoneNumber'],
            'date_added_to_database' => $form['dateAddedToDatabase'],
//                'birthday' => date(time())
            'history' => $form['history'],

            'filiation_id' => $form['personFiliation'],
            'hr_operator_id' => $form['hrOperator'],
//            'hr_specialization_id' => $form['hrSpecialization'],
            'hr_info_source_id' => $form['hrInfoSource'],
            'hr_messenger_id' => $form['messenger'],
            'hr_mail_response_filiation_id' => $mailResponseFiliation,
        ];

        if ($id)
            HrPerson::where('id', $id)->update($personForm);
        else
            $id = HrPerson::firstOrCreate($personForm)->id;

        //действия и результаты действий (статус) при первом общении
        $action = new HrAction();
        $action = $action->updateOrCreateAction($form, $id);

        //статус, который менеджер добавляет вручную после собеседования
        $interview = new HrInterview();
        $interview = $interview->updateOrCreateInterview($form, $id);

        return $id;
    }


    /**
     * Get the people by operator
     * @param intereg $operatorId
     * @var array
     */
    public function getPeople($operatorId = null)
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

}
