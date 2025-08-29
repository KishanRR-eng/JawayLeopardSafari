<?php

use App\Models\Package;
use App\Models\TimeSlot;
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
        Schema::create('time_slot_map', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(TimeSlot::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Package::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('time_slot_map');
    }
};
