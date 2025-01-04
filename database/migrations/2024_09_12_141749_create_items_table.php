<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('items', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->string('supliername'); // Adding the supplier name
        $table->integer('quantity');   // Adding the quantity as an integer
        $table->date('purchase_date'); // Adding the purchase date
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
