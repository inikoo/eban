<?php
/*
 *  Author: Raul Perusquia <raul@inikoo.com>
 *  Created: Thu, 22 Sept 2022 12:51:35 Malaysia Time, Kuala Lumpur, Malaysia
 *  Copyright (c) 2022, Raul A Perusquia Flores
 */

namespace App\Actions\Backend\Admin;


use App\Models\Backend\Admin;
use Lorisleiva\Actions\Concerns\AsAction;


class StoreAdmin
{
    use AsAction;

    public function handle(array $modelData): Admin
    {
        return Admin::create($modelData);
    }
}
