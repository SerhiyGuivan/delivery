<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{

    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->text('products_list');
            $table->boolean('is_heavy')->nullable();
            $table->boolean('is_express')->nullable();
            $table->decimal('amount', 5, 2)->nullable();
            $table->enum('status', ['Open', 'In progress', 'Closed']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
