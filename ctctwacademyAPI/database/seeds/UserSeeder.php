<?php

use App\Exam;
use App\Role;
use App\User;
use App\Admin;
use App\Level;
use App\Topic;
use App\Course;
use App\Comment;
use App\Student;
use App\Subject;
use App\Teacher;
use App\Exercise;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(User::class, 10)->create();
        factory(Role::class, 3)->create();
        factory(Level::class, 6)->create();

        factory(Student::class, 9)->create();
        factory(Teacher::class, 4)->create();
        factory(Admin::class, 2)->create();
        
        factory(Subject::class, 10)->create();
        factory(Topic::class, 30)->create();

        factory(Course::class, 50)->create();
        factory(Exercise::class, 15)->create();
        factory(Comment::class, 10)->create();

        factory(Exam::class, 15)->create();

        
    }
}
