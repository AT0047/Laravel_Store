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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->foreignId('product_id')->constrained('products')->onUpdate('cascade')->onDelete('cascade');;
            $table->decimal('salary',10,2);
            $table->string('descrption');
            $table->string('start_Offer');
            $table->string('end_Offer');
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
        Schema::dropIfExists('offers');
    }
};
