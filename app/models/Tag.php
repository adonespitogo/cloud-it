<?php
class Tag extends Eloquent{

	public function post(){
		return $this->belongsTo('Post');
	} 
}
?>