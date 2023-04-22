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
        Schema::create('message1s', function (Blueprint $table) {
            $table->id();
            $table->string('my_email')->nullable;
            $table->string('user_email')->nullable;
              $table->string('my_message')->nullable;
                $table->string('user_message')->nullable;
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
        Schema::dropIfExists('message1s');
    }
};
