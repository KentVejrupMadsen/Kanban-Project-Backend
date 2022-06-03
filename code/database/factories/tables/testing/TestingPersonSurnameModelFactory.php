<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables\testing;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\PersonSurnameModel;


    /**
     *
     */
    class TestingPersonSurnameModelFactory
        extends Factory
    {
        // Variables
        protected $model        = PersonSurnameModel::class;


        //
        /**
         * @return array
         */
        public final function definition(): array
        {
            if( $this->getDebugState() )
            {
                return
                [
                    //
                    'content' => $this->faker->unique()->lastName
                ];
            }
            else
            {
                return
                    [
                        //
                        'content' => null
                    ];
            }
        }
    }
?>