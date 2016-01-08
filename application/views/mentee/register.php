<?php $this->load->view("template/header");?>

<form class="form-horizontal" method="POST" action="<?php echo base_url()?>mentee/register/post">
	<fieldset>

		<!-- Form Name -->
		<legend>Register Mentee</legend>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="fn">Nama</label>  
			<div class="col-md-4">
				<input name="name" type="text" placeholder="Nama Lengkap" class="form-control input-md" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="ln">Usia</label>  
			<div class="col-md-4">
				<input name="age" type="text" placeholder="age" class="form-control input-md" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="cmpny">Interest</label>  
			<div class="col-md-4">
				<input name="interest" type="text" placeholder="interest" class="form-control input-md" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="email">Email</label>  
			<div class="col-md-4">
				<input id="email" name="email" type="text" placeholder="email" class="form-control input-md" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="add1">Nomor HP</label>  
			<div class="col-md-4">
				<input name="hp" type="text" placeholder="Nomor Handphone" class="form-control input-md" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" >Alamat</label>  
			<div class="col-md-4">
				<textarea name="address" type="text" placeholder="" class="form-control input-md"> </textarea> 

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="city">Kegiatan</label>  
			<div class="col-md-4">
				<textarea name="activity" type="text" class="form-control input-md" required=""></textarea>

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="zip">Facebook</label>  
			<div class="col-md-4">
				<input name="facebook" type="text" placeholder="https://www.facebook.com/username" class="form-control input-md" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="ctry">Quote</label>  
			<div class="col-md-4">
				<input name="quote" type="text" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit" class="form-control input-md" required="">

			</div>
		</div>



		<!-- Multiple Radios (inline) -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="Training">Program Studi</label>
			<div class="col-md-4"> 
				<label class="radio-inline" for="Training-0">
					<input type="radio" name="class_prefix" id="Training-0" value="iis" checked="checked">
					IIS
				</label> 
				<label class="radio-inline" for="Training-1">
					<input type="radio" name="class_prefix" id="Training-1" value="mia">
					MIA
				</label>
			</div>
		</div>
		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="phone">Kelas</label>  
			<div class="col-md-4">
				<input id="class" name="class" type="text" placeholder="3" class="form-control input-md" required="">

			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label" for="phone">Tahun Ajaran</label>  
			<div class="col-md-4">
				<input id="class" name="school_year" type="text" placeholder="2016" class="form-control input-md" required="">

			</div>
		</div>

		<!-- Select Basic -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="selectbasic">Grup Mentoring</label>
			<div class="col-md-4">
				<select id="selectbasic" name="id_mentor_group" class="form-control input-md">
					<option value="-1">Belum ada</option>
				</select>
			</div>
		</div>

		<!-- Button -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="submit"></label>
			<div class="col-md-4">
				<button id="submit" class="btn btn-primary">Register</button>
			</div>
		</div>

	</fieldset>
</form>
<?php $this->load->view("template/footer");?>
