<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('invoices', function(Blueprint $table) {
                $table->increments('id');
                $table->date('date');
$table->text('description');
$table->integer('job_id');
$table->integer('estimate_id');
$table->string('house');
$table->string('street');
$table->string('town');
$table->string('county');
$table->string('postcode');
$table->text('items');
$table->text('materials');
$table->float('items_price');
$table->float('materials_price');

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
        Schema::drop('invoices');
    }

}
