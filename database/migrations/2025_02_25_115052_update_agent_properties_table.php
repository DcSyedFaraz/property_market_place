<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('agent_properties', function (Blueprint $table) {
            // Drop old columns that are no longer needed
            $table->dropColumn([
                'agent_id',
                'type',
                // 'status',
                'image'
            ]);

            // Add new columns
            $table->string('title')->change(); // Change to 'Property Title'
            $table->text('description')->nullable()->change();
            $table->string('location')->change();
            $table->string('property_type')->nullable();
            $table->string('transaction_type')->nullable();
            $table->decimal('price', 15, 2)->change();
            $table->decimal('area', 10, 2)->change();
            $table->integer('bedrooms')->nullable()->change();
            $table->integer('bathrooms')->nullable()->change();
            $table->decimal('utility_area', 10, 2)->nullable()->change();
            $table->decimal('balcony_area', 10, 2)->nullable()->change();
            $table->decimal('unit_area', 10, 2)->nullable()->change();
            $table->string('main_image')->nullable(); // Property Main Image
            $table->string('status')->nullable()->change(); // Property Status
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agent_properties', function (Blueprint $table) {
            // Revert changes if necessary
            $table->string('agent_id');
            $table->string('type');
            $table->string('image')->nullable();

            // Drop new columns
            $table->dropColumn([
                'property_type',
                // 'status',
                'transaction_type',
                'main_image',
            ]);
        });
    }
};
