<?php namespace UsrSession\Managers;


class RegisterManager extends BaseManager {
    public function getRules()
    {
        $rules = [
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email',
            'address'  => '',
            'phone'    => '',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'

        ];
        return $rules;
    }

} 