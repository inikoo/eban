<?php
/*
 *  Author: Raul Perusquia <raul@inikoo.com>
 *  Created: Thu, 26 Aug 2021 04:30:57 Malaysia Time, Kuala Lumpur, Malaysia
 *  Copyright (c) 2021, Inikoo
 *  Version 4.0
 */

namespace Database\Seeders;

use App\Models\Assets\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api.poeditor.com/v2/languages/available");
        curl_setopt($ch, CURLOPT_POSTFIELDS, [
            'api_token' => config('app.po_editor_api_key'),
        ]);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = json_decode(curl_exec($ch));
        curl_close($ch);


        $validLanguages=['en','es','sk','zh-CN'];

        foreach ($response->result->languages as $language) {
            Language::upsert([
                                     [
                                         'code' => $language->code,
                                         'name' => $language->name,
                                         'status'=>in_array($language->code,$validLanguages),
                                         'data' => json_encode([])
                                     ],
                                 ],
                                 ['code'],
                                 ['name']
            );
        }
    }

}
