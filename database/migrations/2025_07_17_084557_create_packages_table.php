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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('price');
            $table->enum('tourist_type', [0, 1])->default(0)->comment("0-Indian,1-Foreigner");
            $table->enum('day_type', [0, 1])->default(0)->comment("0-Weekday,1-Weekend");
            $table->enum('type', [0, 1])->default(0)->comment("0-Gir Safari,1-Gir Devalia");
            $table->boolean('status')->default(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
