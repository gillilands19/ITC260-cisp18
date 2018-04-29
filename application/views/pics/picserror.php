<?php
//application/views/news/index.php

$this->load->view($this->config->item('theme') . 'header');

?>
<h2><?=$this->config->item('banner')?></h2>

<div class="content-container">
<p>Not on approved list of searches</p>


<?php
$this->load->view($this->config->item('theme') . 'footer');
?>