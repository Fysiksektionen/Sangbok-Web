<?php
class Song extends Eloquent {
  public function chapter() {
      return $this->belongsTo('Chapter');
  }
}
?>