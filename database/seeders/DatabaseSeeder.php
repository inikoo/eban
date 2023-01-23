<?php
/*
 * Author: Raul Perusquia <raul@inikoo.com>
 * Created: Mon, 23 Jan 2023 18:52:07 Malaysia Time, Kuala Lumpur, Malaysia
 * Copyright (c) 2023, Inikoo Ltd
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
                        CountrySeeder::class,
                        CurrencySeeder::class,
                        TimezoneSeeder::class,
                        LanguageSeeder::class,
                        PermissionSeeder::class,
                    ]);


    }
}
