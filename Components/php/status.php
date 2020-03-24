<?php if(count($status) > 0) {?>
	<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
		<?php foreach ($status as $state) {?>
			<p><?php echo $state; ?></p>
		<?php }?>
	</h2></div>
<?php }?>