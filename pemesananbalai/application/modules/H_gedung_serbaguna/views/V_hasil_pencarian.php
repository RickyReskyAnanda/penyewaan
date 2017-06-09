<?php  $alert='success';
	$waktu[0] = 'siang'; 
	$waktu[1] = 'sore'; 
	$waktu[2] = 'malam'; 
for ($a=0; $a < 3; $a++) { 
	for ($i=0; $i < count($data); $i++) {
		if($data[$i]['jam']==$waktu[$a]){
			$alert='danger';
			break;
		}else{
			$alert='success';
		}
	}?>
	<div class="col-sm-12">
	    <div class="alert alert-<?=$alert?> alert-dismissible" role="alert">
	        <strong><?php if($alert=='success'){?><input type="checkbox" name="f<?=$waktu[$a]?>" id="f<?=$waktu[$a]?>" value="<?=$waktu[$a]?>"><?php } echo "  ".ucfirst($waktu[$a])?></strong>
	    </div>
	</div>
<?php } ?>

