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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('ip')->nullable();
            $table->bigInteger('job_id')->unsigned()->index()->nullable();
            $table->bigInteger('intern_id')->unsigned()->index()->nullable();
            $table->bigInteger('company_id')->unsigned()->index()->nullable();
            $table->timestamps();
        });

        Schema::table('reports', function($table) {
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('intern_id')->references('id')->on('interns')->onDelete('cascade');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
};
