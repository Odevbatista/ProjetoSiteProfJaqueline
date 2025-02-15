<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::table('cursos', function (Blueprint $table) {
        if (!Schema::hasColumn('cursos', 'professor_nome')) {
            $table->string('professor_nome')->after('titulo');
        }
        if (!Schema::hasColumn('cursos', 'carga_horaria')) {
            $table->integer('carga_horaria')->after('professor_nome');
        }
        if (!Schema::hasColumn('cursos', 'certificado')) {
            $table->string('certificado')->after('descricao')->default('Não');
        }
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cursos', function (Blueprint $table) {
            //
        });
    }
};
