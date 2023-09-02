<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ApiResponse;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use function PHPUnit\Framework\isEmpty;

class TenantActive extends Controller
{
    use ApiResponse;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $responseError = $this->sendResponse(false, [], 'No tenant, Sorry not allowed access now.');

        try {
            if(!app('currentTenant')) return $responseError;
            if(app('currentTenant')->isActive == 1) return $next($request);
            return $this->sendResponse(false, [app('currentTenant')], 'This tenant is free, Sorry not allowed access now.');
        } catch (\Throwable $th) {
            return $responseError;
        }
    }
}
