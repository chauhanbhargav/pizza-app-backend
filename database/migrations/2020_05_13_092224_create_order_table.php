<?php

use App\Utils\AppConstant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->uuid('uuid');
            $table->string('name');
            $table->string('email');
            $table->string('contact_no');
            $table->text('address');
            $table->double('delivery_charges');
            $table->double('total_price')->nullable();
            $table->integer('total_items')->nullable();
            $table->string('currency')->nullable();
            $table->tinyInteger('order_status')->default(0);
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
        Schema::dropIfExists('order');
    }
}
