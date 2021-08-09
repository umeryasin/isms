<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->text('address')->nullable();
            $table->string('phone');
            $table->date('registration_date')->nullable();
            $table->string('email');
            $table->string('fax')->nullable();
            $table->text('footer')->nullable();
            $table->string('currency')->nullable();
            $table->text('currency_symbol')->nullable();
            $table->decimal('latitude', 11, 7)->nullable();
            $table->decimal('longitude', 11, 7)->nullable();
            $table->text('google_api')->nullable();
            $table->boolean('is_rtl')->nullable();
            $table->boolean('is_frontend')->nullable();
            $table->text('logo')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('schools');
    }
}
