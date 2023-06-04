<?php

namespace Database\Seeders;

use App\Models\SubService;
use Illuminate\Database\Seeder;

class SubServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add sub services
        $subServices = [
            [
                'title' => 'Developing Efficient Strategy
                to Reach Your Company’s Target',
                'subtitle' => 'Strategic Plan',
                'image' => '77-testimonial_img.jpg',
                'description' => "We assist and involve your teams to create action plans and the implementation steps required to achieve your company or organizational objectives. We will re-evaluate the strategy based on the following outcomes to optimize the final results.",
                'category' => 'facilitation',
            ],
            [
                'title' => 'Turn Your Team Into A Proficient Problem Solver',
                'subtitle' => 'Problem Solving',
                'image' => '78-testimonial_img.jpg',
                'description' => "We have various methods and approaches to help your teams developing their fundamental thinking of unpuzzling organizational issues and challenges in fun and practical way. We believe that a problem will not be a problem if we see it as a challenge to overcome..",
                'category' => 'facilitation',
            ],
            [
                'title' => 'Workplace Conflict Management For Better Working Environment',
                'subtitle' => 'Workplace Conflict Handling',
                'image' => '79-testimonial_img.jpg',
                'description' => "Conflicts might be inevitable, but are manageable. We have helped hundreds of our clients to solve numerous conflicts among their employees. Our conciliatory approaches are aimed to bring mutual understanding between both parties that resulting to a more peaceful and productive working environment.",
                'category' => 'facilitation',
            ],
            [
                'title' => 'Constructive Behavioral Intervention at Workplace',
                'subtitle' => 'Behavioral System Intervention',
                'image' => '80-testimonial_img.jpg',
                'description' => "Social changes have big potential to affect your employees behavior. For this reason, we are committed to help you determining system interventions that are relatable to the situation and assist your company adapting to the changes that occur.",
                'category' => 'facilitation',
            ],
            [
                'title' => 'Encouraging Approach to Elevate Your Teamwork Productivity',
                'subtitle' => 'Teamwork & Productivity',
                'image' => '39-testimonial_img.jpg',
                'description' => "Teamwork and productivity are two things that are interrelated. Through our learning methods we are dedicated to create experiences that can enhance the synergy between your team members to accomplish the desired productivity.",
                'category' => 'learning',
            ],
            [
                'title' => 'Align Your Employee Focus With Your Company Core Values',
                'subtitle' => 'Value Internalization',
                'image' => '40-testimonial_img.jpg',
                'description' => "Our Value Internalization Program is specifically designed to help internalize your company's values toward each of your employees. We take a personal approach to deliver the understanding of the concepts you want to ingrain.",
                'category' => 'learning',
            ],
            [
                'title' => 'Preparing future Leaders to Empower the Organization with Authenticity.',
                'subtitle' => 'Leadership Development',
                'image' => '41-testimonial_img.jpg',
                'description' => "Administering coaching program that provides opportunities for leaders
                to address specific areas of personal growth. Honing their critical thinking skills and preparing them to unleash their leadership strengths in order to achieve their individual and team goals to conquer the company’s target.",
                'category' => 'learning',
            ],
            [
                'title' => 'Evolving Your New Hires To The Next Level',
                'subtitle' => 'Professional Upgrading',
                'image' => '42-testimonial_img.jpg',
                'description' => "An induction program aimed for equipping new hires with a qualified skill sets to assist them maximizing their potential to become a higher professional level.",
                'category' => 'learning',
            ],
            [
                'title' => 'Preparing Your Valuable Employees to Settle A Secure Retirement',
                'subtitle' => 'Pre-Retirement Program',
                'image' => '43-testimonial_img.jpg',
                'description' => "Ensuring senior employee welfare is one of a company's responsibilities that must be fulfilled. For that purpose, we designed our pre-retirement program to assist them welcoming their joyous retirement days.",
                'category' => 'learning',
            ]
        ];

        foreach ($subServices as $subService) {
            SubService::create($subService);
        }
    }
}
