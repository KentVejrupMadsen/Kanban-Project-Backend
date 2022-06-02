<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    use Illuminate\Database\Eloquent\Factories\HasFactory;

    use Illuminate\Foundation\Auth\User
        as Authenticatable;

    use Illuminate\Notifications\Notifiable;
    use Laravel\Sanctum\HasApiTokens;
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema()]
    class User 
        extends Authenticatable
    {
        // Variables
            // Table
        protected $table = 'accounts';

            // Constants
        #[OA\Property( property: 'string' )]
        protected const field_username = 'username';

        #[OA\Property(property: 'string')]
        protected const field_name = 'name';

        #[OA\Property(property: 'string')]
        protected const field_email_id = 'email_id';

        #[OA\Property(property: 'string')]
        protected const field_password = 'password';


        #[OA\Property(property: 'string')]
        protected const field_created_at = 'created_at';

        #[OA\Property(property: 'string')]
        protected const field_updated_at = 'updated_at';


        #[OA\Property(property: 'string')]
        protected const field_settings = 'settings';

        #[OA\Property(property: 'string')]
        protected const field_remember_token = 'remember_token';

        #[OA\Property(property: 'string')]
        protected const field_verified_at = 'email_verified_at';


        use HasApiTokens,
            HasFactory,
            Notifiable;


        protected $fillable = 
        [
            self::field_username,
            self::field_name,
            self::field_email_id,
            self::field_password,
            self::field_created_at,
            self::field_updated_at,
            self::field_settings,
            self::field_remember_token,
            self::field_verified_at
        ];

        
        protected $hidden = 
        [
            self::field_password,
            self::field_remember_token,
            self::field_email_id,
            self::field_verified_at
        ];

        
        protected $casts = 
        [
            self::field_username          => 'string',
            self::field_name              => 'string',

            self::field_email_id          => 'integer',
            self::field_password          => 'string',

            self::field_verified_at       => 'datetime',
            self::field_created_at        => 'datetime',
            self::field_updated_at        => 'datetime',

            self::field_settings          => 'array'
        ];
    }
?>