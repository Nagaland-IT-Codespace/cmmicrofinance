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
        Schema::create('app_received_sanctioneds', function (Blueprint $table) {
            $table->id();
            $table->string('app_id')->nullable();
            $table->string('scheme_id')->nullable();
            $table->string('bank_id')->nullable();
            $table->string('eligible_bank_loan')->nullable();
            $table->date('date_receipt')->nullable();
            $table->date('date_sanctioned')->nullable();
            $table->date('1disbursement_date')->nullable();
            $table->text('delay_reason')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_received_sanctioneds');
    }
};
