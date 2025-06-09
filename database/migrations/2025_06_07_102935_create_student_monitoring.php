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
        Schema::create('academic_years', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name'); // Contoh: 2023/2024
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('semesters', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('academic_year_id');
            $table->enum('type', ['Ganjil', 'Genap']);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('academic_year_id')->references('id')->on('academic_years')->onDelete('cascade');
        });

        Schema::create('class_groups', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('grade');
            $table->uuid('semester_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade');
        });

        Schema::create('students', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->unique();
            $table->string('nisn')->unique();
            $table->date('birth_date');
            $table->string('gender');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('class_group_student', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('class_group_id');
            $table->uuid('student_id');
            $table->uuid('semester_id');
            $table->unsignedTinyInteger('student_semester_number');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('class_group_id')->references('id')->on('class_groups')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade');
        });

        Schema::create('teachers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->unique();
            $table->string('nip')->nullable();
            $table->string('gender');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('class_group_teacher', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('class_group_id');
            $table->uuid('teacher_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('class_group_id')->references('id')->on('class_groups')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
        });

        Schema::create('subjects', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('code')->unique();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('subject_teacher_class_group', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('subject_id');
            $table->uuid('teacher_id');
            $table->uuid('class_group_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('class_group_id')->references('id')->on('class_groups')->onDelete('cascade');
        });

        Schema::create('assessment_components', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->unsignedTinyInteger('weight');
            $table->uuid('subject_teacher_class_group_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('subject_teacher_class_group_id')->references('id')->on('subject_teacher_class_group')->onDelete('cascade');
        });

        Schema::create('assessments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('assessment_component_id');
            $table->uuid('student_id');
            $table->uuid('semester_id');
            $table->float('score');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('assessment_component_id')->references('id')->on('assessment_components')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade');
        });

        Schema::create('report_cards', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('student_id');
            $table->uuid('subject_teacher_class_group_id');
            $table->uuid('semester_id');
            $table->float('final_score');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('subject_teacher_class_group_id')->references('id')->on('subject_teacher_class_group')->onDelete('cascade');
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade');
        });

        Schema::create('attendances', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('student_id');
            $table->uuid('class_group_id');
            $table->uuid('semester_id');
            $table->date('date');
            $table->enum('status', ['present', 'sick', 'permit', 'absent']);
            $table->text('note')->nullable();
            $table->uuid('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('class_group_id')->references('id')->on('class_groups')->onDelete('cascade');
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade');
        });

        Schema::create('excuse_letters', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('student_id');
            $table->uuid('submitted_by');
            $table->uuid('semester_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('reason');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->uuid('reviewed_by')->nullable();
            $table->timestamp('reviewed_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('submitted_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade');
        });

        Schema::create('guardian_student', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->uuid('student_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('guardian_student');
        Schema::dropIfExists('excuse_letters');
        Schema::dropIfExists('attendances');
        Schema::dropIfExists('report_cards');
        Schema::dropIfExists('assessments');
        Schema::dropIfExists('assessment_components');
        Schema::dropIfExists('subject_teacher_class_group');
        Schema::dropIfExists('teachers');
        Schema::dropIfExists('subjects');
        Schema::dropIfExists('class_group_teacher');
        Schema::dropIfExists('class_group_student');
        Schema::dropIfExists('students');
        Schema::dropIfExists('class_groups');
        Schema::dropIfExists('semesters');
        Schema::dropIfExists('academic_years');
    }
};
