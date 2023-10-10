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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('developer_id');
            $table->foreign('developer_id')
                ->references('id')
                ->on('developers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('customer_name', 64);
            $table->text('description', 2048)->nullable();
            $table->unsignedSmallInteger('vote');
            $table->string('service', 64);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
