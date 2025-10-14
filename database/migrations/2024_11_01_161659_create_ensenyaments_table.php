<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::disableForeignKeyConstraints();

    Schema::create('ensenyaments', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->string('nom');
    });

    Schema::enableForeignKeyConstraints();
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::disableForeignKeyConstraints();
    Schema::dropIfExists('ensenyaments');
    Schema::enableForeignKeyConstraints();
}
};
