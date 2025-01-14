<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        if (!Schema::hasTable('reparations')) {
            Schema::create('reparations', function (Blueprint $table) {
                $table->id();
                $table->foreignId('car_id')->constrained();
                $table->string('status');
                $table->foreignId('mechanic_id')->constrained();
                $table->timestamps();
            });
        }
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reparations');
    }
};
