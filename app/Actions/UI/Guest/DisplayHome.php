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
                'title' => 'this data is different',
                'titleH2' => 'Hello',
                'paragraph' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha si',
                'button' => 'Hello'
            ],
            'faqsData' => [
                'questions' => [
                    'first' => [
                        'question' => 'this questions are different',
                        'answer' => 17
                    ],
                    'second' => [
                        'question' => 'hi',
                        'answer' => 'Malaga',
                    ],
                    'third' => [
                        'question' => '?',
                        'answer' => 'this questions are different'
                    ],
                    'fourth' => [
                        'question' => 'this questions are different',
                        'answer' => 'the one that is already prepared'
                    ]
                ]
            ],
            'homeSloganData' => [
                'title' => 'Hello',
                'titleSpan' => 'Hello2',
                'paragraph' => "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original.",
                'buttonLeft' => "button1",
                'buttonRight' => "button2",
            ],
            'pricingData' => [
                'title' => 'the title',
                'paragraph' => 'Paragraph',
                'paragraphTwo' => 'paragraphTwo',
                'plans' => [
                    'economic' => [
                        'name' => 'Name',
                        'price' => 30,
                        'duration' => '/month',
                        'button' => 'Nice to meet click right now',
                        'featuresEconomic' => [
                            'Pariatur quod simix11lique',
                            'Sapiente libero doloribus',
                            'Vel ipsa esse repudiandae'
                        ]
                    ],
                    'medium' => [
                        'name' => 'hello',
                        'price' => 30,
                        'duration' => '/month',
                        'button' => 'Nice to meet click right now',
                        'featuresMedium' => [
                            'Quia rem est sed impedit magnam',
                            'Dolorem vero ratione voluptates',
                            'Qui sed ab doloribus voluptatem dolore',
                            'Laborum commodi molestiae id et fugiat',
                            'Nam ut ipsa nesciunt culpa modi dolor',
                        ]
                    ],
                    'expensive' => [
                        'name' => 'Name',
                        'price' => 30,
                        'duration' => '/month',
                        'button' => 'Nice to meet click right now',
                    ]
                ]
            ],
            'statsData' => [
                'title' => 'the title',
                'paragraph' => 'Paragraph',
                'stats' => [
                    'first' => [
                        'id' => 1,
                        'stat' => '8K+',
                        'emphasis' => 'Companies',
                        'rest' => 'use laoreet amet lacus nibh integer quis.'
                    ],
                    'second' => [
                        'id' => 2,
                        'stat' => '25K+',
                        'emphasis' => 'Countries around the globe',
                        'rest' => 'lacus nibh integer quis.'
                    ],
                    'third' => [
                        'id' => 3,
                        'stat' => '98%',
                        'emphasis' => 'Customer satisfaction',
                        'rest' => 'laoreet amet lacus nibh integer quis.'
                    ],
                    'fourth' => [
                        'id' => 4,
                        'stat' => '12M+',
                        'emphasis' => 'Issues resolved',
                        'rest' => 'lacus nibh integer quis.'
                    ]
                ]
            ],
            'featuresData' => [
                'title' => "Hello",
                'features' => [
                    [
                        'name' => 'Competitive exchange rates',
                        'description' =>
                            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.',
                        'icon' => 'GlobeAltIcon',
                    ],
                    [
                        'name' => 'No hidden fees',
                        'description' =>
                            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.',
                        'icon' => 'ScaleIcon',
                    ],
                    [
                        'name' => 'Transfers are instant',
                        'description' =>
                            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.',
                        'icon' => 'BoltIcon',
                    ],
                    [
                        'name' => 'Mobile X',
                        'description' =>
                            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.',
                        'icon' => 'DevicePhoneMobileIcon',
                    ]
                ]
            ],
            'testimonialData' => [
                'people' => [
                    'first' => [
                        'paragraph' => 'lorem oifmweifnweiufbwebfweu fhweui huiowfoiuwebnf wei fnwi e fnwien fw',
                        'name' => 'john',
                        'jobPosition' => 'CTO'
                    ],
                    'second' => [
                        'paragraph' => 'lorem oifmweifnweiufbwebfweu fhweui huiowfoiuwebnf wei fnwi e fnwien fw',
                        'name' => 'john',
                        'jobPosition' => 'CTO'
                    ]
                ]
            ]
        ];
        return Inertia::render('UIMarketing/Home', $data);
    }
}

