<?php
$this->load->view('header');
echo '<script src="//maps.googleapis.com/maps/api/
js?key=AIzaSyA2cRJlSeK9e8l1c1BHRnW9IuGjgXCPNVc"
async="" defer="defer" type="text/
javascript"></script>';
echo "<div class='col-md-offset-2 col-md-10'>";
echo $map['js'];
echo $map['html'];
echo "</div>";
$this->load->view('footer');
