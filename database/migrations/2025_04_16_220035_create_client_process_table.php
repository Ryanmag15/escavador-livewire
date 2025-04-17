<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('client_process', function (Blueprint $table) {
            $table->foreignUuid('client_id')->constrained();
            $table->foreignUuid('process_id')->constrained();
            $table->primary(['client_id', 'process_id']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('client_process');
    }
};
