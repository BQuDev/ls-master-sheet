<?php

class Student extends \Eloquent {
    use SoftDeletingTrait;
    protected $fillable = [];
    protected $table = 'students';
	
	public function lastRecordBySAN($san) {
        return DB::table('students')->where('san','=',$san)->orderBy('id', 'desc')->first();
    }
}