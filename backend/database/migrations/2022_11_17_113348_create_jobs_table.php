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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('posted_by')->unsigned()->index();
            $table->string('title');
            $table->decimal('stipend', 15, 2)->nullable();
            $table->string('currency')->default("NGN")->nullable();
            $table->string('type')->default("Fulltime"); //Parttime
            $table->string('level')->default("Non-Experience"); //Experience
            $table->longText('about_role');
            $table->longText('responsibilities');
            $table->longText('requirements');
            $table->longText('benefits');
            $table->string('location'); // Remote or Onsite
            $table->longText('application_link')->nullable();
            $table->integer('active')->default(0); // 1 - approved
            $table->timestamp('deadline');
            $table->timestamps();
        });

        Schema::table('jobs', function($table) {
            $table->foreign('posted_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
