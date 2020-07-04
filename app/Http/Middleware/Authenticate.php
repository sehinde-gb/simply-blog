<?php
/**
 * This class is the Authenticate class
 * 
 * PHP version 7.2
 * 
 * @category Vendor/Project
 * @package  Vendor/Project
 * @author   Sehinde Raji <sehinde@outlook.com>
 * @license  www.laravel.com Laravel
 * @link     Install this on your machine        
 */
namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

/**
 * This class is the Authenticate class
 * 
 * PHP version 7.2
 * 
 * @category Vendor/Project
 * @package  Vendor/Project
 * @author   Sehinde Raji <sehinde@outlook.com>
 * @license  www.laravel.com Laravel
 * @link     Install this on your machine        
 */
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request This is the request variable
     * 
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
