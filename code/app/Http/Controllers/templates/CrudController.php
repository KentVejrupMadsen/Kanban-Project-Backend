<?php
    /**
     *
     */
    namespace App\Http\Controllers\templates;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;


    /**
     *
     */
    abstract class CrudController
        extends Controller
    {
        //
        public abstract function read( Request $request );

        //
        public abstract function create( Request $request );

        //
        public abstract function update( Request $request );

        //
        public abstract function delete( Request $request );
    }
?>