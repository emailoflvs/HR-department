<?php

namespace App\Http\Controllers;

use App\ApplicationForm;
use App\HrAction;
use App\HrInterview;
use App\HrInvite;
use App\HrOperator;
use App\HrQuestions;
use App\User;
use App\Filiation;
use Carbon\Carbon;
use Faker\Provider\Person;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Role;
use DB;
use App\HrPerson;

class HrPersonController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hr_person');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $person = new HrPerson();

        return view('hr.person_info_form',
            $person->getPersonEditForm());

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = $request->all();

        $person = new HrPerson();
        $personStore = $person->updateOrCreatePerson($form);

        if ($personStore->id) {

            $action = new HrAction();
            $action = $action->updateOrCreateAction($form, $personStore->id);

            $interview = new HrInterview();
            $interview = $interview->updateOrCreateInterview($form, $personStore->id);

            if (isset($action->id)) {
                $invite = new HrInvite();
                $invite->updateOrCreateInvite($form, $action->id);
            }
        }

        return redirect('/hr_people_list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $person = new HrPerson();

        return view('hr.person_info_form',
            $person->getPersonEditForm($id));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $form = $request->all();

        $person = new HrPerson();
        $person->updateOrCreatePerson($form, $id);

        return redirect('/hr_people_list');
    }

    /**
     * List of people
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $person = new HrPerson();

        return view('hr.people_list',
            ['people' => $person->getPeople()]);

    }

}
