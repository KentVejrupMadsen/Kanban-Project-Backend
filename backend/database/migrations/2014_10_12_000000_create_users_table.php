<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        
        public function up()
        {
            Schema::create( 'account_emails', 
                function ( Blueprint $table ) 
                {
                    $table->id();
                    $table->string('content')->unique();
                }
            );

            Schema::create( 'accounts', 
                function ( Blueprint $table ) 
                {
                    $table->id();
                    $table->string( 'name' );
                    $table->bigInteger( 'email_id' )->unsigned()->unique();
                    $table->timestamp( 'email_verified_at' )->nullable();
                    $table->string( 'password' );
                    $table->rememberToken();
                    $table->timestamps();
                }
            );
        }

        
        public function down()
        {
            Schema::dropIfExists( 'accounts' );
        }
    };

?>