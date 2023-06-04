<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add project seed
        $projects = [
            [
                'title' => 'Team Building Borobudur Kompas Jurnalis',
                'slug' => 'team-building-borobudur-kompas-jurnalis',
                'description' => "<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in somes form, by injected humour, or randomised words which don't look even slightlcy believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of textss. All the Lorem Ipsum generators on the Internet tend to repeat</p>",
                'image' => '1685859620.jpg',
                'category' => 'Learning',
                'project_date' => '2023-06-04',
                'client' => 'Kompas',
                'participants' => '50 Journalist',
                'goal' => 'Value Internalization',
                'activity' => 'Hiking at Mount Bromo',
                'status' => 1,
            ],
            [
                'title' => 'Team Building Borobudur Kompas Jurnalis',
                'slug' => 'team-building-borobudur-kompas-jurnalis',
                'description' => "<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in somes form, by injected humour, or randomised words which don't look even slightlcy believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of textss. All the Lorem Ipsum generators on the Internet tend to repeat</p>",
                'image' => '16858596201.jpg',
                'category' => 'Facilitation',
                'project_date' => '2023-06-04',
                'client' => 'Kompas',
                'participants' => '50 Journalist',
                'goal' => 'Value Internalization',
                'activity' => 'Hiking at Mount Bromo',
                'status' => 1,
            ]
        ];

        foreach ($projects as $project) {
            \App\Models\Project::create($project);
        }
    }
}
