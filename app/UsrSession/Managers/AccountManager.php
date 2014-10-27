<?php namespace UsrSession\Managers;


class AccountManager extends BaseManager {
    public function getRules()
    {
        $rules = [
            'name'     => 'required',
            'address'  => '',
            'phone'    => '',
            'email'    => 'required|email|unique:users,email,' .$this->entity->id,
            'password' => 'confirmed',
            'password_confirmation' => ''

        ];
        return $rules;
    }

} 