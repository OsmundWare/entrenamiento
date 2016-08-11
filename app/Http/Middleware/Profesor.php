<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;

class Profesor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth=$auth;

    }
    public function handle($request, Closure $next)
    {
        switch($this->auth->user()->idrol)
        {
            case '1':
                return redirect()->to('alumnos');
                break;

            case '2':
                return redirect()->to('director');
                break;

            case '3':
                //return redirect()->to('profesor');
                break;

            default:
                return redirect()->to('login');
                break;

        }

        return $next($request);
    }
}
