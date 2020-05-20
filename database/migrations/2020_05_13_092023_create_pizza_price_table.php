<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzaPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizza_price', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->foreignId('pizza_id')->constrained('pizza_detail')->onDelete('cascade')->after('id');
            $table->foreignId('size_id')->constrained('size')->onDelete('cascade')->after('id');
            $table->foreignId('crust_id')->constrained('crust')->onDelete('cascade')->after('id');
            $table->string('dollar');
            $table->string('euro');
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
        Schema::dropIfExists('pizza_price');
    }
}
