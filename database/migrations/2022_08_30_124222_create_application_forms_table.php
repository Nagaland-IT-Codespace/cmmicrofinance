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
        Schema::create('application_forms', function (Blueprint $table) {
            $table->id();
            $table->string('scheme_id')->nullable();
            $table->string('proposal_from')->nullable();
            $table->string('district_id')->nullable();
            $table->string('block')->nullable();
            $table->string('village')->nullable();
            $table->string('proposal_title')->nullable();
            $table->string('name_of_proposee')->nullable();
            $table->string('address_of_proposee')->nullable();
            $table->string('expected_outcome')->nullable();
            $table->string('project_duration')->nullable();
            $table->string('project_outlay')->nullable();
            $table->string('status')->nullable();
            $table->string('project_file')->nullable();
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
        Schema::dropIfExists('application_forms');
    }
};
