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
        Schema::create('software_services', function (Blueprint $table) {
            $table->id();
            $table->enum('service_category',['designmultimedia','websoftware','degitalmarketing','Networking']);
            $table->string('s_name');
            $table->string('s_reviews');
            $table->string('s_price');
            $table->string('s_discount_price');
            $table->string('s_image');
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
        Schema::dropIfExists('software_services');
    }
};
