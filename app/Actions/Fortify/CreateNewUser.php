<?php

namespace App\Actions\Fortify;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $user = User::create([
            'name' => $input['first_name'].' '.$input['last_name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role' => 'Customer',
        ]);

        $customerRole = Role::findByName('Customer', 'sanctum');
        $user->assignRole($customerRole);

        Customer::create([
            'user_id' => $user->id,
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'phone' => '',
            'gender' => '',
            'address' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return $user;
    }
}
