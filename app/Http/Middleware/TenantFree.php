<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Api\BaseApiController;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\returnSelf;

class TenantFree extends BaseApiController
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $responseError = BaseApiController::sendResponse(false, [], 'No tenant, Sorry not allowed access now.');
        try {
            if(!app('currentTenant')) return $responseError;
            if(app('currentTenant')->isActive == 0) return  $next($request);
            return BaseApiController::sendResponse(false, [app('currentTenant')], 'This tenant is active , Sorry not allowed access now.');
        } catch (\Throwable $th) {
            return $responseError;
        }
    }
}
