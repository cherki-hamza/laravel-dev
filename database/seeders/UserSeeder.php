<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $cities = ['Tanger', 'Tetouan', 'Larache', 'Fes', 'Meknes', 'Casablanca', 'Rabat', 'Marrakech', 'Laayoun', 'Oujda', 'Other'];
        for ($i = 1; $i <= 20; $i++) {
            User::create([
                'name' => $faker->name,
                'prenom' => $faker->lastName,
                'phone_number' => $faker->phoneNumber,
                'city' => $faker->randomElement($cities),
                'BloodGroup' => $faker->randomElement(['A+', 'B+', 'AB+', 'O+', 'A-', 'B-', 'AB-', 'O-']),
                'DateDernierDon' => $faker->date(),
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'),
            ]);
        }
    }
}
