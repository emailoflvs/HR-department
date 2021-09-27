<?php

namespace App\Http\Controllers;

use App\HrOperator;
use Illuminate\Http\Request;

class HrOperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a planned calls listing
     * @param int $operatorId
     *
     * @return \Illuminate\Http\Response
     */
    public function plannedCalls($operatorId = null)
    {
        //образец:
        $operatorId = 3;

        $operator = new HrOperator();
//        $calls = $operator->getPlannedCalls($operatorId);

        return view('hr.operator.planned_calls',
            [
                'calendar' => $operator->getPlannedCalls($operatorId),
//                'calls' => $calls
            ]);
    }

    /**
     * Display a interviews listing
     * @param int $operatorId
     *
     * @return \Illuminate\Http\Response
     */
    public function plannedInterviews($operatorId = null)
    {
        //образец:
        $operatorId = 3;

        $HrOperator = new HrOperator();
//        $HrOperator->getPlannedInterviews();
//        var_dump($HrOperator->getPlannedInterviews($operatorId));
        return view('hr.operator.planned_interviews',
            [
//                'interviews' => $HrOperator->getPlannedInterviews($operatorId),
                'calendar' => $HrOperator->getPlannedInterviews($operatorId),
//                'planActionDate' =>
            ]);

    }

    /**
     * Display talks after internship
     *
     * @return \Illuminate\Http\Response
     */
    public function talksAfterInternship()
    {
        return view('hr.operator.talks_after_internship');

    }

    /**
     * Display talks after probation
     *
     * @return \Illuminate\Http\Response
     */
    public function talksAfterProbation()
    {
        return view('hr.operator.talks_after_probation');

    }

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
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
