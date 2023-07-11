<?php
// namespace Spatie\Multitenancy\TenantFinder;
namespace App\Models;

use Illuminate\Http\Request;
use Spatie\Multitenancy\Models\Concerns\UsesTenantModel;
use Spatie\Multitenancy\Models\Tenant;

class CustomDomainTenantFinder
{
    use UsesTenantModel;

    public function findForRequest(Request $request):?Tenant
    {
        $tenant = $this->getTenantModel()::where('name', $request->header('customer'))->first();
        if($tenant) return $tenant;
        $tenant = $this->getTenantModel()::where('isActive', 0)->first();
        if($tenant) return $tenant;
        return null;

        // $host = $request->getHost();

        // return $this->getTenantModel()::whereDomain($host)->first();
    }


}
