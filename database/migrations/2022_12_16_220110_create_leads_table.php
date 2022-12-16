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
            $table->uuid();
            $table->string('lead_id');
            $table->unsignedInteger('status')->nullable();
            $table->unsignedInteger('seller_motivation')->nullable();
            $table->unsignedInteger('selling_timeframe')->nullable();
            $table->unsignedInteger('exterior_cond')->nullable();
            $table->unsignedInteger('kitchen_cond')->nullable();
            $table->unsignedInteger('bathroom_cond')->nullable();
            $table->unsignedInteger('yard_cond')->nullable();
            $table->double('clearance_price', 12, 4)->nullable();
            $table->boolean('agent_listed')->default(0);
            $table->unsignedInteger('mortgage')->nullable();
            $table->unsignedInteger('house_type')->nullable();
            $table->string('constructed_year')->nullable();
            $table->double('square_footage')->default(0);
            $table->unsignedInteger('bedroom')->default(0);
            $table->unsignedInteger('bathroom')->default(0);
            $table->unsignedBigInteger('county_id');
            $table->timestamps();

            $table->foreign('county_id')->references('id')->on('counties');
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
