<?php

class DayController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $all_days = Day::all();
        return $all_days;
    }

    public function showWeekDays($week_number)
    {
        $week = DB::table('week')->where('week_number', $week_number)->first();
        $weekdays = DB::table('day')->where('week_id', $week->id)->get();
        return Response::json($weekdays);
    }

    public function openWeekDays($id)
    {
        $days = DB::table('day')->where('week_id', $id)->get();
        return Response::json($days);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }
    public function checkCompletion($day_id){
        $hours = Hour::where('day_id', $day_id);
        foreach($hours as $hour){
            if($hour->the_log != 'NULL'){
                Day::where('day_id',$day_id)->all_filled_up = true;
                Day::where('day_id', $day_id)->save();
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
