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
    use App\Models\tables\User;
    use Illuminate\Support\Facades\Hash;


    /**
     *
     */
    class TestingUserFactory
        extends Factory
    {
        // Variables
        protected $model        = User::class;



        /**
         * @return \DateTime|null
         */
        protected function fakeIsVerified(): ?\DateTime
        {
            if( $this->faker->boolean )
            {
                return $this->faker->dateTime;
            }
            else
            {
                return null;
            }
        }

        protected function generatePassword(): ?string
        {
            if( $this->getDebugState() )
            {
                return Hash::make( $this->faker->realTextBetween( 8, 16 ) );
            }
            else
            {
                return null;
            }
        }


        /**
         * @return array
         */
        public final function definition(): array
        {
            if( $this->getDebugState() )
            {
                return
                [
                    'username'          => $this->faker
                                                ->unique()
                                                ->userName,

                    'email_id'          => 0,
                    'email_verified_at' => $this->fakeIsVerified(),

                    'password'          => $this->generatePassword(),

                    'created_at'        => $this->faker
                                                ->dateTime,

                    'updated_at'        => $this->faker
                                                ->dateTime,
                    'settings' => '{ }'
                ];
            }
            else
            {
                return
                [
                    'username'          => null,
                    'email_id'          => 0,

                    'email_verified_at' => null,
                    'password'          => null,

                    'created_at'        => Carbon::now(),
                    'updated_at'        => Carbon::now(),

                    'settings' => '{ }'
                ];
            }
        }

    }
?>