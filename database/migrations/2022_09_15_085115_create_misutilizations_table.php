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
        Schema::create('misutilizations', function (Blueprint $table) {
            $table->id();
            $table->string('app_id')->nullable();
            $table->string('scheme_id')->nullable();
            $table->string('bank_id')->nullable();
            $table->string('total_amount_released')->nullable();
            $table->date('date_last_release')->nullable();
            $table->string('repayment_due')->nullable();
            $table->string('ac_regular')->nullable();
            $table->date('date_visit')->nullable();
            $table->string('utilized')->nullable();
            $table->text('nature_misutilization')->nullable();
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
        Schema::dropIfExists('misutilizations');
    }
};
