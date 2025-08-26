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
        Schema::table('booking_details', function (Blueprint $table) {
            $table->enum('identity_proof_type', [0, 1, 2, 3, 4])->default(0)->after('gender')->comment('0-None, 1-Aadhar card, 2-Pan card, 3-Driving License, 4-Passport');
            $table->string('identity_proof_id')->nullable()->default(null)->after('identity_proof_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('booking_details', function (Blueprint $table) {
            //
        });
    }
};
