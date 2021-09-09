<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatepassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gatepasses', function (Blueprint $table) {
            $table->id();
            $table->string('gatepassNo');
            $table->string('companyName');
            $table->string('destination');
            $table->string('attention');
            $table->string('carrierName');
            $table->string('designation');
            $table->string('employeeId');
            $table->string('preparedBy');
            $table->string('receivedBy');
            $table->string('authorizedBy');
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
        Schema::dropIfExists('gatepasses');
    }
}
