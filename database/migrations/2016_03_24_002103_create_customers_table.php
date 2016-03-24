<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('customers', function(Blueprint $table) {
                $table->increments('id');
                $table->string('title');
$table->string('forename');
$table->string('surname');
$table->string('house');
$table->string('street');
$table->string('town');
$table->string('county');
$table->string('postcode');
$table->string('telephone');
$table->string('email');

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
        Schema::drop('customers');
    }

}
