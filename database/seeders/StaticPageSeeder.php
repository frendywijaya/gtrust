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
                    "about_title" => "We build professionals to uplift your business",
                    "about_subtitle" => "About G-Trust",
                    "about_text" => "GTrust offers tailor-made professional development programs for individuals or teams to aligned with your strategic goals. We established fun environment as an essential element to dig up creative solutions for your company’s objectives.",
                    "about_button_text" => "Learn More",
                    "about_button_link" => "/about",
                    "about_image_text_1" => "18 Years",
                    "about_image_text_2" => "Experience",
                    "service_section_title" => 'Our Services Includes:',
                    "service_section_subtitle" => 'Explore Our Services',
                    "service_facilitation_headline" => "Optimizing Company’s Meeting for Superlative Outcome",
                    "service_facilitation_text" => "We handle every task and material needed to organize an effective meeting for multipurpose goals and favorable outcome.",
                    "service_facilitation_button_text" => "Read More",
                    "service_facilitation_button_link" => "/services/facilitation",
                    "service_learning_headline" => "Professional Learning To Empower Your Team’s Growth",
                    "service_learning_text" => "Take your team’s skills to the next level with our experience-based learning program that will prepare them to solve factual case within your workplace.",
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
                    "footer_text" => "We are G-Trust, We develop qualified professionals to help you  accomplish your company’s objectives through fun and creative learning methods.",
                    "footer_tagline" => "We deliver fun ways to tackle serious issues",
                    "footer_logo" => "1685284018-w_logo.png"
                ]
            ],
            [
                'section' => 'socialmedia',
                'data' => [
                    "facebook" => "#",
                    "instagram" => null,
                    "linkedin" => null,
                    "youtube" => null,
                    "tiktok" => null
                ]
            ],
            [
                'section' => 'aboutstatic',
                'data' => [
                    "breadcrumb_title" => "About Us",
                    "about_company_title" => "We’re Committed to Deliver Perfection",
                    "about_company_section_subtitle" => "We’re Committed to Deliver Perfection",
                    "about_company_section_text" => "There are many variations of passages of Lorem Ipsum available, but the majori have suffered alteration in some form, by injected humour, or randomised word which don't look even slightly believable.",
                    "about_company_image_text_1" => "We have more than 10 years of experiences",
                    "about_company_image_text_2" => "We use professional and experienced person",
                    "approaches_title_1" => "Plan for Session",
                    "approaches_text_1" => "Suffered alteration in some a form, by injected humour, or randomised word",
                    "approaches_title_2" => "Schedule Estimate",
                    "approaches_text_2" => "Suffered alteration in some a form, by injected humour, or randomised word",
                    "approaches_title_3" => "Install New Consulting",
                    "approaches_text_3" => "Suffered alteration in some a form, by injected humour, or randomised word",
                    "approaches_title_4" => "Event Delivery",
                    "approaches_text_4" => "Suffered alteration in some a form, by injected humour, or randomised word",
                    "history_section_title" => "Consulting when an unknown printer took to make type book",
                    "history_section_subtitle" => "Our Consulting History",
                    "history_section_text" => "Our Consulting History",
                    "history_video_link" => "#",
                    "our_team_section_title" => "Professional Team Member",
                    "our_team_section_subtitle" => "Professional Team",
                    "testimonials_section_title" => "Our Testimonial",
                    "testimonials_section_subtitle" => "What Our Client Say",
                    "breadcrumb_cover_image" => "1685284411-breadcrumb_bg.jpg",
                    "about_company_image_1" => "1685284411-about_icon01.svg",
                    "about_company_image_2" => "1685284411-about_icon02.svg",
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
                    "about_section_title" => "Motivate Your Company to Achieve Brighter Outcome",
                    "about_section_subtitle" => "Strategic Facilitation",
                    "about_section_text" => "We are specialized in delivering creative and fun methods to elevate your team’s collaborative spirit. The aim is to build deep interactions between team members that will lead to excellent outcomes.",
                    "about_section_text_1" => "18 Years of Facilitation Across Large Area of Business",
                    "about_section_text_2" => "Trusted by Big Companies and Platform Nationwide",
                    "process_title_1" => "Plan for Session",
                    "process_text_1" => "Suffered alteration in some a form, by injected humour, or randomised word",
                    "process_title_2" => "Schedule Estimate",
                    "process_text_2" => "Suffered alteration in some a form, by injected humour, or randomised word",
                    "process_title_3" => "Install New Consulting",
                    "process_text_3" => "Suffered alteration in some a form, by injected humour, or randomised word",
                    "process_title_4" => "Event Delivery",
                    "process_text_4" => "Suffered alteration in some a form, by injected humour, or randomised word",
                    "method_title_1" => "Quick Response",
                    "method_text_1" => "There are many variations of passages Ipsum available but the",
                    "method_title_2" => "Quick Response",
                    "method_text_2" => "There are many variations of passages Ipsum available but the",
                    "method_title_3" => "Quick Response",
                    "method_text_3" => "There are many variations of passages Ipsum available but the",
                    "breadcrumb_cover_image" => "1685285019-breadcrumb_bg.jpg",
                    "about_facilitation_image_cover" => "1685285019-testimonial_img.jpg",
                    "process_slot_1" => "1685285096-work_img01.png",
                    "process_slot_2" => "1685285096-work_img01.png",
                    "process_slot_3" => "1685285096-work_img01.png",
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
                    "section_title" => "Tell Us Your Problem To Us",
                    "section_text" => "Sit amet consectetur adipiscing elseds do eius mod tempor incididunt",
                    "button_text" => "Contact Us",
                    "button_link" => "#",
                    "backround_image" => "1685286904-history_img01.jpg"
                ]
            ],
            [
                'section' => 'servicelearning',
                'data' => [
                    "breadcrum_title" => "Service Details",
                    "about_section_title" => "Elevate Your Team To Higher Level",
                    "about_section_subtitle" => "Team Learning",
                    "about_section_text" => "There are many variations of passages of Lorem Ipsum available, but the majori have suffered alteration in some form, by injected humour, or randomised word which don't look even slightly believable.",
                    "about_section_text_1" => "We have more than 10 years of experiences",
                    "about_section_text_2" => "We use professional and experienced person",
                    "process_title_1" => "Plan for Session",
                    "process_text_1" => "Suffered alteration in some a form, by injected humour, or randomised word",
                    "process_title_2" => "Schedule Estimate",
                    "process_text_2" => "Suffered alteration in some a form, by injected humour, or randomised word",
                    "process_title_3" => "Install New Consulting",
                    "process_text_3" => "Suffered alteration in some a form, by injected humour, or randomised word",
                    "process_title_4" => "Event Delivery",
                    "process_text_4" => "Suffered alteration in some a form, by injected humour, or randomised word",
                    "method_title_1" => "Quick Response",
                    "method_text_1" => "There are many variations of passages Ipsum available but the",
                    "method_title_2" => "Quick Response",
                    "method_text_2" => "There are many variations of passages Ipsum available but the",
                    "method_title_3" => "Quick Response",
                    "method_text_3" => "There are many variations of passages Ipsum available but the",
                    "breadcrumb_cover_image" => "1685287651-breadcrumb_bg.jpg",
                    "about_learning_image_cover" => "1685287651-testimonial_img.jpg",
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
                    "left_section_text" => "Send us a message and we' ll respond as soon as possible",
                    "left_button_text" => "Send Message",
                    "right_section_title" => "Need Any Help?",
                    "right_section_text" => "Call us or message and we' ll respond as soon as possible",
                    "right_section_link" => "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.430528228668!2d106.9531491!3d-6.380106!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69950b11849ac1%3A0xd23d71163a5944ff!2sG-Trust%20Learning!5e0!3m2!1sen!2sid!4v1681966708924!5m2!1sen!2sid",
                    "breadcrumb_cover_image" => "1685287888-breadcrumb_bg.jpg"
                ]
            ],
            [
                'section' => 'contactinfo',
                'data' => [
                    "company_phone" => "+62 81231313",
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
