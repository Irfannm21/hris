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
        Schema::create('ref_struktur', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('struk_id')->nullable();
            $table->string('tingkat');
            $table->string('name');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('struk_id')->references('id')->on('ref_struktur');
        });

        Schema::create('ref_posisi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('posisi_id')->nullable();
            $table->string('name');
            $table->unsignedInteger('code');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();


            $table->foreign('posisi_id')->references('id')->on('ref_posisi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_struktur');
        Schema::dropIfExists('ref_posisi');
    }
};
