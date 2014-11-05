<?php

class UsersController extends BaseController
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
        $user = User::findOrFail($id);
        return View::make('users_edit', compact('user'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $user = User::findOrFail($id);
        $user->fill(Input::all());
        if ($user->isDirty('active')) {
            Session::flash('active', 'User Activated or Deactivated successfully');
            $data = array(
                'fname' => $user->fname,
                'infix' => $user->infix,
                'sname' => $user->sname,
                'email' => $user->email,
                'company' => $user->company,
                'explain' => $user->explain,
                'id' => $user->id);
            Mail::send('emails.register.changein', $data, function ($message) use ($user) {
                $message->to($user->email)->subject('Change in account settings');
            });
        } else {
            Session::flash('message_updated', 'User successfully updated');
        }
        $user->save();
        return Redirect::to('users');
    }
    public function update_profile($id)
    {
        $user = User::findOrFail($id);
        $user->fill(Input::all());
        $user->save();
        Session::flash('message_updated', 'Settings successfully updated');
        $data = array(
            'fname' => $user->fname,
            'infix' => $user->infix,
            'sname' => $user->sname,
            'email' => $user->email,
            'company' => $user->company,
            'explain' => $user->explain,
            'id' => $user->id);
        Mail::send('emails.register.changein', $data, function ($message) use ($user) {
            $message->to($user->email)->subject('Change in account settings');
        });
        return Redirect::to('settings');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->destroy($id);
        Session::flash('message_deleted', 'User successfully deleted');
        return Redirect::to('users');
    }

    public function givePassword($id)
    {
        $user = User::findOrFail($id);
        $random = str_random(256);
        $user->token = $random;
        $user->save();
        $data = array(
            'fname' => $user->fname,
            'infix' => $user->infix,
            'sname' => $user->sname,
            'email' => $user->email,
            'company' => $user->company,
            'explain' => $user->explain,
            'id' => $user->id,
            'token' => $random);
        Mail::send('emails.register.setpass', $data, function ($message) use ($user) {
            $message->to($user->email)->subject('Create your password');
        });
        return Redirect::to('users');
    }

    public function checkToken($id, $token)
    {
        $user = User::findOrFail($id);
        if($user->token == $token){
            return View::make('setPassword', $user)->with('user', array($user));
        }else{
            return Redirect::to('/');
        }
    }

    public function setPassword($id)
    {
        $user = User::findOrFail($id);
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        return Redirect::to('login');
    }

    public function updatePassword($id)
    {
        $user = User::findOrFail($id);
        $random = str_random(256);
        $user->token = $random;
        $user->save();
        $data = array(
            'fname' => $user->fname,
            'infix' => $user->infix,
            'sname' => $user->sname,
            'email' => $user->email,
            'company' => $user->company,
            'explain' => $user->explain,
            'id' => $user->id,
            'token' => $random);
        Mail::send('emails.register.setpass', $data, function ($message) use ($user) {
            $message->to($user->email)->subject('Change your password');
        });
        return Redirect::to('settings');
    }
}
