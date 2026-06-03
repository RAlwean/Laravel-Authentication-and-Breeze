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
    Schema::table('users', function (Blueprint $table) { // <-- Ubah Bundle jadi Blueprint
        $table->string('no_hp', 15)->after('email');
    });
}

public function down(): void
{
    Schema::table('users', function (Blueprint $table) { // <-- Ubah Bundle jadi Blueprint
        $table->dropColumn('no_hp');
    });
}

};
