<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
           //CoursesTableSeeder::class,
           //StatusesTableSeeder::class,
           //WeekdaysTableSeeder::class,
           //GendersTableSeeder::class,

           //RolesTableSeeder::class,
           //UsersTableSeeder::class,

           //OrganisationsTableSeeder::class,

           //AssociationsTableSeeder::class,

           //TeachersTableSeeder::class,
           //SchedulesTableSeeder::class,

           //StudentsTableSeeder::class,
           //StatusStudentSeeder::class,
           //InvolvementsTableSeeder::class,

           HomeworkSeeder::class,
           EventsTableSeeder::class,
           AttendancesTableSeeder::class,
        ]);
    }
}
