<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected $admin_route = 'admin.login';

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route($this->admin_route);
        }
    }
}
