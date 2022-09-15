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
        Schema::create('beneficiary_sanctions', function (Blueprint $table) {
            $table->id();
            $table->string('app_id')->nullable();
            $table->string('scheme_id')->nullable();
            $table->string('bank_id')->nullable();
            $table->date('date_sanction')->nullable();
            $table->string('amount_sanctioned')->nullable();
            $table->string('margin_money')->nullable();
            $table->string('subsidy_claimed')->nullable();
            $table->string('subsidy_received')->nullable();
            $table->string('amount_disbursed')->nullable();
            $table->string('subsidy_credited')->nullable();
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
        Schema::dropIfExists('beneficiary_sanctions');
    }
};
