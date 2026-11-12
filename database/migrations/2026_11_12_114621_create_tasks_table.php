<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('tasks', function (Blueprint $table) {
        $table->id();
        $table->string('task_id')->unique();
        $table->string('task_title');
        $table->text('task_description')->nullable();
        $table->string('assigned_person');
        $table->string('department');
        $table->string('category');
        $table->string('priority_level');
        $table->date('date_assigned');
        $table->date('start_date');
        $table->date('due_date');
        $table->string('status')->default('Pending');
        $table->text('remarks')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
