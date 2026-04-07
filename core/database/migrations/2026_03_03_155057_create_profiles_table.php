<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {

            $table->id();

            // user relation
            $table->foreignId('user_id')
                  ->nullable()
                  ->constrained()
                  ->cascadeOnDelete();

            /*
            |----------------------------------------------------------------------
            | Personal Information
            |----------------------------------------------------------------------
            */

            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('image')->nullable();

            /*
            |----------------------------------------------------------------------
            | Contact Information
            |----------------------------------------------------------------------
            */

            $table->string('number',20)->nullable();
            $table->string('email')->nullable();
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->text('current_address')->nullable();
            $table->text('permanent_address')->nullable();

            /*
            |----------------------------------------------------------------------
            | Education
            |----------------------------------------------------------------------
            */

            $table->string('ssc_board')->nullable();
            $table->string('ssc_result')->nullable();
            $table->string('ssc_year')->nullable();

            $table->string('hsc_result')->nullable();

            $table->string('bachelor_degree')->nullable();
            $table->string('master_degree')->nullable();

            $table->string('subject_major')->nullable();

            /*
            |----------------------------------------------------------------------
            | Teaching Information
            |----------------------------------------------------------------------
            */

            $table->json('preferred_subject')->nullable(); // <-- multi-select support
            $table->json('preferred_class')->nullable();
            $table->integer('experience')->nullable();
            $table->string('previous_school')->nullable();
            $table->decimal('salary', 10, 2)->nullable();

            $table->timestamps();

            $table->string('status')->default('pending');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }

};