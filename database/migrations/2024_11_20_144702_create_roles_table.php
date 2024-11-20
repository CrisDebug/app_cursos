<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); 
            $table->string('slug')->unique();
            $table->text('descripcion')->nullable();
            $table->boolean('is_active')->default(true);            
            $table->unsignedBigInteger('created_by')->nullable();//atributos en relacion a user
            $table->unsignedBigInteger('updated_by')->nullable();//ultimo ususario en actualizar            
            $table->timestamps();


            //relaciones con users
            $table->foreign('created_by')->references('id')->on('users')->nullOnDelete();
            $table->foreign('updated_by')->references('id')->on('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
