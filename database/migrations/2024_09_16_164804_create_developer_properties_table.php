<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('developer_properties', function (Blueprint $table) {
            $table->id();
            $table->integer('developer_id'); // Foreign key to developers table
            $table->string('name');
            $table->string('location');
            $table->string('property_type'); // e.g., Apartment, Villa, Townhouse, etc.
            $table->string('status')->default('new'); // e.g., New Launch, Under Construction, Ready to Move, etc.
            $table->integer('bedrooms')->nullable(); // Number of bedrooms
            $table->integer('bathrooms')->nullable(); // Number of bathrooms
            $table->decimal('size', 10, 2); // Size of the property in square feet
            $table->decimal('price', 15, 2); // Price in AED
            $table->text('description')->nullable(); // Description of the property
            $table->text('amenities')->nullable(); // JSON or text to store amenities like swimming pool, gym, etc.
            $table->string('payment_plan')->nullable(); // For storing the payment plan details
            $table->string('handover_date')->nullable(); // Handover date or timeline
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developer_properties');
    }
};
