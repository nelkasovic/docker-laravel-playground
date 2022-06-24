<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('street_name');
            $table->string('street_number')->nullable();
            $table->integer('zip');
            $table->string('city');
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->foreignId('user_id')
                ->unique()
                ->constrained()
                ->restrictOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
