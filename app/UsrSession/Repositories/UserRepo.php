<?php namespace UsrSession\Repositories;

use UsrSession\Entities\User;

class UserRepo {
    public function getModel()
    {
        return new User();
    }

    public function findLatest($take = 10){


    }

    public function newUser()
    {
        $user = new User();
        return $user;
    }
} 