<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_feedback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_first',255);
            $table->string('nashname',255);
            $table->date('gebdatum');
            $table->string('Mail',255)->nullable();
            $table->string('Mobil',255)->nullable();
            $table->string('Festnetz',255)->nullable();
            $table->string('Skype',255)->nullable();
            $table->string('firmen_name',255)->nullable();
            $table->string('radio2',255)->nullable();
            $table->string('firmen2_name',255)->nullable();
            $table->string('Adresszusatz',255)->nullable();
            $table->string('Anschrift',255)->nullable();
            $table->string('PLZ',255)->nullable();
            $table->string('Ort',255)->nullable();
            $table->string('radio',255)->nullable();
            $table->string('select',255)->nullable();
            $table->string('KontoInhaber',255)->nullable();
            $table->string('iban1',255)->nullable();
            $table->string('bic1',255)->nullable();
            $table->string('E-Mail',255)->nullable();
            $table->string('USt',255)->nullable();
            $table->string('Konto',255)->nullable();
            $table->string('IBAN',255)->nullable();
            $table->string('bic2',255)->nullable();
            $table->string('Konto_Inhaber',255)->nullable();
            $table->string('bic3',255)->nullable();
            $table->string('Buchhal_tung',255)->nullable();
            $table->string('Firma',255)->nullable();
            $table->string('Nachname',255)->nullable();
            $table->string('USt-ID',255)->nullable();
            $table->string('Konto-Inhaber',255)->nullable();
            $table->string('bic4',255)->nullable();
            $table->string('Gutschriften',255)->nullable();
            $table->string('Name',255);
            $table->date('Datum');
            $table->string('radio1',255)->nullable();
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
        Schema::dropIfExists('customer_feedback');
    }
}
