<?php

namespace Database\Seeders;

use App\Models\StaticPage;
use Illuminate\Database\Seeder;

class StaticPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add static pages
        $staticPages = [
            [
                'section' => 'header',
                'data' => [
                    "welcome_text" => "Welcome to Gtrust",
                    "button_text" => "Get a Quote",
                    "button_link" => "/kontak",
                    "company_logo" => "1685280156-logo_02.png"
                ]
            ],
            [
                'section' => 'homestatic',
                'data' => [
                    "about_title" => "Strengthening Your Business Through Strategic Behavioral Encouragement",
                    "about_subtitle" => "About G-Trust",
                    "about_text" => "GTrust offers tailor-made professional development programs for individuals or teams to aligned with your strategic goals. We established fun environment as an essential element to dig up creative solutions for your company’s objectives.",
                    "about_button_text" => "Learn More",
                    "about_button_link" => "/about",
                    "about_image_text_1" => "18 Years",
                    "about_image_text_2" => "Experience",
                    "service_section_title" => 'Our Services Includes:',
                    "service_section_subtitle" => 'Explore Our Services',
                    "service_facilitation_headline" => "Optimizing Company’s Meeting for Superlative Outcome",
                    "service_facilitation_text" => "<p>We handle every task and material needed to organize an effective meeting for multipurpose goals and favorable outcome.</p><ul><li>Strategic Plan</li><li>Workplace Conflict</li><li>Problem Solving</li><li>Behavioral System Intervention</li></ul>",
                    "service_facilitation_button_text" => "Read More",
                    "service_facilitation_button_link" => "/services/facilitation",
                    "service_learning_headline" => "Professional Learning To Empower Your Team’s Growth",
                    "service_learning_text" => "<p>Take your team’s skills to the next level with our experience-based learning program that will prepare them to solve factual case within your workplace.</p><ul><li>Teamwork &amp; Productivity</li><li>Professional Upgrading</li><li>Value Internalization</li><li>Pre-Retirement Program</li><li>Leadership Development</li></ul>",
                    "service_learning_button_text" => "Read More",
                    "service_learning_button_link" => "/services/learning",
                    "statistic_number_1" => "1500",
                    "statistic_text_1" => "Project Complete",
                    "statistic_number_2" => "8562",
                    "statistic_text_2" => "Satisfied Clients",
                    "statistic_number_3" => "450",
                    "statistic_text_3" => "Experienced Staff",
                    "statistic_number_4" => "38",
                    "statistic_text_4" => "Awards Win",
                    "contact_title" => "LET’S GET IN TOUCH",
                    "contact_subtitle" => "We’re ready to help,",
                    "contact_button_text" => "Contact Us",
                    "contact_button_link" => "#",
                    "about_image_1" => "1685283370-h2_about_img01.jpg",
                    "about_image_2" => "1685283383-h2_about_img02.jpg",
                    "about_image_3" => "1685283383-h2_about_img03.jpg",
                    "service_facilitation_image" => "1685283792-h4_services_img01.jpg",
                    "service_learning_image" => "1685283792-h4_services_img02.jpg"
                ]
            ],
            [
                'section' => 'footer',
                'data' => [
                    "footer_title" => "About Us",
                    "footer_text" => "We are G-Trust, We help you accomplish your company objectives through fun and innovative methods.",
                    "footer_tagline" => "We deliver fun ways to tackle serious issues",
                    "footer_logo" => "1685284018-w_logo.png"
                ]
            ],
            [
                'section' => 'socialmedia',
                'data' => [
                    "facebook" => "https://www.facebook.com/G-Trust-Consultant-110804466954744%20",
                    "instagram" => "https://www.instagram.com/gtrust.learning/",
                    "linkedin" => "https://www.linkedin.com/company/26625479/admin/?welcome=true",
                    "youtube" => null,
                    "tiktok" => null
                ]
            ],
            [
                'section' => 'aboutstatic',
                'data' => [
                    "breadcrumb_title" => "About Us",
                    "about_company_title" => "We build professionals to uplift your business",
                    "about_company_section_subtitle" => "About G-Trust",
                    "about_company_section_text" => "<p>G-Trust offers tailor-made professional development programs for individuals or teams to aligned with your strategic goals. We established fun environment as an essential element to dig up creative solutions for your company’s objectives.</p><ul><li>Developing future-proofed skills based on life values</li><li>Collaborative work for organizational scaffolding</li><li>Practising experiential learning approach as the mainstream method</li></ul>",
                    "about_company_image_text_1" => "more than 10 years of delivering Solutions with Excellence",
                    "about_company_image_text_2" => "Assisting you with Our Team of Experts",
                    "approaches_title_1" => "Need Analysis",
                    "approaches_text_1" => "Analyze the issues to define  the most eligible solutions for your needs.",
                    "approaches_title_2" => "Design & Development",
                    "approaches_text_2" => "Providing the concept and tools required to optimize the process.",
                    "approaches_title_3" => "Implementation",
                    "approaches_text_3" => "Apply the action following designed plan in order to develop the best results.",
                    "approaches_title_4" => "Evaluation",
                    "approaches_text_4" => "Reanalyze the outcome from the previous process to prepare for next action.",
                    "history_section_title" => "18 Years of Delivering Excellent Solutions for Professional Growth",
                    "history_section_subtitle" => "Our Consulting History",
                    "history_section_text" => "<p>G-Trust use experience-based learning as a basic approach in designing programs. Throughout the learning cycle, our team will facilitate participants to reflect on their experiences to grasp concept and insights that is applicable to be implemented in their everyday situation.</p><p>Our Way of Learning :&nbsp;</p><p><strong>FUN</strong> Creating fun environment to tackle serious issues</p><p><strong>REFLECTIVE</strong> Creating experiences that metaphor the real workplace situations.<br><br><strong>SELF AWARE&nbsp;</strong>Make employees aware of their potential to flourish&nbsp;</p>",
                    "history_video_link" => "#",
                    "our_team_section_title" => "Professional Team Member",
                    "our_team_section_subtitle" => "MEET OUR EXPERTS",
                    "testimonials_section_title" => "WHAT OUR CLIENT SAY",
                    "testimonials_section_subtitle" => "Client Testimonials",
                    "breadcrumb_cover_image" => "1685284411-breadcrumb_bg.jpg",
                    "about_company_image_1" => "1685864538-about_img01.jpg",
                    "about_company_image_2" => "1685864538-about_img02.jpg",
                    "approaches_slot_1" => "1685284411-work_img01.png",
                    "approaches_slot_2" => "1685284411-work_img01.png",
                    "approaches_slot_3" => "1685284411-work_img01.png",
                    "approaches_slot_4" => "1685284411-work_img01.png",
                    "history_video_cover_image" => "1685284691-history_img02.jpg",
                    "history_image_large" => "1685284691-history_img01.jpg",
                    "history_image_small" => "1685284691-history_img03.jpg"
                ]
            ],
            [
                'section' => 'servicefacilitation',
                'data' => [
                    "breadcrum_title" => "Strategic Facilitation",
                    "about_section_title" => "Assisting Your Company to
                    Obtain Excellent Outcome",
                    "about_section_subtitle" => "Strategic Facilitation",
                    "about_section_text" => "We are specialized in delivering creative and fun methods to elevate your team’s collaborative spirit. The aim is to build deep interactions between team members that will lead to excellent outcomes.",
                    "about_section_text_1" => "Experienced in facilitating large area of business",
                    "about_section_text_2" => "Experienced team to optimize your meeting",
                    "process_title_1" => "Need Analysis",
                    "process_text_1" => "Analyze the issues to define  the most eligible solutions for your needs.",
                    "process_title_2" => "Design & Development",
                    "process_text_2" => "Providing the concept and tools required to optimize the process.",
                    "process_title_3" => "Implementation",
                    "process_text_3" => "Apply the action following the plan in order to develop the best results.",
                    "process_title_4" => "Evaluation",
                    "process_text_4" => "Reanalyze the outcome from the previous process to improve the next action.",
                    "method_title_1" => "Virtual Interactive Workshop",
                    "method_text_1" => "Conducting online workshops that stimulate participant collaborative involvement",
                    "method_title_2" => "LMS-Based Online Courses",
                    "method_text_2" => "Feeding your team with latest industrial competency-based learning management system.",
                    "method_title_3" => "Engaging Experiential Learning",
                    "method_text_3" => "Experienceable learning journey for your team that reflecting to related cases on your workplace",
                    "breadcrumb_cover_image" => "1685285019-breadcrumb_bg.jpg",
                    "about_service_image_cover" => "1685285019-testimonial_img.jpg",
                    "process_slot_1" => "1685285096-work_img01.png",
                    "process_slot_2" => "1685285096-work_img02.png",
                    "process_slot_3" => "1685285096-work_img03.png",
                    "process_slot_4" => "1685285096-work_img04.png",
                    "method_slot_1" => "1685286828-about_icon01.svg",
                    "method_slot_2" => "1685286828-about_icon02.svg",
                    "method_slot_3" => "1685286828-about_icon01.svg",
                    "download_icon_1" => "fas fa-cloud-download-alt",
                    "download_icon_2" => "fas fa-file-pdf"
                ]
            ],
            [
                'section' => 'contactwidget',
                'data' => [
                    "section_title" => "Consult now!",
                    "section_text" => "We will be highly delighted to assist you finding the best solutions for your company.",
                    "button_text" => "Contact Us",
                    "button_link" => "#",
                    "backround_image" => "1685286904-history_img01.jpg"
                ]
            ],
            [
                'section' => 'servicelearning',
                'data' => [
                    "breadcrum_title" => "PROFESSIONAL LEARNING",
                    "about_section_title" => "Professional Learning Program with Measurable Result",
                    "about_section_subtitle" => "Professional Learning",
                    "about_section_text" => "We provide professional learning methods that prioritize the involvement of your team to present significant results for the development of your team.",
                    "about_section_text_1" => "Proven Experience-based learning methods",
                    "about_section_text_2" => "Various Industrial Expertise Tutor",
                    "process_title_1" => "Plan for Session",
                    "process_title_1" => "Need Analysis",
                    "process_text_1" => "Analyze the issues to define  the most eligible solutions for your needs.",
                    "process_title_2" => "Design & Development",
                    "process_text_2" => "Providing the concept and tools required to optimize the process.",
                    "process_title_3" => "Implementation",
                    "process_text_3" => "Apply the action following the plan in order to develop the best results.",
                    "process_title_4" => "Evaluation",
                    "process_text_4" => "Reanalyze the outcome from the previous process to improve the next action.",
                    "method_text_1" => "Conducting online workshops that stimulate participant collaborative involvement",
                    "method_title_2" => "LMS-Based Online Courses",
                    "method_text_2" => "Feeding your team with latest industrial competency-based learning management system.",
                    "method_title_3" => "Engaging Experiential Learning",
                    "method_text_3" => "Experienceable learning journey for your team that reflecting to related cases on your workplace",
                    "breadcrumb_cover_image" => "1685287651-breadcrumb_bg.jpg",
                    "about_service_image_cover" => "1685287651-testimonial_img.jpg",
                    "process_slot_1" => "1685287651-work_img01.png",
                    "process_slot_2" => "1685287651-work_img01.png",
                    "process_slot_3" => "1685287651-work_img01.png",
                    "process_slot_4" => "1685287651-work_img01.png",
                    "method_slot_1" => "1685287706-about_icon01.svg",
                    "method_slot_2" => "1685287706-about_icon02.svg",
                    "method_slot_3" => "1685287706-about_icon01.svg",
                    "download_icon_1" => "fas fa-cloud-download-alt",
                    "download_icon_2" => "fas fa-file-pdf"
                ]
            ],
            [
                'section' => 'contactstatic',
                'data' => [
                    "breadcrumb_title" => "Contact Us",
                    "left_section_title" => "Reach Us",
                    "left_section_text" => "Tell us what you need",
                    "left_button_text" => "Send Message",
                    "right_section_title" => "Need Consultation?",
                    "right_section_text" => "We will be at your service",
                    "right_section_link" => "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.430528228668!2d106.9531491!3d-6.380106!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69950b11849ac1%3A0xd23d71163a5944ff!2sG-Trust%20Learning!5e0!3m2!1sen!2sid!4v1681966708924!5m2!1sen!2sid",
                    "breadcrumb_cover_image" => "1685287888-breadcrumb_bg.jpg"
                ]
            ],
            [
                'section' => 'contactinfo',
                'data' => [
                    "company_phone" => "+62 811 9515 079",
                    "company_email" => "info@gtrust.id",
                    "company_address" => "Jln. Pahlawan 1 No.30 Jakarta"
                ]
            ]

        ];

        foreach ($staticPages as $staticPage) {
            $section = $staticPage['section'];
            $data = json_encode($staticPage['data']);

            StaticPage::create([
                'section' => $section,
                'data' => $data
            ]);
        }
    }
}
