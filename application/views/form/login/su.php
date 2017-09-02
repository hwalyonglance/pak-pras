<?php $this->load->view('_atas');?>
<?=form_open('auth/su')?>
	<div class="row">
		<div class="col s6 m6 l4 xl4 push-s3 push-m3 push-l4 push-xl4">
			<div class="card blue-grey darken-3">
				<div class="card-content white-text">
					<span class="card-title">Authenticate</span>
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">account_circle</i>
							<input id="username" type="text" name="u" class="validate">
							<label for="username">Username</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">lock</i>
							<input id="pw" type="password" name="p" class="validate">
							<label for="pw">Password</label>
						</div>
					</div>
					<?php
						if($this->session->userdata('wrong_pw0')) {
							?>
							<div class="row">
								<div class="col s12 small yellow-text accent-2">
									username/password salah.
								</div>
							</div>
							<?php
						}
					?>
				</div>
				<div class="card-action" style="height: 64px">
					<button class="btn right purple lighten-1 waves-effect waves-light">Submit</button>
				</div>
			</div>
		</div>
	</div>
</form>
