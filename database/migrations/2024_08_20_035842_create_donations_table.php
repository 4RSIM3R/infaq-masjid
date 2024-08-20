<?php

use App\Models\Campaign;
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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Campaign::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('unique_id');
            $table->string('method');
            $table->enum('status', ['pending', 'paid'])->default('pending');
            $table->decimal('amount', 19, 2)->default(0);
            $table->string('donatur');
            $table->string('phone_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
