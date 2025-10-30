<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('agent_properties', function (Blueprint $table) {
            $table->string('slug')->nullable()->unique()->after('id');
        });
    }

    public function down(): void
    {
        Schema::table('agent_properties', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            $table->dropColumn('slug');
        });
    }
};

