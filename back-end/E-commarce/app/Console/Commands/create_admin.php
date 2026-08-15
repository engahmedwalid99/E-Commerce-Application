<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class create_admin extends Command
{
    protected $signature = 'create:admin';

    protected $description = 'Create admin user';

    public function handle()
    {

        $name = $this->ask('What is the admin name?');
        $email = $this->ask('What is the admin email?');
        $password = $this->ask('What is the admin password?');

        $validate = Validator::make([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ], [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'string', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validate->fails()) {
            foreach ($validate->errors()->all() as $error) {
                $this->error($error);
            }
            return;

        } else {
            User::create([
                'name' => $name,
                'email' => $email,
                'role' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make($password),
            ]);
            $this->info('Admin created successfully');
        }
    }
}
