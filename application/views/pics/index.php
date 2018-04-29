<?php
//application/views/news/index.php

$this->load->view($this->config->item('theme') . 'header');

?>
<h2><?=$this->config->item('banner')?></h2>

<div class="content-container">
<?php
if($pics !== false){
foreach($pics->photos->photo as $pic) {
  $size = 'm';
  $photo_url = '
  http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

  echo '
  <div class="photo-container col-md-3">
  <img title="' . $pic->title . '" src="' . $photo_url . '" />
  <p>' . $pic->title . '</p>
  </div>';
  }

}
?>

</div>

<?php
$this->load->view($this->config->item('theme') . 'footer');
?>