<?php
/*
 * Author: Raul Perusquia <raul@inikoo.com>
 * Created: Mon, 23 Jan 2023 18:26:14 Malaysia Time, Kuala Lumpur, Malaysia
 * Copyright (c) 2023, Inikoo Ltd
 */

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
/**
 * App\Models\Backend\BackendUser
 *
 * @property int $id
 * @property string $userable_type
 * @property int $userable_id
 * @property string $username
 * @property string $password
 * @property bool $status
 * @property int $language_id
 * @property int $timezone_id
 * @property string|null $email
 * @property array $data
 * @property array $settings
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser newQuery()
 * @method static \Illuminate\Database\Query\Builder|BackendUser onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereTimezoneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereUserableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereUserableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackendUser whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|BackendUser withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BackendUser withoutTrashed()
 * @mixin \Eloquent
 */
class BackendUser extends Authenticatable
{
    use HasApiTokens;
    use SoftDeletes;
    use HasSlug;

    protected $casts = [
        'data'     => 'array',
        'settings' => 'array',
        'status'   => 'boolean'
    ];

    protected $attributes = [
        'data'     => '{}',
        'settings' => '{}',
    ];

    protected $hidden = [
        'password',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('username')
            ->saveSlugsTo('username');
    }

    /**
     * @return string
     * Hack for laravel permissions to work
     */
    public function guardName(): string
    {
        return 'backend';
    }

    protected $guarded = [];
}
