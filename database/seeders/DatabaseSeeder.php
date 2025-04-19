<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Création de l'utilisateur administrateur par défaut
        User::create([
            'name' => 'Manager Escom',
            'email' => 'socialmedia@cna-escom.ci',
            'password' => Hash::make('12345678'),
            'role' => 'manager_admin_role',
        ]);
    }
}
