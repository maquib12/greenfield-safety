<?php

namespace Database\Seeders;

use App\Data\CourseData;
use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        foreach (CourseData::all() as $slug => $course) {

            Course::updateOrCreate(
                [
                    'slug' => $slug,
                ],
                [
                    'title' => $course['title'],
                    'short_title' => $course['short_title'],
                    'category' => 'Health & Safety',
                    'overview' => $course['overview'],
                    'description' => $course['description'],
                    'topics' => $course['topics'],
                    'audience' => $course['audience'],
                ]
            );
        }
    }
}