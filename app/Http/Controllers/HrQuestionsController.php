<?php

namespace App\Http\Controllers;

use App\HrAction;
use App\HrPersonApplicationForm;
use App\HrInterview;
use App\HrInvite;
use App\HrPerson;
use App\HrQuestions;
use Illuminate\Http\Request;

class HrQuestionsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function applicationFormStore(Request $request)
    {
        $form = $request->all();

        $question = new HrQuestions();
        $applicationForm = $question->updateOrCreateApplicationForm($form);

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function profileFromPersonedit($id)
    {
        $questions = new HrQuestions();

        return view('hr.person_info_form',
            $questions->getEditForm($id));

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function profileFromPersonupdate(Request $request, $id)
    {
        $form = $request->all();

        $person = new HrPerson();
        $person->updateOrCreatePerson($form, $id);

        $action = new HrAction();
        $action = $action->updateOrCreateAction($form, $id);

        $interview = new HrInterview();
        $interview = $interview->updateOrCreateInterview($form, $id);

        return redirect('/hr_people_list');
    }


}
