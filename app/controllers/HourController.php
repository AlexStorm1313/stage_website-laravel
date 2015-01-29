<?php

class HourController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    public function showDayHours($date_of_day)
    {
        $message = array('Fail');
        $unix_time = strtotime($date_of_day);
        if ($unix_time != false) {
            $date = date('Y-m-d', $unix_time);
            if ($day = DB::table('day')->where('date_of_day', $date)->first()) {
                $dayhours = DB::table('hour')->where('day_id', $day->id)->get();
                return Response::json($dayhours);
            } else {
                return Response::json(array('message' => 'Ik kan niks vinden'));
            }

        } else {
            return Response::json(array('message' => 'Ik ga op mijn bek'));
        }


    }

    public function openDayHours($id)
    {
        $hours = DB::table('hour')->where('day_id', $id)->get();
        return Response::json($hours);
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
     *
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
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int    $id
     * @param  string $log
     *
     * @return Response
     */
    public function update($id, $log)
    {
        $field = Hour::findOrFail($id);
        $day_id = $field->day_id;
        $week_id = $field->week_id;
        $week = Week::where('id', $week_id)->pluck('completed');
        if ($week == '0') {
            $field->the_log = $log;
            $field->save();
            $logs_check = DB::select(DB::raw("SELECT * FROM hour WHERE the_log = '' AND day_id = '$day_id'"));
            if (empty($logs_check)) {
                $day = Day::where('id', $day_id)->first();
                $day->all_filled = true;
                $day->save();
            }
            //return Redirect::action('DayController@checkCompletion', array('day_id' => $day_id));
            return Response::json(array(array('success_log' => $log)));
        } else {
            return Response::json(array('error_log' => 'already completed'));
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
