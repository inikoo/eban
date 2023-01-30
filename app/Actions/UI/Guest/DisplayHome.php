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
            'ctaData' => [
                'title' => 'Do you need more information?',
                'titleH2' => 'Hello',
                'paragraph' => 'Click on the button now and setup a meeting with one of our experts',
                'button' => 'Increase your sales!'
            ],
            'faqsData' => [
                'questions' => [
                    'first' => [
                        'question' => 'Can I cancel my subscription?',
                        'answer' => 'Yes, you can cancel at any time, we will refund the rest of the month to your payment method'
                    ],
                    'second' => [
                        'question' => 'Is there any demo to try the products?',
                        'answer' => 'Of course! in fact, you can use it for free for 1 week',
                    ],
                    'third' => [
                        'question' => 'What if I have a problem with one of the services?',
                        'answer' => 'We have a 24h life chat for our customers in case they need it'
                    ],
                    'fourth' => [
                        'question' => 'What if you change the prizes?',
                        'answer' => 'Prizes only will affect to new customers, if you are with us before the change, we will maintain your the same prize you were paying!'
                    ]
                ]
            ],
            'homeSloganData' => [
                'title' => 'Aw',
                'titleSpan' => 'Advantage',
                'paragraph' => "Digital marketing services help business succeed by leveraging cutting-edge technologies and proven strategies to reach your target audience and achieve your marketing goals. Whether you are looking to increase website traffic, generate leads, or build your brand, our team of experts has the skills and experience to help you succeed.",
                'buttonLeft' => "Products",
                'buttonRight' => "Our history",
            ],
            'pricingData' => [
                'paragraph' => 'Prizes',
                'paragraphTwo' => 'Check our different packages',
                'plans' => [
                    'economic' => [
                        'name' => 'Basic',
                        'price' => 99,
                        'duration' => '/month',
                        'button' => 'I want it',
                        'featuresEconomic' => [
                            'Bannersnack',
                            'Monthly Seo',
                            'Website maintain'
                        ]
                    ],
                    'medium' => [
                        'name' => 'Standard',
                        'price' => 299,
                        'duration' => '/month',
                        'button' => 'I want it',
                        'featuresMedium' => [
                            'Bannersnack',
                            'Monthly Seo',
                            'Website maintain',
                            'Ads strategy',
                            'Email marketing',
                        ]
                    ],
                    'expensive' => [
                        'name' => 'Advanced',
                        'price' => 499,
                        'duration' => '/month',
                        'button' => 'Nice to meet click right now',
                        'featuresExpensive' => [
                            'All the features mentioned before.',
                            'Creating your website',
                        ]
                    ]
                ]
            ],
            'statsData' => [
                'title' => 'More than 5 years helping business',
                'paragraph' => 'Our metrics:',
                'stats' => [
                    'first' => [
                        'id' => 1,
                        'stat' => '+500 Companies',
                      /*  'emphasis' => 'Companies', */
                        'rest' => 'Trusted us in the last 5 years'
                    ],
                    'second' => [
                        'id' => 2,
                        'stat' => '25 Countries',
                        'emphasis' => 'around the globe',
                       /* 'rest' => 'lacus nibh integer quis.' */
                    ],
                    'third' => [
                        'id' => 3,
                        'stat' => '99%',
                        'emphasis' => 'Customer satisfaction',
                      /*  'rest' => 'laoreet amet lacus nibh integer quis.'*/
                    ],
                    'fourth' => [
                        'id' => 4,
                        'stat' => '+1000M of revenue',
                        'emphasis' => 'For our customer',
                        'rest' => 'using our services'
                    ]
                ]
            ],
            'featuresData' => [
                'title' => "Our Products",
                'paragraph' => 'Are you looking to increase your online visibility, reach new customers, and grow your business? Look no further! AW-Advantage offers a full suite of digital marketing services that can help you achieve your marketing goals.',
                'features' => [
                    [
                        'name' => 'Seo',
                        'description' =>
                            'Reach your customers organically, get positioned on the browsers and increase your sales.',
                        'icon' => 'GlobeAltIcon',
                    ],
                    [
                        'name' => 'Ads',
                        'description' =>
                            'Design, planning, performance. Our experts will create the perfect strategy for your business.',
                        'icon' => 'ScaleIcon',
                    ],
                    [
                        'name' => 'Bannersnack',
                        'description' =>
                            'No time to waste. Automatize your banners using our tools.',
                        'icon' => 'BoltIcon',
                    ],
                    [
                        'name' => 'Email Marketing',
                        'description' =>
                            'Keep your customers updated with your offers and convert them in revenue',
                        'icon' => 'DevicePhoneMobileIcon',
                    ]
                ]
            ],
            'testimonialData' => [
                'people' => [
                    'first' => [
                        'paragraph' => 'Me and my team had a hard moments during the pandemic time, I am happy to say that after one year working with AW Advantage, the company got sales again',
                        'name' => 'Beatriz',
                        'jobPosition' => 'CTO of Innovation Company'
                    ],
                    'second' => [
                        'paragraph' => 'The team designed a strategy with the goals we had, they created for us the path to follow to achieve them',
                        'name' => 'john',
                        'jobPosition' => 'Co-founder of DigitalSolutions Company'
                    ]
                ]
            ]
        ];
        return Inertia::render('UIMarketing/Home', $data);
    }
}

