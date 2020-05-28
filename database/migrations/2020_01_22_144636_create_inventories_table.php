<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Voucher_reference')->nullable();
            $table->string('Item')->nullable();
            $table->string('Qty')->nullable();
            $table->string('Category')->nullable();
            $table->integer('Funded_by')->nullable();
            $table->integer('supplier_id')->nullable();
            $table->string('Model_serial')->nullable();
            $table->string('Date_purchase')->nullable();
            $table->string('Currency')->nullable();
            $table->integer('Price')->nullable();
            $table->integer('Total')->nullable();
            $table->string('Region_file')->nullable();
            $table->string('Asset_condition')->nullable();
            $table->string('Tag')->nullable();
            $table->string('As_per_record')->nullable();
            $table->string('Verified')->nullable();
            $table->string('Difference')->nullable();
            $table->text('Remarks')->nullable();
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
        Schema::dropIfExists('inventories');
    }
}
