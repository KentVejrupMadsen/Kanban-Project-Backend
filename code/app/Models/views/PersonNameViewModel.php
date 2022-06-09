<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\views;

    use App\Models\templates\ModelView;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Person Name View Model',
                 description: '',
                 type: ModelView::model_view,
                 deprecated: false )]
    class PersonNameViewModel
        extends ModelView
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'person_names_view';
        protected $table = self::table_name;

        protected const field_id = 'id';
        protected const field_account_information_id = 'account_information_id';

        protected const field_person_first_name = 'person_first_name';
        protected const field_person_name_middlename = 'person_name_middlename';
        protected const field_person_last_name = 'person_last_name';


        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_id,
            self::field_account_information_id,
            self::field_person_first_name,
            self::field_person_name_middlename,
            self::field_person_last_name
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::field_id,
            self::field_account_information_id,
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::field_id                     => self::typeInteger,
            self::field_account_information_id => self::typeInteger,

            self::field_person_first_name      => self::typeString,
            self::field_person_name_middlename => self::typeArray,
            self::field_person_last_name       => self::typeString
        ];
    }
?>
