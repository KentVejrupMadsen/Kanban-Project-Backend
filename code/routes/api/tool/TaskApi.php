<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    // External libraries
    use Illuminate\Support\Facades\Route;

    // Internal libraries
    use App\Http\Controllers\httpControllers\tools\TaskController;


    const taskRoute = 'task';

    const taskCreateRoute = 'create';
    const taskDeleteRoute = 'delete';
    const taskReadRoute   = 'read';
    const taskUpdateRoute = 'update';


    function TaskApi(): void
    {
        Route::prefix( taskRoute )->group
        (
            function()
            {
                Route::controller( TaskController::class )->group
                (
                    function()
                    {
                        Route::post( taskCreateRoute, 'create' );
                        Route::delete( taskDeleteRoute, 'delete' );
                        Route::get( taskReadRoute, 'read' );
                        Route::patch( taskUpdateRoute, 'update' );
                    }
                );
            }
        );
    }
?>