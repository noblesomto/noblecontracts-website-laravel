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
        Schema::table('quote_drafts', function (Blueprint $table) {
            if (!Schema::hasColumn('quote_drafts', 'additional_notes')) {
                $table->text('additional_notes')->nullable()->after('timeline');
            }
            if (!Schema::hasColumn('quote_drafts', 'ip_address')) {
                $table->string('ip_address')->nullable()->after('status');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quote_drafts', function (Blueprint $table) {
            if (Schema::hasColumn('quote_drafts', 'additional_notes')) {
                $table->dropColumn('additional_notes');
            }
            if (Schema::hasColumn('quote_drafts', 'ip_address')) {
                $table->dropColumn('ip_address');
            }
        });
    }
};
