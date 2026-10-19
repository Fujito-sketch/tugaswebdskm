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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user_bios')->onDelete('cascade');
            $table->string('title');
            $table->string('file_path'); // Stores the path/URL to the file (e.g., S3 or local storage)
            $table->string('filename')->nullable(); // Original name of the file
            $table->string('mime_type')->nullable(); // e.g., image/jpeg, image/png
            $table->unsignedBigInteger('file_size')->nullable(); // Size in bytes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
