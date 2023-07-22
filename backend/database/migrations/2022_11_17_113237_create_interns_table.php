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
        Schema::create('interns', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->string('title')->nullable();
            $table->longText('bio')->nullable();
            $table->smallInteger('verify')->default(0); // 1 - Verified
            $table->smallInteger('certify')->default(0); // 1 - certified
            $table->string('banner')->default("no_banner.png");
            // $table->json('skills')->nullable();
            $table->longText('experience')->nullable();
            $table->longText('education')->nullable();
            $table->string('education_level')->nullable();
            $table->string('cv')->nullable();
            $table->string('portfolio')->nullable();
            $table->string('language')->nullable();
            $table->integer('available')->default(1);
            $table->string('location')->nullable(); // Onsite, Remote, Onsite & Remote
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->timestamps();
        });

        Schema::table('interns', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interns');
    }
};
