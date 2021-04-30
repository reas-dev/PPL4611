<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:50'],
            'username' => ['required', 'alpha_num', 'string', 'min:6', 'max:16', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:50', 'email:rfc', 'unique:users'],
            'phone' => ['required', 'string', 'min:11', 'max:14'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'username' => $input['username'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'role' => 'USR',
            'password' => Hash::make($input['password']),
        ]);
    }
}
