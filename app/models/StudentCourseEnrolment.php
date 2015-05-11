<?php

class StudentCourseEnrolment extends \Eloquent {
    use SoftDeletingTrait;
	protected $fillable = [];
    protected $table = 'student_course_enrolments';
}