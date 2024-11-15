<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('items_id')->constrained('items')->cascadeOnDelete();
            $table->enum('transaction_type',['in','out']);
            $table->integer('quantity');
            $table->date('transaction_date');
            $table->foreignId('supplier_id')->constrained('suppliers')->cascadeOnDelete();
            $table->string('unit_price');
            $table->string('total_price');
            $table->longText('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
