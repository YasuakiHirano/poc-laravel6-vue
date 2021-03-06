<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Logger
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Log::info('[middleware] start run logger');
        $this->outputRequest($request);
        $request = $next($request);
        \Log::info('[middleware] end run logger');

        return $request;
    }

    /**
     * リクエストパラメータ出力.
     * @param Request $request
     */
    private function outputRequest(Request $request)
    {
        $requestMethod = $request->method();
        $requestParams = json_encode($request->all());
        \Log::info("{$requestMethod} : {$requestParams}");
    }
}
