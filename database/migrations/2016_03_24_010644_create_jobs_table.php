<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('jobs', function(Blueprint $table) {
                $table->increments('id');
                $table->date('date');
                $table->text('description');
                $table->integer('customer_id');
                $table->string('house');
                $table->string('street');
                $table->string('town');
                $table->string('county');
                $table->string('postcode');
                $table->text('items');
                $table->text('materials');
                $table->integer('status');
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
        Schema::drop('jobs');
    }

}
