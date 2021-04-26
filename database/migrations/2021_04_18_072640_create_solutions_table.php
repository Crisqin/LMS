<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('solution_text');
            $table->enum('solution_statue',['submitted','evaluated']);
            $table->string('student_name')->nullable();
            $table->decimal('points')->nullable();
            $table->date('evaluated_at')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('tasks_id');

            $table->foreign('tasks_id')->references('id')->on('tasks')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solutions');
    }
}
