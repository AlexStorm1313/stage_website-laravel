<?php

class FileController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
		$file = Input::file('document');
		$destinationPath = 'uploads/documents';
		$custom_filename = Input::get('filename');
		if ($custom_filename == true) {
			$extension = $file->getClientOriginalExtension();
			$filename = $custom_filename . '.' . $extension;
		} else {
			$filename = $file->getClientOriginalName();
		}
		$upload_success = Input::file('document')->move($destinationPath, $filename);

		if( $upload_success ) {
			Session::flash('message_uploaded', 'File successfully uploaded');
			return Redirect::to('documents');
		} elseif ($file == null) {
			Session::flash('message_upload_failed', 'File failed to upload');
			return Redirect::to('documents');
		}
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
		//
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
		//
	}


}
