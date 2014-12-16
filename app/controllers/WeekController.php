<?php

class WeekController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Response::json(Week::get());
    }
    public function getWeekNumber(){
        $week_number = Week::get('week_number');
        return Response::json($week_number);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $currentWeek = date('W');
        $currentYear = date('Y');
        $currentDate = date('Y-m-d');
        $filtered = Week::all()->filter(function ($week) use ($currentWeek, $currentYear) {
            return (int) $week->week_number === (int) $currentWeek && (int) $week->date_year === (int) $currentYear;
            //return (int) $week->week_number === $currentWeek && (int) $week->year === $currentYear;
        });

        if (count($filtered) > 0) {
            return Response::json(array('Week already created' => true, 'week' => $filtered->first()->toArray()));
        }

        $week = Week::create(array(
            'week_number' => $currentWeek,
            'date_year' => $currentYear,
            'date_created' => $currentDate,
            'date_completed' => '0000-00-00',
            'completed' => false,
            'can_be_completed' => $currentDate, StrToTime("Next Sunday"),
            'all_filled_up' => false
        ));
        $days = array(strtotime('Monday this week'), strtotime('Tuesday this week'), strtotime('Wednesday this week'),strtotime('Thursday this week'), strtotime('Friday this week'));
        foreach($days as $day) {
            Day::create(array(
                'week_number' => $currentWeek,
                'all_filled' => false,
                'date_of_day' => date( "Y-m-d",$day)
            ));
        }

        return Response::json(array('success' => true, 'week' => $week->toArray()));
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
        $currentDate = date('Y-m-d');
        $week = Week::findOrFail($id);
        if (strtotime($currentDate) > strtotime($week->can_be_completed) && $week->all_filled_up == true) {
            $week->completed = true;
            $week->date_completed = $currentDate;
            $week->save();
            return Response::json(array('success' => true));
        } else {
            return Response::json(array('success' => false));
        }

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
        $week = Week::findOrFail($id)->week_number;
        Day::where('week_number', '=', $week)->delete();
        Week::destroy($id);
        return Response::json(array('success' => true));
    }
}
