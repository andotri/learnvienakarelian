<?php namespace App\Http\Middleware;

use App;
use Closure;
use Request;
use Session;

class Language {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $browserLocale = substr(Request::server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
        App::setLocale(Session::get('locale', $browserLocale));

        return $next($request);
    }
}
