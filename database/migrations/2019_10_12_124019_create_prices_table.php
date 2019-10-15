<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gifts_id')->unsigned()->nullable();

            $table->string('tariffname', 70);
            $table->string('slug')->unique();

            $table->string('disc_space', 100);
            $table->string('panel');
            $table->text('support');
            $table->string('php_versions', 100);
            $table->string('backup', 100);
            $table->string('val', 20)->nullable();
            $table->text('messages')->nullable();

            $table->integer('price')->unsigned();
            $table->integer('dom_subdom')->unsigned();
            $table->integer('ftp')->unsigned();
            $table->integer('db')->unsigned();
            $table->integer('emails')->unsigned();
            $table->integer('php_memory')->unsigned();

            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('gifts_id')->references('id')->on('gifts');

            $table->index('is_published');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
