<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables\testing;

    // External libraries
    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\AccountInformationModel;


    /**
     *
     */
    class TestingAccountInformationModelFactory
        extends Factory
    {
        protected $model        = AccountInformationModel::class;



        /**
         * @return array
         */
        public final function definition(): array
        {
            if( $this->getDebugState() )
            {
                return $this->fakeDefinition();
            }
            else
            {
                return $this->normalDefinition();
            }
        }


        /**
         * @return array
         */
        protected function fakeDefinition(): array
        {
            return
            [
                'account_id' => 0,
                'settings'   => '{ }',
                'created_at' => $this->faker->dateTime,
                'updated_at' => $this->faker->dateTime
            ];
        }


        /**
         * @return array
         */
        protected function normalDefinition(): array
        {
            return
            [
                'account_id' => 0,
                'settings'   => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
        }
    }
?>