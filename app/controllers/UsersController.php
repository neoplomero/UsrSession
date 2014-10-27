<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 24/10/2014
 * Time: 10:08 PM
 */
use UsrSession\Entities\User;
use UsrSession\Managers\RegisterManager;
use UsrSession\Managers\AccountManager;
use UsrSession\Repositories\UserRepo;


class UsersController extends BaseController {

    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;

    }

    public function signUp(){

        return View::make('users/sign-up');

    }

    public function register(){

        $user = $this->userRepo->newUser();
        $manager = new RegisterManager($user, Input::all());
        if ($manager->save()){

            return Redirect::route('home');
        }
        else{
            return Redirect::back()->withInput()->withErrors($manager->getErrors());
        }

    }

    // show users
    public function users(){
        $users = User::orderBy('created_at','des')->paginate(7);
        return View::make('users/users', compact('users'));
    }


    // method to see an specific user
    public function account(){

            $user = Auth::user();
            return View::make('users/account', compact('user'));


    }

    // method to update modified data.
    public function updateAccount()
    {
        $user = Auth::user();

        if(Input::get('edit')) {

            $manager = new AccountManager($user, Input::all());
            if ($manager->save()) {

                return Redirect::route('home');
            } else {
                return Redirect::back()->withInput()->withErrors($manager->getErrors());
            }
        }
        elseif(Input::get('delete'))
        {
            $user = Auth::user();
            $id =$user->id;
            User::destroy($id);
            return Redirect::route('home')->with('user_deleted', 1);
        }
    }



} 