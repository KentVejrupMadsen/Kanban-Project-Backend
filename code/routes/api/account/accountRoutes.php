<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // External libraries
    use Illuminate\Support\Facades\Route;

    require_once 'entities/entitiesRoutes.php';

    require_once 'accountApi.php';
    require_once 'newsletterApi.php';


    function AccountRoutes(): void
    {
        Route::prefix( 'accounts' )->group
        (
            function()
            {
                AccountApi();
                NewsletterApi();
                EntitiesRoutes();
            }
        );

    }
?>