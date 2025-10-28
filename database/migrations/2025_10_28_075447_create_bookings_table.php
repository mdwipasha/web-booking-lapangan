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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade'); 
            $table->foreignId('field_id')
                ->constrained()
                ->onDelete('cascade'); 
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->decimal('total_price', 10, 2)->default(0);
            $table->enum('status', ['pending', 'confirmed', 'processing', 'cancelled'])->default('pending');
            $table->string('phone_number')->nullable();
            $table->string('note')->nullable();
            $table->string('google_event_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
