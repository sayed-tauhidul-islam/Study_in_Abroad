<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'How do I choose the right university for me?',
                'answer' => 'We help you evaluate universities based on your academic profile, career goals, budget, and personal preferences. Our AI-powered matching system considers factors like acceptance rates, program quality, location, and cost of living to recommend the best options for you.',
                'icon' => '❓',
                'bg_color' => '#f9fafb', // gray-50
                'border_color' => '#10b981', // emerald-500
                'order' => 1,
                'is_active' => true
            ],
            [
                'question' => 'What scholarships am I eligible for?',
                'answer' => 'We maintain a comprehensive database of scholarships from universities, governments, and private organizations. Our team helps identify scholarships based on your nationality, field of study, academic merit, and financial need, potentially saving you thousands of dollars.',
                'icon' => '💰',
                'bg_color' => '#f9fafb',
                'border_color' => '#10b981',
                'order' => 2,
                'is_active' => true
            ],
            [
                'question' => 'What documents do I need for my application?',
                'answer' => 'Required documents typically include academic transcripts, standardized test scores (TOEFL/IELTS, GRE/GMAT), letters of recommendation, personal statement, and financial statements. We provide detailed checklists and guidance for each document.',
                'icon' => '📋',
                'bg_color' => '#f9fafb',
                'border_color' => '#10b981',
                'order' => 3,
                'is_active' => true
            ],
            [
                'question' => 'How long does the visa process take?',
                'answer' => 'Visa processing times vary by country and visa type, typically ranging from 2-12 weeks. We help you prepare all required documents, schedule appointments, and provide tips to increase your approval chances. Most students receive their visas within 4-6 weeks.',
                'icon' => '🛂',
                'bg_color' => '#f9fafb',
                'border_color' => '#10b981',
                'order' => 4,
                'is_active' => true
            ],
        ];

        foreach ($faqs as $faq) {
            \App\Models\Faq::create($faq);
        }
    }
}
