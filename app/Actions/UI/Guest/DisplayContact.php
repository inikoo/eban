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

class DisplayContact{
    use AsController;

    function handle(): Response
    {
        $data = [
            'contactInformationData' => [
                'information' => [
                    'title' => 'Contact information',
                    'paragraph' => 'Authentic, simple and honest. We promise not to blind you with complexity,
                                or employ dodgy technics to make your results look better.',
                    'phoneNumber' => '+1 (555) 123-4567',
                    'email' => 'support@workcation.com'
                ],
                'form' => [
                    'title' => 'Send us a message',
                    'name' => 'First name',
                    'lastName' => 'Last name',
                    'email' => 'Email',
                    'phoneNumber' => 'Phone',
                    'subject' => 'Subject',
                    'message' => 'Message',
                    'maxCharacters' => 'Max. 500 characters',
                ]
            ],
            'subscribeNewsletterData' => [
                'title' => 'Want product news and updates? Sign up for our newsletter.',
                'button' => 'Notify me',
            ],
        ];
        return Inertia::render('UIMarketing/Contact', $data);
    }
}

