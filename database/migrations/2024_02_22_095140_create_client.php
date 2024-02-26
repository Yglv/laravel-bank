<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('surname', 50);
            $table->string('name', 50);
            $table->string('patronymic', 50);
            $table->date('birthDate');
            $table->boolean('male');
            $table->string('passportSeries', 2);
            $table->string('passportNumber', 7);
            $table->string('issuedBy', 100);
            $table->date('issueDate');
            $table->string('identificationNumber', 50);
            $table->string('birthPlace', 50);
            $table->integer('residenceActualPlaceId');
            $table->string('homePhoneNumber', 50)->nullable();
            $table->string('mobilePhoneNumber', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('residenceAddress', 100);
            $table->integer('maritalStatusId');
            $table->integer('citizenshipId');
            $table->integer('disability');
            $table->boolean('pensioner');
            $table->decimal('monthlyIncome', 8, 2)->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('residenceActualPlaceId')->references('id')->on('place');
            $table->foreign('maritalStatusId')->references('id')->on('martial_status');
            $table->foreign('citizenshipId')->references('id')->on('citizenship');
            // Assuming 'Disability' is a foreign key referencing 'id' in 'disabilities' table
            $table->foreign('disability')->references('id')->on('disability');

            $table->unique(['passportSeries', 'passportNumber'], 'UQ_Client_PassportSeries_PassportNumber');
            $table->unique(['identificationNumber'], 'UQ_Client_IdentificationNumber');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
