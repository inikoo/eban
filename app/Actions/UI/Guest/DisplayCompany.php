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

class DisplayCompany
{
    use AsController;

    function handle(): Response
    {
        $data = [
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
            ]
        ];


        return Inertia::render('UIMarketing/Company', $data);

    }
}

