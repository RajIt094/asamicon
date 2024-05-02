<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'contact',
        'whatsapp_number',
        'address',
        'state',
        'county',
        'date',
        'asami_type',
         'company_person',
        'category_id',

        'month_type',
        'types1',
        'amount_fast',
        'monthtypes',
        'residential_type',
        'residential_price',
        'category_type2',
        'month_types2',

        'conftypes2',
        'amount_thrid',
        'amount',
        'accommodation_type',
        'accompanying_person',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

}
