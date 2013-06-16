<? echo form_open('customer/create')?>
		
		<fieldset>
			<? echo validation_errors(); ?>
		
			<h2>1. enter order details</h2>
			
			<div class="control-group" id="shirt_quantity">
			  <label class="control-label" for="inputIcon">shirt quantity</label>
			  <div class="controls">
			    <div class="input-prepend">
			      <span class="add-on"><i class="icon-tasks"></i></span>
			      <input class="span1" id="input_shirt_quantity" name="shirtquantity" type="text" value="<?php echo set_value('shirtquantity'); ?>">
			    </div>
			  </div>
			</div>
			
			<div class="control-group" id="number_colors">
			  <label class="control-label" for="inputIcon">number of colors</label>
			  <div class="controls">
			    <div class="input-prepend">
			      <span class="add-on"><i class="icon-tint"></i></span>
			      <input class="span1" id="input_front_colors" name="frontcolors" placeholder="front" type="text" value="<?php echo set_value('frontcolors'); ?>">
			    </div>
				<div class="input-prepend">
			      <span class="add-on"><i class="icon-tint"></i></span>
			      <input class="span1" id="input_back_colors" name="backcolors" placeholder="back" type="text" value="<?php echo set_value('backcolors'); ?>">
			    </div>
				<div class="input-prepend">
			      <span class="add-on"><i class="icon-tint"></i></span>
			      <input class="span1" id="input_sleeve_colors" name="sleevecolors" placeholder="sleeve" type="text" value="<?php echo set_value('sleevecolors'); ?>">
			    </div>
			  </div>
			</div>
			
			<div class="control-group" id="shirt_type">
			  <label class="control-label" for="inputIcon">shirt type</label>
			  <div class="controls">
				  <select id="input_shirt_type" name="shirttype" value="<?php echo set_value('shirttype'); ?>">
				  	<?
				  	if(isset($shirt_types))
					{
						foreach($shirt_types as $type)
						{
							echo '<option value="' . $type['id'] . '">' . $type['vendor'] . ' ' . $type['model'] . '</option>';
						}	
					}
				  	?>
				  </select>
			  </div>
			</div>
			
			<div class="control-group" id="shirt_color">
			  <label class="control-label" for="inputIcon">shirt color</label>
			  <div class="controls">
				  <select id="input_shirt_color" name="shirtcolor" value="<?php echo set_value('shirtcolor'); ?>">
				  	<option>white</option>
				  	<option>colored</option>
				  </select>
			  </div>
			</div>
			
			<div class="control-group" id="pocket_print">
			  <label class="control-label" for="inputIcon">pocket print</label>
			  <div class="controls">
				  <select id="input_pocket_print" name="pocketprint" value="<?php echo set_value('pocketprint'); ?>">
				  	<option>no</option>
				  	<option>yes</option>
				  </select>
			  </div>
			</div>
			
			<div class="control-group" id="custom_tags">
			  <label class="control-label" for="inputIcon">custom tags</label>
			  <div class="controls">
				  <select id="input_custom_tags" name="customtags" value="<?php echo set_value('customtags'); ?>">
				  	<option>no</option>
				  	<option>printed tag</option>
					<option>sewn tag</option>
				  </select>
			  </div>
			</div>
			
			<? //show fields for login form if user is not logged in
			if(!$this->user){?>
		
			<h2>2. create an account</h2>
			
			<div class="control-group">
			  <label class="control-label" for="inputIcon">first name</label>
			  <div class="controls">
			    <div class="input-prepend">
			      <span class="add-on"><i class="icon-user"></i></span>
			      <input class="span3" id="input_first_name" name="firstname" type="text" value="<?php echo set_value('firstname'); ?>">
			    </div>
			  </div>
			</div>
			
			<div class="control-group">
			  <label class="control-label" for="inputIcon">last name</label>
			  <div class="controls">
			    <div class="input-prepend">
			      <span class="add-on"><i class="icon-user"></i></span>
			      <input class="span3" id="input_last_name" name="lastname" type="text" value="<?php echo set_value('lastname'); ?>">
			    </div>
			  </div>
			</div>
			
			<div class="control-group">
			  <label class="control-label" for="inputIcon">email</label>
			  <div class="controls">
			    <div class="input-prepend">
			      <span class="add-on"><i class="icon-envelope"></i></span>
			      <input class="span3" id="input_email" name="email" type="text" value="<?php echo set_value('email'); ?>">
			    </div>
			  </div>
			</div>
		
			<div class="control-group">
			  <label class="control-label" for="inputIcon">password</label>
			  <div class="controls">
			    <div class="input-prepend">
			      <span class="add-on"><i class="icon-lock"></i></span>
			      <input class="span3" id="input_password" name="password" type="password">
			    </div>
			  </div>
			</div>
			
			<div class="control-group">
			  <label class="control-label" for="inputIcon">confirm password</label>
			  <div class="controls">
			    <div class="input-prepend">
			      <span class="add-on"><i class="icon-lock"></i></span>
			      <input class="span3" id="input_confirm_password" name="confirmpassword" type="password">
			    </div>
			  </div>
			</div>
			<?}
			else echo 'someone is logged in';?>
			
			<button type="submit" class="btn btn-primary">Submit</button>
		
		</fieldset>
</form>
