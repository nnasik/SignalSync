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
        Schema::create('channels', function (Blueprint $table) {
            $table->id();
            $table->string('tg_id');
            $table->string('tg_title');
            $table->string('tg_username');
            $table->string('name')->nullable();
            $table->string('app_alias')->nullable();
            $table->string('link')->nullable();
            $table->string('tg_dp')->nullable();
            $table->string('tg_status')->nullable();
            $table->string('system_action')->default('save');
            $table->integer('last_message_id')->nullable();
            $table->decimal('performance',3,2)->nullable();
            $table->decimal('accuracy',3,2)->nullable();
            $table->decimal('frequency',3,2)->nullable();
            $table->integer('month_total_signals')->nullable();
            $table->integer('open_signals')->nullable();
            $table->integer('month_tp_signals')->nullable();
            $table->integer('month_sl_signals')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('channels');
    }
};
