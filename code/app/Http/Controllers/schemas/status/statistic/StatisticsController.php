<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License
        * (https://github.com/KentVejrupMadsen/EASV.Exam.2.Backend/blob/main/License.md)
        * (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Controllers\schemas\status\statistic;

    // External
    use Illuminate\Http\JsonResponse;

    use Illuminate\Routing\Controller
        as BaseController;


    /**
     *
     */
    class StatisticsController
        extends BaseController
    {
        /**
         * @param bool $makeSingleton
         */
        public function __construct( bool $makeSingleton = false )
        {
            if( $makeSingleton )
            {
                self::setSingleton( $this );
            }
        }

        // Variables
        private static ?StatisticsController $singleton = null;


        /**
         * @return JsonResponse
         */
        public function now(): JsonResponse
        {
            $arr = ['status' => 'online'];
            return Response()->json( $arr, 200 );
        }

        // Accessor
        /**
         * @return StatisticsController|null
         */
        public static function getSingleton(): ?StatisticsController
        {
            return self::$singleton;
        }


        /**
         * @param StatisticsController|null $singleton
         * @return void
         */
        public static function setSingleton( ?StatisticsController $singleton ): void
        {
            self::$singleton = $singleton;
        }
    }
?>
