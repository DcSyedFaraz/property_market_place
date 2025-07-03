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
            // Adds the new column to store the selected audience
            $table->string('target_audience')->nullable()->after('status');
        });
        Schema::table('blogs', function (Blueprint $table) {
            // Adds the new column to store the selected audience
            $table->string('target_audience')->nullable()->after('description');
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
            // Removes the column if the migration is rolled back
            $table->dropColumn('target_audience');
        });
        Schema::table('blogs', function (Blueprint $table) {
            // Removes the column if the migration is rolled back
            $table->dropColumn('target_audience');
        });
    }
};
