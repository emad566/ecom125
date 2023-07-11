<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Multitenancy\Models\Tenant;

class CustomTenant extends Tenant
{
    use HasFactory;
    protected $table = 'ecom125_landlord.tenants';
    protected $fillable = [
        'name',
        'domain',
        'database',
        'isActive',
    ];
}
