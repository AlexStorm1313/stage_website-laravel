<?php

class RegisterController extends \BaseController
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
        $data = Input::except(array('_token'));
        $rule = array(
            'fname' => 'required',
            'infix',
            'sname' => 'required',
            'email' => 'required|email|unique:register',
            'company' => 'required',
            'explain' => 'required',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            return Redirect::to('register')
                ->withErrors($validator->messages());
        } else {
            Register::saveFormData(Input::except(array('_token')));
            Mail::send('users.welcome', array(Input::get('fname')), function($message){
                $message->to(Input::get('email'),(Input::get('fname')))->subject('Welcome to the Laravel 4 Auth App!');
            });
            return Redirect::to('login');

        }
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
