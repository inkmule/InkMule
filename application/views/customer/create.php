<? echo form_open('customer/create')?>
		
		<fieldset>
		    <legend>create an account</legend>
		
			<? echo validation_errors(); ?>
		
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

			<button type="submit" class="btn btn-primary">Submit</button>
		
		</fieldset>
</form>
