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

class DisplayAbout
{
    use AsController;

    function handle(): Response
    {
        $data = [
            'sectionData' => [
                'title' => 'Who We Are',
                'paragraph' => 'Get the AW advantage of over twenty years of experience working with Pay-Per-Click, email marketing and
                SEO. At AW we have pioneered many successful techniques over many years - now you can put them to use in
                your business. Now utilizing the brightest and best university graduates partnered with European
                experts.

                The AW-Advantage team bring you a host of skills to supercharge your retail business. Use our modular
                approach - buy just the services you need - but as you add modules they will work holistically. EG. your
                PPC guy will meet with your Social Media and make a complimentary plan - mutipling results. AW-Advantage
                - team work. The AW-Advatage team is rewarded and motivated by improving your business - helping you
                grow and succeed is our reward.

                Get the AW-Advantage with your account manager based in the UK or Europe and your team of young
                motivated people working from our state of the art offices in Denpasar, Indonesia. Access to all types
                of experts - including Design, PPC, Email Marketing, Social Media and more. AW-Advantage - best of both
                worlds.

                Get the AW-Advantage with your account manager based in the UK or Europe and your team of young
                motivated people working from our state of the art offices in Denpasar, Indonesia. Access to all types
                of experts - including Design, PPC, Email Marketing, Social Media and more. AW-Advantage - best of both
                worlds.',
            ],
            'joinOurTeamData' => [
                'title' => 'Join our team',
                'paragraph' => 'As a member of our team, you will have the opportunity to work on exciting projects,
                                collaborate with talented colleagues, and grow professionally in a dynamic and supportive environment.
                                If you believe that your skills and experience would make a valuable contribution to our efforts, please let us know.',
                'button' => 'Explore open positions'
            ]
        ];

        return Inertia::render('UIMarketing/About', $data);
    }
}

