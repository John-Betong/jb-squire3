<?php declare(strict_types=1);

function contact_modalRun($data, $id) {

	echo '
	<!-- form -->	
		<fieldset>
			<label>
				Your Name:<br>
				<input type="text" name="name" required><br>
			</label><label>
				Your E-mail Address:<br>
				<input type="email" name="email" required><br>
			</label><label>
				Subject:<br>
				<input type="text" name="subject" required><br>
			</label><label>
				Message:<br>
				<textarea name="message" required></textarea><br>
			</label>
		</fieldset>
		<!-- /form -->
		';
	template_submitsAndHiddens($id, 'Send Message');
	
}