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

class DisplayProducts
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
            ]
        ];

        return Inertia::render('UIMarketing/Products', $data);
    }
}

