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
        Schema::table('developer_properties', function (Blueprint $table) {
            // Add new columns
            $table->text('master_plan_description')->nullable();
            $table->text('floor_plan_description')->nullable();
            $table->text('location_map_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('developer_properties', function (Blueprint $table) {
            // Remove the new columns in case of rollback
            $table->dropColumn('master_plan_description');
            $table->dropColumn('floor_plan_description');
            $table->dropColumn('location_map_description');
        });
    }

};
