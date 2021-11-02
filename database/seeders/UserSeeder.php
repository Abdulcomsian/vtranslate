<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        User::create(
            [
                'fname' => 'translator1',
                'lname' => 's',
                'email' => 'translator1@gmail.com',
                'username' => 'tst1',
                'email_verified_at' => '2021-07-30',
                'country_id' => '170',
                'user_status' => 'Freelancer',
                'total_profile_section' => 10,
                'password' => bcrypt('translator1'),
            ]
        );
        User::create(
            [
                'fname' => 'translator2',
                'lname' => 's',
                'email' => 'translator2@gmail.com',
                'username' => 'tst2',
                'email_verified_at' => '2021-07-30',
                'country_id' => '170',
                'user_status' => 'Freelancer',
                'total_profile_section' => 10,
                'password' => bcrypt('translator2'),
            ]
        );
        User::create(
            [
                'fname' => 'translator3',
                'lname' => 's',
                'email' => 'translator3@gmail.com',
                'username' => 'tst3',
                'email_verified_at' => '2021-07-30',
                'country_id' => '170',
                'user_status' => 'Freelancer',
                'total_profile_section' => 10,
                'password' => bcrypt('translator3'),
            ]
        );
        User::create(
            [
                'fname' => 'agency1',
                'lname' => 's',
                'email' => 'agency1@gmail.com',
                'username' => 'emp1',
                'email_verified_at' => '2021-07-30',
                'country_id' => '170',
                'user_status' => 'Employer',
                'password' => bcrypt('agency1'),
            ]
        );
        User::create(
            [
                'fname' => 'agency2',
                'lname' => 's',
                'email' => 'agency2@gmail.com',
                'username' => 'emp2',
                'email_verified_at' => '2021-07-30',
                'country_id' => '170',
                'user_status' => 'Employer',
                'password' => bcrypt('agency2'),
            ]
        );
        User::create(
            [
                'fname' => 'agency3',
                'lname' => 's',
                'email' => 'agency3@gmail.com',
                'username' => 'emp3',
                'email_verified_at' => '2021-07-30',
                'country_id' => '170',
                'user_status' => 'Employer',
                'password' => bcrypt('agency3'),
            ]
        );
        User::create(
            [
                'fname' => 'admin',
                'lname' => 'admin',
                'email' => 'admin@gmail.com',
                'username' => 'admin',
                'email_verified_at' => '2021-07-30',
                'country_id' => '170',
                'user_status' => 'Admin',
                'password' => bcrypt('admin123'),
            ]
        );

        // CREATE THE CATEGORIES

        \DB::table('chatter_categories')->delete();

        \DB::table('chatter_categories')->insert([
            0 => [
                'id'         => 1,
                'parent_id'  => null,
                'order'      => 1,
                'name'       => 'Introductions',
                'color'      => '#3498DB',
                'slug'       => 'introductions',
                'created_at' => null,
                'updated_at' => null,
            ],
            1 => [
                'id'         => 2,
                'parent_id'  => null,
                'order'      => 2,
                'name'       => 'General',
                'color'      => '#2ECC71',
                'slug'       => 'general',
                'created_at' => null,
                'updated_at' => null,
            ],
            2 => [
                'id'         => 3,
                'parent_id'  => null,
                'order'      => 3,
                'name'       => 'Feedback',
                'color'      => '#9B59B6',
                'slug'       => 'feedback',
                'created_at' => null,
                'updated_at' => null,
            ],
            3 => [
                'id'         => 4,
                'parent_id'  => null,
                'order'      => 4,
                'name'       => 'Random',
                'color'      => '#E67E22',
                'slug'       => 'random',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
