<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLadminNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('ladmin_notifications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('link')->nullable();
            $table->string('image_link')->nullable();
            $table->string('description');
            $table->json('gates')->nullable();
            $table->timestamp('read_at')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('ladmin_notifications');
        Schema::enableForeignKeyConstraints();
    }
}
