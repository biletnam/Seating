<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php 

$row = 50;
$column = 30;

?>


<div style="width: 300px; border: 2px solid; margin: 0 auto;">
<h3 align="center">Center Stage</h3>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>

<table>

<?php for ($i=1; $i <= $row; $i++) {  ?>
	<tr> <td>Row: <?php echo $i ?>&nbsp;</td> <?php 

	for ($j=1; $j <= $column; $j++) {  ?>
		<td> 
			<img id="<?php echo "row" . $i . "column" . $j ?>" src="armchair.png" width="30px" height="30px" /> 
		</td>
	<?php } ?> 
	</tr>
<?php } ?>
	

</table>

<script>

$( "img" ).click(function() {
	var cuba = event.target.id;
  alert( "So you choose: " + cuba );

  if ($(this).attr('src') == 'filled.png') {
  	$(this).attr( "src", "armchair.png" );
  }

  $(this).attr( "src", "filled.png" );

});

</script>