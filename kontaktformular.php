					<section id="intro_kontaktformular" class="kontaktformular row">
						<h5>Kontaktformular</h5>
						<hr>
						<i class="fa fa-chevron-down"></i>
					</section>

					<!-- Kontaktformular -->
					<form method="POST" action="" id="kontaktformular" enctype="multipart/form-data">
						<label for="Name">Name</label>
						<input class="u-full-width" type="text" id="Name" name="Name">
						<label for="Email">Email-Adresse</label>
						<input class="u-full-width" type="email" id="Email" name="Email">
						<label for="Betreff">Betreff</label>
						<input class="u-full-width" type="text" id="Betreff" name="Betreff">
						<label for="Nachricht">Nachricht</label>
						<textarea class="u-full-width" id="Nachricht" name="Nachricht"></textarea>

						<?php 
							$zahl1 = rand(1,9);
							$zahl2 = rand(1,9);
							$captcha_ergebnis = $zahl1+$zahl2;
						?>

						<label for="e_captcha"><?php echo $zahl1." + ".$zahl2." = "?></label>
						<input type="text" class="u-full-width" id="e_captcha" name="e_captcha">
						<label class="example-send-yourself-copy">
							<input type="checkbox" id="e_kopie" name="e_kopie">
							<span class="label-body">Kopie an mich selbst schicken</span>
						</label>
						<input class="button-primary" type="submit" id="e_Senden" name="e_Senden" value="Senden">
						<?php echo"<input type='hidden' name='captcha' value='".$captcha_ergebnis."'>";?>
					</form>