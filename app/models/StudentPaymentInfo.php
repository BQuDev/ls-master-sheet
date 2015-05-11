<?php

class StudentPaymentInfo extends \Eloquent {
    use SoftDeletingTrait;
    protected $fillable = [];
    protected $table = 'student_payment_infos';
}