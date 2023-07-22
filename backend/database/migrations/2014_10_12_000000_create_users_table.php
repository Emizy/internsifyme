<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->smallInteger('email_notify')->default(1);
            $table->smallInteger('email_verify')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->smallInteger('user_type'); // 0 -> intern, 1 -> Recruiter, 2 -> Admin
            $table->integer('login_count')->default(0)->nullable();
            $table->string('avatar')->nullable()->default("no_avatar.png");
            $table->string('phone_no')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('password');
            $table->smallInteger('profile_created')->default(0); //check user created profile (Intern or Company)
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
};
