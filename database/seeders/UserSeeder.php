<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus user lama jika ada (opsional)
        User::where('email', 'admin@protic.id')->delete();

        User::create([
            'name' => 'Admin Protic',
            'email' => 'admin@protic.id',
            'password' => Hash::make('admin123'),
        ]);
    }
}
