<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommends', function (Blueprint $table) {
            $table->id();
            $table->string('nitrogen', 100);
            $table->string('phosphorus', 100);
            $table->string('potassium', 100);
            $table->string('temperature', 100);
            $table->string('humidity', 100);
            $table->string('ph', 100);
            $table->string('rainfall', 100);
            $table->string("label",100);
            $table->string('location', 100);
            $table->foreignIdFor(User::class,"user_id") ;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('recommends');
    }
}
