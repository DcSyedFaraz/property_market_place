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
        // Step 1: Add slug column without unique constraint.
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('slug')->after('image');
        });

        // Step 2: Populate unique slugs for existing rows.
        // Customize the update logic as needed.
        DB::table('blogs')->orderBy('id')->chunkById(100, function ($blogs) {
            foreach ($blogs as $blog) {
                // Here you should assign a unique slug value.
                // Example: using blog id combined with a title slug.
                $uniqueSlug = "{$blog->id}-unique-slug";
                DB::table('blogs')
                    ->where('id', $blog->id)
                    ->update(['slug' => $uniqueSlug]);
            }
        });

        // Step 3: Add unique constraint.
        Schema::table('blogs', function (Blueprint $table) {
            $table->unique('slug');
        });

        // Drop slug column from blog_translations as in the original migration.
        Schema::table('blog_translations', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            $table->dropColumn('slug');
        });

        Schema::table('blog_translations', function (Blueprint $table) {
            $table->string('slug')->nullable();
        });
    }
};
