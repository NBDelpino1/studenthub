<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('assignmentTitle');
            $table->text('assignmentDifficulty');
            $table->text('assignmentLink');
            $table->text('assignmentDate');
            $table->text('assignmentDue');
            $table->text('assignmentCmplTime');
            $table->text('assignmentResources');
            $table->text('assignmentSubmission');
            $table->boolean('assignmentStatus');
            $table->text('assignmentGrade');
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
        Schema::dropIfExists('assignments');
    }
}
