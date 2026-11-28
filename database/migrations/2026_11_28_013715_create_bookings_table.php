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

            $table->foreignId('service_id')
                ->constrained()
                ->restrictOnDelete();

            $table->string('client_name');
            $table->string('client_email');
            $table->string('client_phone', 30);

            $table->dateTime('starts_at');

            $table->decimal('price', 8, 2);
            $table->unsignedSmallInteger('duration_minutes');

            $table->string('status', 20)->default('pending');

            $table->text('notes')->nullable();

            $table->timestamps();

            $table->index(['starts_at', 'status']);
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
