<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->id();
            $table->string('FullName');
            $table->string('email');
            $table->string('userName');
            $table->string('password');
            $table->date('Dob');
            $table->enum('gender',["male","female","Other"]);
            $table->string('country');
            $table->varchar('PhnNo');
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('registration');
    }
};
