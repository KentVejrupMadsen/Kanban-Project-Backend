<?php
    namespace Database\Factories\tables;

    // External libraries
    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\ProjectMemberModel;


    /**
     *
     */
    final class ProjectMemberModelFactory
        extends Factory
    {
        // Variables
        protected $model      = ProjectMemberModel::class;
        private static $debug = false;

        // Accessors
        /**
         * @return bool
         */
        public final function getDebugState(): bool
        {
            return self::$debug;
        }

        /**
         * @param bool $value
         * @return void
         */
        public final function setDebugState( bool $value ): void
        {
            self::$debug = $value;
        }


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
                        'project_id' => 0,
                        'account_id' => 0,
                        'member_group_id' => 0
                    ];
            }
            else
            {
                return
                    [
                        //
                        'project_id' => 0,
                        'account_id' => 0,
                        'member_group_id' => 0
                    ];
            }
        }
    }
?>