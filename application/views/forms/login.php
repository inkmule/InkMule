<div class="hero-unit">
	
	<? echo form_open('auth/login')?>
		
	<fieldset>
		<legend>login</legend>
	
		<div class="control-group">
		  <label class="control-label" for="inputIcon">email</label>
		  <div class="controls">
		    <div class="input-prepend">
		      <span class="add-on"><i class="icon-envelope"></i></span>
		      <input class="span3" id="input_email" name="email" type="text">
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
	
		<button type="submit" class="btn btn-primary">Submit</button>
	
	</fieldset>
	
	</form>
	
</div>