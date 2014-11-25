<?php

class WeekController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(Week::get());
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
		Week::create(array(
			'date_created' => date('Y-m-d'),
			'date_completed' => '0000-00-00',
			'completed' => false,
			'can_be_completed' => date('Y-m-d', StrToTime("Next Sunday"))
		));

		return Response::json(array('success' => true));
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$week = Week::findOrFail($id);
		if (strtotime(Date('y-m-d')) > strtotime($week->can_be_completed)) {
			$week->completed = true;
			$week->date_completed = date('Y-m-d');
			$week->save();
			return Response::json(array('success' => true));
		}else {
			return Response::json(array('success' => false));
		}

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Week::destroy($id);
		return Response::json(array('success' => true));
	}


}
