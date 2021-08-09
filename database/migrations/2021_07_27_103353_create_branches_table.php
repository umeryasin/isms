<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->string('code');
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('phone');
            $table->date('registration_date')->nullable();
            $table->string('email');
            $table->string('fax')->nullable();
            $table->decimal('latitude', 11, 7)->nullable();
            $table->decimal('longitude', 11, 7)->nullable();
            $table->text('google_api')->nullable();
            $table->text('zoom_api_key')->nullable();
            $table->text('zoom_secret_key')->nullable();
            $table->boolean('is_online_admission');
            $table->text('facebook_url')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('linkedin_url')->nullable();
            $table->text('youtube_url')->nullable();
            $table->text('instagram_url')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('branches');
    }
}
