<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->integer('type_id')->nullable();
            $table->integer('type')->comment('1=event,2=professtional,3=articleship,4=contact,5=pdf_download');
            $table->string('type_name')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('image')->nullable();
            $table->string('others')->nullable();
            $table->string('doc_file')->nullable();
            $table->unsignedBigInteger('subcat_id')->nullable();
            $table->unsignedBigInteger('cats_id')->nullable();
            $table->timestamps();
            $table->foreign('cats_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcat_id')->references('id')->on('sub_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
};
