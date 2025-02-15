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
        Schema::create('document_sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('document_id');
            $table->string('table_no')->nullable();
            $table->string('page_no')->nullable();
            $table->longText('title')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('contain_table')->default(0);
            $table->boolean('hasPrePage')->default(0);
            $table->string('prePageTitle')->nullable();
            $table->longText('table_headers')->nullable();
            $table->longText('table_body')->nullable();
            $table->longText('notes')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_sections');
    }
};
