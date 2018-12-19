<?php
/**
 * Created by PhpStorm.
 * User: n.sekretarev
 * Date: 19.12.2018
 * Time: 11:57
 */
namespace Snnick\User;

use Laravel\Passport\Passport;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as PassportServiceProvider;

class UserServiceProvider extends PassportServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */

    public function boot()
    {
        require_once __DIR__.'/Http/routes.php';

        $this->registerPolicies();
        Passport::routes();
    }
}