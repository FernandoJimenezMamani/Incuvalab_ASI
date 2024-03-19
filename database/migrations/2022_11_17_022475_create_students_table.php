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
        Schema::create('students', function (Blueprint $table) {
            $table->unsignedBigInteger('idUser');
            $table->unsignedBigInteger('idTeam');
        
            $table->primary(['idUser']);
        
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade')->onUpdate('no action');
            $table->foreign('idTeam')->references('id')->on('teams')->onDelete('cascade')->onUpdate('no action');
            $table->timestamps();

            /*Syntax error or access violation: 1072 Key column 'idTeam' doesn't exist in table (SQL: alter table `students` add constraint `students_idteam_foreign` foreign key (`idTeam`) references `teams` (`id`) on delete cascade on update no action) */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
