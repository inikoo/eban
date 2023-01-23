<?php
/*
 *  Author: Raul Perusquia <raul@inikoo.com>
 *  Created: Wed, 07 Sept 2022 17:20:22 Malaysia Time, Kuala Lumpur, Malaysia
 *  Copyright (c) 2022, Raul A Perusquia Flores
 */

namespace App\Actions\Backend\BackendUser;

use App\Models\Assets\Language;
use App\Models\Assets\Timezone;
use App\Models\Backend\Admin;
use App\Models\Backend\BackendUser;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreBackendUser
{
    use AsAction;


    public function handle(Admin $userable, array $userData): BackendUser
    {
        if (empty($userData['language_id'])) {
            $language                = Language::where('code', config('app.locale'))->firstOrFail();
            $userData['language_id'] = $language->id;
        }

        if (empty($userData['timezone_id'])) {
            $timezone                = Timezone::where('name', config('app.timezone'))->firstOrFail();
            $userData['timezone_id'] = $timezone->id;
        }

        /** @var BackendUser $BackendUser */
        $BackendUser = $userable->BackendUser()->create($userData);
        return $BackendUser;
    }
}
