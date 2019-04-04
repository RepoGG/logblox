<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kwalifikacja');
            $table->text('tresc_zadania');
            $table->string('odpowiedz_a');
            $table->string('odpowiedz_b');
            $table->string('odpowiedz_c');
            $table->string('odpowiedz_d');
            $table->char('poprawna_odpowiedz');
            $table->string('testimage')->nullable();
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
        Schema::dropIfExists('tests');
    }
}
