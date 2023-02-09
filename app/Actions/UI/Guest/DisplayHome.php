<?php
/*
 * Author: Raul Perusquia <raul@inikoo.com>
 * Created: Wed, 11 Jan 2023 14:58:25 Malaysia Time, Kuala Lumpur, Malaysia
 * Copyright (c) 2023, Inikoo Ltd
 */

namespace App\Actions\UI\Guest;

use Inertia\Inertia;
use Inertia\Response;
use Lorisleiva\Actions\Concerns\AsController;

class DisplayHome
{
    use AsController;

    function handle(): Response
    {
        $data = [
            'faqsData' => [
                'questions' => [
                    'first' => [
                        'question' => 'PPC',
                        'answer' => 'As PPC specialists, our proven PPC system allows you to put your products and services in front of your potential customer at the time they are making a buying decision. We work with you to create high performing results-driven campaigns focused on delivering conversions, not just clicks',
                    ],
                    'second' => [
                        'question' => 'SEO',
                        'answer' => 'Improve your business’s visibility within search engines, increase organic traffic to your website and rank for the most valuable keywords. We are the SEO agency that will evolve your search performance and achieve more from your marketing spend.',
                    ],
                    'third' => [
                        'question' => 'Social Media',
                        'answer' => 'Billions of people use social media platforms every day. You have never run Facebook Ads before or just want to get more leads & sales from your social media campaigns, we can help!'
                    ],
                    'fourth' => [
                        'question' => 'Email Marketing',
                        'answer' => 'When done properly, email marketing can make a real difference to sales. Let us help you evolve your automation, design and messaging approach to meet your marketing objectives and build better connections with your audience'
                    ]
                ]
            ],
        ];
        return Inertia::render('UIMarketing/Home', $data);
    }
}

