<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Update budget_range to string to store human-readable labels.
     */
    public function up(): void
    {
        DB::statement("ALTER TABLE visitor_submissions MODIFY budget_range VARCHAR(255) NULL");
    }

    /**
     * Revert budget_range back to integer if needed.
     */
    public function down(): void
    {
        DB::statement("ALTER TABLE visitor_submissions MODIFY budget_range INT NULL");
    }
};
