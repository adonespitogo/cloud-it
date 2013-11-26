<?php
class Post extends Eloquent{

	public function tags(){
		return $this->hasMany('Tag');
	} 	
	public function user(){
		return $this->belongsTo('User');
	} 
}
?>