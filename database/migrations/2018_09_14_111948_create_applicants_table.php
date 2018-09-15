<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name_in_full');
            $table->string('address');
            $table->string('signup_email')->unique();
            $table->string('mobile');
            $table->timestamp('birthday')->nullable();
            $table->string('nic_number');
            $table->string('position');
            $table->string('previously_worked_company');
            $table->string('job_title');
            $table->integer('monthly_salory');
            $table->string('experience');
            $table->string('expertise');
            $table->integer('account_no');
            $table->string('account_holder');
            $table->string('bank_name');
            $table->string('bank_branch');
            $table->string('check');
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
        Schema::dropIfExists('applicants');
    }
}
