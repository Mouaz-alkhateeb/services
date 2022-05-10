<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_number', 50);
            $table->date('order_Date')->nullable();
            $table->date('Due_Date')->nullable();//تاريخ التسليم
            $table->string('service', 50);
            $table->unsignedBigInteger( 'section_id' );
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->decimal('Amount_collection',8,2)->nullable();//  سعر الخدمة   
            $table->string('ServiceStatus', 50);
            $table->integer('Value_ServiceStatus');  
            $table->string('PaymentStatus', 50);
            $table->integer('Value_PaymentStatus');
            $table->string('user',300);
            $table->text('note')->nullable();
            $table->date('Payment_Date')->nullable();//تاريخ الدفع
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
}
