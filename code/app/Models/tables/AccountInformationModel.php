<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    // Internal Libraries
    use App\Models\templates\BaseModel;

    // External libraries
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Account Information Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false )]
    class AccountInformationModel
        extends BaseModel
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'account_information_options';

        // Variables
            // Model
        protected $table = self::table_name;

            // Constants
        #[OA\Property( type: 'string' )]
        public const field_account = 'account_id';

        #[OA\Property( type: 'string' )]
        public const field_created_at = 'created_at';

        #[OA\Property( type: 'string' )]
        public const field_updated_at = 'updated_at';

        #[OA\Property( type: 'string' )]
        public const field_settings = 'settings';


        //
        #[OA\Property(
            property: 'fillable',
            type: 'array',
            maximum: 3,
            minimum: 3,
            items: new OA\Items(type: 'string'))]
        protected $fillable =
        [
            self::field_account,
            self::field_created_at,
            self::field_updated_at
        ];

        #[OA\Property(
            property: 'hidden',
            type: 'array',
            maximum: 1,
            minimum: 1,
            items: new OA\Items(type: 'string'))]
        protected $hidden =
        [
            self::field_account,
        ];


        protected $casts =
        [
            self::field_account     => 'integer',
            self::field_created_at  => 'datetime',
            self::field_updated_at  => 'datetime',
        ];
    }
?>
