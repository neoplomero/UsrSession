<?php

use UsrSession\Repositories\UserRepo;
use UsrSession\Entities\User;

class HomeController extends BaseController {

    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }
	public function index()
	{
        $users = User::orderBy('created_at','des')->paginate(7);
		return View::make('home', compact('users'));
	}

}
