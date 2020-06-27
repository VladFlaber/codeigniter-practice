<?php 
echo '<h2>'.$title.'</h2>';
echo "<table class='table'>";
$this->load->view('header');

foreach($items as $c)
{
echo '<tr>';
echo '<td>'.$c['name'].'</td>';
echo '<td>'.$c['price'].'</td>';
echo '<td>'.$c['rating'].'</td>';
echo '<td>'.$c['description'].'</td>';
echo '</tr>';
}
echo '</table>';


$this->load->view('footer');

 ?>