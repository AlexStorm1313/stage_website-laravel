<?php

class UsersController extends \BaseController
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
        $user->save();
        if ($user->isDirty($user->role)) {
            Session::flash('dirty', 'dirty nigga');
        } else {
            Session::flash('message_updated', 'User successfully updated');
        }
        return Redirect::to('users');
    }
    public function update_profile($id)
    {
        $user = User::findOrFail($id);
        $user->fill(Input::all());
        $user->save();
        Session::flash('message_updated', 'Settings successfully updated');
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


}
