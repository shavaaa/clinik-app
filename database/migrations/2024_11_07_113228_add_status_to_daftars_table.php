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
        Schema::table('daftars', function (Blueprint $table) {
            $table->string('status')->default('Baru'); // Menambahkan kolom status dengan nilai default
        });
    }

    public function down()
    {
        Schema::table('daftars', function (Blueprint $table) {
            $table->dropColumn('status'); // Menghapus kolom status jika rollback
        });
    }
};
