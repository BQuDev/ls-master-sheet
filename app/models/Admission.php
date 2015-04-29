<?php

class Admission extends \Eloquent {
	protected $fillable = ['student_id','title','first_name','name_2','surname','uk_street','uk_city','uk_postel_code','uk_mobile','uk_lamd_line','nationality',
        'origin_street','origin_city','origin_postal_code','origin_country','date_of_birth','mobile','land_line','email',
        'facebook','twitter','linkedin','other'];
}