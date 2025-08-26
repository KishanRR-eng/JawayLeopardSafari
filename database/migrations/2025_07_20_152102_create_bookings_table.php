<?php

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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_code');
            $table->string('mobile_no');
            $table->string('email')->nullable()->default(null);
            $table->double('price');
            $table->foreignIdFor(TimeSlot::class);
            $table->string('vehicle_name');
            $table->integer('seats');
            $table->double('vehicle_price');
            $table->integer('adult')->default(0);
            $table->integer('child')->default(0);
            $table->enum('tourist_type', [0, 1])->default(0)->comment("0-Indian,1-Foreigner");
            $table->enum('day_type', [0, 1])->default(0)->comment("0-Weekday,1-Weekend");
            $table->enum('type', [0])->default(0)->comment("0-Jaway Leopard Safari");
            $table->date('booking_date');
            $table->string('payment_id')->unique()->nullable()->default(null);
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
        Schema::dropIfExists('bookings');
    }
};
