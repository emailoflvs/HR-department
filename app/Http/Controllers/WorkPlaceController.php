<?php

namespace App\Http\Controllers;

use App\UserWorkingTime;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TCG\Voyager\Events\MenuDisplay;
use TCG\Voyager\Http\Controllers\VoyagerMenuController;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Menu;
use Session;

class WorkPlaceController extends Controller
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

        return view('workplace');
    }


    public function WorkingTime(Request $request)
    {

        if (isset ($request->all()['working_status']))
            $working_status = $request->all()['working_status'];
        else
            $working_status = 0;


/*
 * работа с базой
 *         $userWorkingTime = new UserWorkingTime();
        $userWorkingTime->user_id = \Auth::user()->getAttributes()['id'];
        $userWorkingTime->working_status_id = $working_status;
        $userWorkingTime->time = time();
        $userWorkingTime->save();
*/
//        $workingStatus = new \App\WorkingStatus();
//        $currentStatus = $workingStatus->GetCurrentUserWorkingStatus();


        return view('home',[
                                'working_status' => $working_status,
//                                'currentStatus' => $currentStatus
                                ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
