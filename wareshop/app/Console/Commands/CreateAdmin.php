<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateAdmin extends Command
{
    protected $signature = 'create:admin';
    protected $description = 'Create a new admin user';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'my@email.ru',
            'password' => Hash::make('your_password'),
            'role_id' => 1, // Укажите ID роли, которую вы хотите назначить
        ]);

        // Если вы используете роли, раскомментируйте следующую строку
        $user->assignRole('admin');

        $this->info('Admin user created successfully!');
    }
}
