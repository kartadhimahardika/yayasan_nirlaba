<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('donations', function (Blueprint $table) {

            // Ubah kolom jadi nullable (kalau belum)
            $table->unsignedBigInteger('bank_id')->nullable()->change();

            // Tambahkan foreign key dengan SET NULL
            $table->foreign('bank_id')
                ->references('id')
                ->on('banks')
                ->nullOnDelete();
        });
    }




    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('donations', function (Blueprint $table) {

            $table->dropForeign(['bank_id']);

            $table->foreign('bank_id')
                ->references('id')
                ->on('banks')
                ->onDelete('cascade');
        });
    }
};
