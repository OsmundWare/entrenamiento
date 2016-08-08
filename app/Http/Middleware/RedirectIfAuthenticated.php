<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfAuthenticated
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
            switch($this->auth->user()->idrol)
            {
                case '1':
                    return redirect()->to('alumnos');
                    break;

                case '2':
                    return redirect()->to('director');
                    break;

                case'3':
                    return redirect()->to('profesor');
                    break;

                default:
                    return redirect()->to('login');
                    break;

            }
        }

        return $next($request);
    }
}
