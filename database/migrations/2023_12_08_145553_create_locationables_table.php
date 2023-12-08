<?php

use App\Models\Location;
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
        Schema::create('locationables', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Location::class)->constrained()->cascadeOnDelete();
            $table->morphs('locationable');
            $table->timestamps();

            $table->unique([
                'locationable_id',
                'locationable_type'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locationables');
    }
};
