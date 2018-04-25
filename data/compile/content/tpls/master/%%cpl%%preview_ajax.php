	        	<?php $fid = 0;
 foreach($this->tpl_var['forms'] as $key => $form){ 
 $fid++; ?>
				<div class="form-group">
					<label for="<?php echo $form['id']; ?>" class="control-label col-sm-2"><?php echo $form['title']; ?></label>
					<div class="col-sm-9"><?php echo $form['html']; ?></div>
				</div>
				<?php } ?>