<?php
/**
 * This class is the LoginSuccessTest Class.
 * 
 * PHP version 7.2
 * 
 * @category Vendor/Project
 * @package  Vendor/Project
 * @author   Sehinde Raji <sehinde@outlook.com>
 * @license  www.laravel.com Laravel
 * @link     Install this on your machine 
 */
namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;

/**
 * This class is the LoginSuccess Test class
 * 
 * PHP version 7.2
 * 
 * @category Vendor/Project
 * @package  Vendor/Project
 * @author   Sehinde Raji <sehinde@outlook.com>
 * @license  www.laravel.com Laravel
 * @link     Install this on your machine 
 */
class LoginSuccessTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $user = factory(
            User::class
        )
        ->create(
            [
            'email' => 'profusity@gmail.com',
            ]
        );

        $this->browse(
            function ($browser) use ($user) {
                $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', 'password')
                    ->press('Login')
                    ->assertPathIs('/admin/posts');
            }
        );
       
    }
}
