<?php

use App\Models\CartDetail;
use App\Models\Size;
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
        Schema::create('cart_datail_sizes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CartDetail::class,'cart_details_id');
            $table->foreignIdFor(Size::class, 'size_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_datail_sizes');
    }
};
