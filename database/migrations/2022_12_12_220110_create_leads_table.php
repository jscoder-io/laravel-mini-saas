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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('lead_id');
            $table->string('seller_motivation');
            $table->string('selling_timeframe');
            $table->string('exterior_cond');
            $table->string('kitchen_cond');
            $table->string('bathroom_cond');
            $table->string('yard_cond');
            $table->double('price', 12, 4);
            $table->boolean('agent_listed');
            $table->boolean('mortgage');
            $table->string('house_type');
            $table->string('constructed_year');
            $table->double('square_footage');
            $table->unsignedInteger('bedroom');
            $table->unsignedInteger('bathroom');
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
        Schema::dropIfExists('leads');
    }
};
