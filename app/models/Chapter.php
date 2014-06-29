<?php
class Chapter extends Eloquent {
  public function songs()
  {
      return $this->hasMany('Song');
  }
}
?>