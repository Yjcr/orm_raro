<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('project', function(Blueprint $table){
            $table->id();

            $table->foreignId("city_id")->constrained('cities', 'id');
            $table->foreignId('company_id')->constrained('companies','id');
            $table->foreignId('user_id')->constrained('users','id');
            $table->string('name')->nullable();
            $table->date('execution_date')->nullable();
            $table->boolean('is_active')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
