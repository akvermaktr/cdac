<?php $i =0 ?>
<?php foreach ($rows as $id => $row): ?>
<?php 
if($i == 0 ) {
 print "<div class='abhi carousel-item  active'>"  . $row . "</div>"; 
}else {

print "<div class='abhi2 carousel-item '>"  . $row . "</div>"; 
}
?>

  <?php $i++ ; ?>
<?php endforeach; ?>