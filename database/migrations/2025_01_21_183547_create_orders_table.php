<?php

use App\Models\Destination;
use App\Models\Payment;
use App\Models\User;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignIdFor(Destination::class);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Payment::class);
            $table->integer('amount');
            $table->bigInteger('total');
            $table->enum('status',['unpaid','paid','canceled'])->default('unpaid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
