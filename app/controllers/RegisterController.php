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
            // I'm creating an array with user's info but most likely you can use $user->email or pass $user object to closure later
            $input = array(
                'fname' => Input::get('fname'),
                'infix' => Input::get('infix'),
                'sname' => Input::get('sname'),
                'email' => Input::get('email'),
                'company' => Input::get('company'),
                'explain' => Input::get('explain')
            );

// the data that will be passed into the mail view blade template
            $data = array(
                'fname' => $input['fname'],
                'infix' => $input['infix'],
                'sname' => $input['sname'],
                'email' => $input['email'],
                'company' => $input['company'],
                'explain' => $input['explain']
            );
            $email = 'alexbrasser@gmail.com';

// use Mail::send function to send email passing the data and using the $user variable in the closure
            Mail::send('emails.register.verify', $data, function ($message) use ($input) {
                $message->to('alexbrasser@gmail.com')->subject('An user wants acces to your site!');
            });
            Mail::send('emails.register.confirm', $data, function ($message) use ($input) {
                $message->to($input['email'])->subject('Your request is being verified by the owner!');
            });
            User::saveFormData(Input::except(array('_token')));

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
