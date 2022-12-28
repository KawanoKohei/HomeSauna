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
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prefecture_id')->constrained();  
            $table->string('name', 100);
            $table->string('postal_code', 10);
            $table->string('address', 100);
            $table->string('opening_hour', 50);
            $table->string('closing_hour', 50);
            $table->string('saunaikitai_url', 2000);
            $table->string('hp_url', 2000);
            $table->string('image_path', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facilities');
    }
};
