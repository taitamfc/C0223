<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       
        // Thay doi view
        /*
        if( $request->expectsJson() ){
            return $next($request);
        }
        return response(view('login'));
        */
        

        // Thay doi content
        /*
        $content = $response->getContent();
        $content = str_replace('Trang admin','Trang login',$content);
        $response->setContent($content);
        return $response;
        */

        // Thay doi du lieu
        $response = $next($request);
        // Lay du lieu cu
        $data = $response->original->getData();
        $data['name'] = 'NVB';
        return response()->view('admin', $data);
    }
}
