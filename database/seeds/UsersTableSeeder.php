<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ketua = factory(User::class)->create([
            'name'     => 'andika',
            'email'    => 'andikatgs@tugas.com',
            'email_verified_at' => now(),
            'password' => bcrypt('tugas.com'),
        ]);

        $ketua->assignRole('ketua');

        $this->command->info('>_ Here is your ketua details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "inventory"');

        $customer = factory(User::class)->create([
            'name'     => 'asep',
            'email'    => 'asep123@tugas.com',
            'email_verified_at' => now(),
            'password' => bcrypt('tugas.com'),
        ]);

        $customer->assignRole('customer');

        $this->command->info('>_ Here is your customer details to login:');
        $this->command->warn($customer->email);
        $this->command->warn('Password is "inventory"');

        // bersihkan cache
        $this->command->call('cache:clear');
    }
}