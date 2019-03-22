<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Administrator
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! $this->isAdmin()) {
            return redirect(route('login'))
                ->with(["message" => "You're not an administrator."]);
        }

        return $next($request);
    }

    /**
     * 確認登入使用者是管理者
     *
     * @return bool
     */
    protected function isAdmin(): bool
    {
        return in_array(
            auth()->user()->email,
            array_map('strtolower', config('project.administrators'))
        );
    }
}
