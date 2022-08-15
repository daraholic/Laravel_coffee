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
        Schema::create('Parameter', function (Blueprint $table) {
            $table->bigIncrements('id',20);
            $table->integer('gram');
            $table->integer('water');
            $table->integer('brewRatio');
            $table->integer('time');
            $table->integer('bean_id')->unsigned();
            $table->index('bean_id')->references('id')->on('Beans');
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
        Schema::dropIfExists('Parameter');
    }
};
