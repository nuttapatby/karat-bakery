<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address');
            $table->string('province');
            $table->string('postal_code');
            $table->string('country');
            $table->string('phone');
            $table->tinyInteger('status')->default(0);
            $table->string('message')->nullable();
            $table->string('tracking_no')->nullable();
            $table->decimal('total',8,2);
            $table->unsignedBigInteger('payment_detail_id')->nullable();
            $table->foreign('payment_detail_id')->references('id')->on('payment_details')->restrictOnDelete();
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
        Schema::dropIfExists('order_details');
    }
}
