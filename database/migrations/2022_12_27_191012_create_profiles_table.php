
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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();   
            $table->foreignId('facility_id')->constrained();   
            $table->foreignId('restaurant_id')->constrained();   
            $table->foreignId('dish_id')->constrained();
            $table->string('home_sauna', 2000);
            $table->string('age', 10);
            $table->string('sex', 10);
            $table->string('image_path', 200);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
