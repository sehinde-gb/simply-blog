<?php
/**
 * This is the Controller class
 * 
 * PHP version 7.2
 * 
 * @category Vendor/Project
 * @package  Vendor/Project
 * @author   Sehinde Raji <sehinde@outlook.com>
 * @license  www.laravel.com Laravel
 * @link     Install this on your machine 
 *           php version 7.2
 */
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * This is the Controller class
 * 
 * @category Vendor/Project
 * @package  Vendor/Project
 * @author   Sehinde Raji <sehinde@outlook.com>
 * @license  www.laravel.com Laravel
 * @link     Install this on your machine 
 *           php version 7.2
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
