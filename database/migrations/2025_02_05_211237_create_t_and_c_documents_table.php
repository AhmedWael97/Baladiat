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
        Schema::create('t_and_c_documents', function (Blueprint $table) {
            $table->id();
            $table->string('cover_img')->nullable();
            $table->string('page_img')->nullable();
            $table->string('first_title')->nullable();
            $table->string('mun_name')->nullable();
            $table->string('mun_logo')->nullable();
            $table->string('type_name')->nullable();
            $table->unsignedBigInteger('land_id')->nullable();
            $table->json('land_spec')->nullable();
            $table->string('year')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_and_c_documents');
    }
};
