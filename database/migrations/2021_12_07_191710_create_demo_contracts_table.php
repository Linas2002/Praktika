<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemoContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demo_contracts', function (Blueprint $table) {
            $table->id();
            $table->string('clientID');
            $table->string('deviceS');
            $table->string('loanstart');
            $table->string('loandays');
            $table->string('loanend');
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
        Schema::dropIfExists('demo_contracts');
    }
}
