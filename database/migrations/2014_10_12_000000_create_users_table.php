<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('orange_mobile')->nullable();
            $table->string('education_level')->nullable();
            $table->string('field')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('address')->nullable();
            $table->string('english_level')->nullable();
            $table->string('refrences_1')->nullable();
            $table->string('refrences_2')->nullable();
            $table->string('gender')->nullable();
            $table->string('avatar')->default('placeholder.png');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('is_admin')->nullable()->default(0);
            $table->string('password')->default(bcrypt('oca@2021'));
            $table->string('api_token', 80)->unique()
            ->nullable()
            ->default(null);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
