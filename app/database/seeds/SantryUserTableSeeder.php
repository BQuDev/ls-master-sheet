<?php

// Composer: "fzaninotto/faker": "v1.3.0"


class SantryUserTableSeeder extends Seeder {

	public function run()
	{
		


        // Creating admin group
/*
        try
        {
            $group = Sentry::createGroup(array(
                'name'        => 'Super Administrator',
                'permissions' => array(
                    'admin' => 1,
                    'users' => 1,
                ),
            ));
        }
        catch (Exception $e)
        {
            echo 'Login field is required.';
        }
*/
        // Creating Admin
        try
        {
            // Create the user
            $user = Sentry::createUser(array(
                'email'=> 'ijay@bqu.com',
                'password'  => '123',
                'activated' => true,
                'first_name'=> 'BQu',
                'last_name'=> 'Administrator'
            ));

            // Find the group using the group id
            $adminGroup = Sentry::findGroupByName('Super Administrator');

            // Assign the group to the user
            $user->addGroup($adminGroup);
        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            echo 'Login field is required.';
        }
        // Creating User
	}

}