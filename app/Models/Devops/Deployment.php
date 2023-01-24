<?php
/*
 * Author: Raul Perusquia <raul@inikoo.com>
 * Created: Mon, 23 Jan 2023 17:37:25 Malaysia Time, Kuala Lumpur, Malaysia
 * Copyright (c) 2023, Inikoo Ltd
 */

namespace App\Models\Devops;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Devops\Deployment
 *
 * @method static Builder|Deployment newModelQuery()
 * @method static Builder|Deployment newQuery()
 * @method static Builder|Deployment query()
 * @property int $id
 * @property string $version
 * @property string $hash
 * @property string $state
 * @property array $data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|Deployment whereCreatedAt($value)
 * @method static Builder|Deployment whereData($value)
 * @method static Builder|Deployment whereHash($value)
 * @method static Builder|Deployment whereId($value)
 * @method static Builder|Deployment whereState($value)
 * @method static Builder|Deployment whereUpdatedAt($value)
 * @method static Builder|Deployment whereVersion($value)
 * @mixin \Eloquent
 */
class Deployment extends Model
{
    protected $guarded = [];
    protected $attributes = [
        'data' => '{}',
    ];
    protected $casts = [
        'data' => 'array'
    ];

}
