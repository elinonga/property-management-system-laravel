<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->integer('area');
            $table->text('desc');
            $table->integer('price');
            $table->string('price_label');
            $table->enum('status', ['Sale', 'Open house', 'Rent', 'Sold']);
            $table->enum('type', ['Apartment', 'Co-op', 'Condo', 'Single Family Home']);
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('lot_area');
            $table->integer('year_built');
            $table->string('flooring');
            $table->string('garage_size');
            $table->string('roofling');
            $table->integer('parking');
            $table->string('style');
            $table->string('address');
            $table->enum('location', ['New Jersey', 'New York']);
            $table->enum('sub_location', ['Central New York', 'GreenVille', 'Long Island', 'New York City', 'West Side']);
            $table->string('long');
            $table->string('lat');
            $table->string('video')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
