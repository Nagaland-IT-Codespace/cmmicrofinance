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
        Schema::create('subsidies', function (Blueprint $table) {
            $table->id();
            $table->string('bank_id');
            $table->date('dlic_meeting_date')->nullable();
            $table->string('rate_of_receipt_applications')->nullable();
            $table->string('no_of_applications_received')->nullable();
            $table->string('amount_loan_sanctioned')->nullable();
            $table->string('total_eligible_subsidy')->nullable();
            $table->date('date_claim_subsidy')->nullable();
            $table->date('date_receipt_subsidy')->nullable();
            $table->string('amount_subsidy_released')->nullable();
            $table->string('amount_subsidy_outstanding')->nullable();
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
        Schema::dropIfExists('subsidies');
    }
};
