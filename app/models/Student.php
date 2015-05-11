<?php

class Student extends \Eloquent {
    use SoftDeletingTrait;
    protected $fillable = [];
    protected $table = 'students';
}