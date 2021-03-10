<div class="post post-create">
	
	<?php _e( $block_post_type, false) ?>

	<div class="post-content m-b-15">
		
		<div class="item-post-type" data-type="photo">
			<?php _e( $file_manager_photo, false) ?>
		</div>

		<?php _e( $block_caption, false)?>

		<div class="post-advance m-t-15">
			<ul class="nav nav-tabs">
			  	<li class="nav-item">
			    	<a class="nav-link active" href="#"><i class="fas fa-magic text-info"></i> <?php _e("Advance option")?> <span class="arrow"><i class="ft-chevron-down"></i></span></a>
			  	</li>
			</ul>
			<div class="advance-content">
				<div class="form-group widget-location">
					<div class="form-group">
                        <label><?php _e('Call To Action')?></label>
                        <select name="advance[call_to_action]" class="form-control">
                            <option value="LEARN_MORE"><?php _e('Learn more')?></option>
                            <option value="BOOK"><?php _e('Book')?></option>
                            <option value="ORDER"><?php _e('Order online')?></option>
                            <option value="SHOP"><?php _e('Shop')?></option>
                            <option value="SIGN_UP"><?php _e('Sign up')?></option>
                        </select>
                    </div>
				</div>
				<div class="form-group">
                    <input type="text" class="form-control" name="advance[link]" value="" placeholder="<?php _e('Enter your link')?>">
                </div>
			</div>
		</div>

	</div>

	<?php _e( $block_schedule, false)?>

</div>