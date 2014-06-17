<!doctype html>
<html>
	<head>
		<title>Filmpje</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<div id="website">
			<header>
					<a href="index.html"><img src="img/header.jpg" /></a>
				<div id="nav">
					<ul>
						<li><a href="index.html" class="eerste">Home</a></li>
						<li><a href="films.html">Films</a></li>
						<li><a href="acties.html">Acties</a></li>						
						<li><a href="contact.php"  class="huidig">Contact</a></li>
					</ul>
				</div>
			</header>
			<div id="content">
				<div id="inhoudcontact">
				<h2>Contact</h2>
				<em>Telefoon:<br /></em> 010-1234567 <br /><br />
				<em>Email:</em> <a href="mailto:klantenservice@filmpje.nl"> klantenservice@filmpje.nl </a> <br /> <br />
				<em>Adres:</em><br /> West-Kruiskade 26 <br /> 3014 AS <br /> Rotterdam <br /><br />
				 
				Wij zijn makkelijk te bereiken met de auto. <br /><br />
				
				Wanneer u richting Rotterdam vanuit Amsterdam of Den haag rijdt komt u op de A13 terecht. Vanaf hier gaat u rechtsaf de Statenweg op. Deze volgt voor 1.3 km.<br />
				Hierna gaat u linksaf de 1e Middellandstraat op. U blijft deze volgen tot onze bioscoop.<br /><br />
				Mocht u met het openbaar vervoer komen, dan geven wij u <a href="https://maps.google.nl/maps?daddr=West-Kruiskade+26,+Deelgemeente+Centrum,+Rotterdam&hl=nl&sll=52.469397,5.509644&sspn=1.80039,5.410767&geocode=FS8_GAMd8TVEACkxnF33ozTERzE1zkhiDo_xaw&oq=West-kruiskade+26,+&dirflg=r&ttype=now&noexp=0&noal=0&sort=def&mra=ltm&t=m&z=8&start=0" target="_blank">deze link</a> om de route vanaf uw woonplaats te bepalen.
				</div>

				<div id="contactform">
        <h3>Contactformulier</h3>

            <?php
            session_start();
            // E-mailadres van de ontvanger
            $mail_ontv = 'filmpjett@gmail.com'; 

            // Speciale checks voor naam en e-mailadres
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                // naam controle
                if (!preg_match('/[ a-zA-Z-]$/', $_POST['naam']))
                    $naam_fout = 1;
                // e-mail controle
                if (function_exists('filter_var') && !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
                        $email_fout = 1;
                // antiflood controle
                if (!empty($_SESSION['antiflood']))
                {
                    $seconde = 20; // 20 seconden voordat dezelfde persoon nog een keer een e-mail mag versturen
                    $tijd = time() - $_SESSION['antiflood'];
                    if($tijd < $seconde)
                        $antiflood = 1;
                }
            }

            // Kijk of alle velden zijn ingevuld - naam mag alleen uit letters bestaan en het e-mailadres moet juist zijn
            if (($_SERVER['REQUEST_METHOD'] == 'POST' && (!empty($antiflood) || empty($_POST['naam']) || !empty($naam_fout) || empty($_POST['mail']) || !empty($email_fout) || empty($_POST['woonplaats']) || !empty($woonplaats_fout) || empty($_POST['bericht']) || empty($_POST['onderwerp']))) || $_SERVER['REQUEST_METHOD'] == 'GET')
            {
                if ($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                    if (!empty($naam_fout))
                        echo '<p id="foutmelding">Let op: U moet verplicht uw naam invullen en uw naam mag alleen letters bevatten.</p>';
                    elseif (!empty($email_fout))
                        echo '<p id="foutmelding">Let op: U bent verplicht om een geldig e-mailadres in te vullen.</p>';
                     elseif (!empty($woonplaats_fout))
                        echo '<p id="foutmelding">Let op: Uw woonplaats is niet juist ingevuld.</p>';    
                    elseif (!empty($antiflood))
                        echo '<p id="foutmelding">Let op: U mag slechts &eacute;&eacute;n bericht per ' . $seconde . ' seconde versturen.</p>';
                    else
                        echo '<p id="foutmelding">Let op: U bent uw naam, e-mailadres, onderwerp of bericht vergeten in te vullen.</p>';
                }
                    
              // HTML e-mail formlier
              echo '<form method="post" action="' . $_SERVER['REQUEST_URI'] . '" />
              <p>
              
                  <label for="naam">Naam</label><br />
                  <input type="text" id="naam" name="naam" value="' . (isset($_POST['naam']) ? htmlspecialchars($_POST['naam']) : '') . '" /><br />
                  
                  <label for="mail">E-mailadres</label><br />
                  <input type="text" id="mail" name="mail" value="' . (isset($_POST['mail']) ? htmlspecialchars($_POST['mail']) : '') . '" /><br />
                  
                  <label for="woonplaats">Woonplaats</label><br />
                  <input type="text" id="woonplaats" name="woonplaats" value="' . (isset($_POST['woonplaats']) ? htmlspecialchars($_POST['woonplaats']) : '') . '" /><br />
                  
                  <label for="onderwerp">Onderwerp</label><br />
                  <input type="text" id="onderwerp" name="onderwerp" value="' . (isset($_POST['onderwerp']) ? htmlspecialchars($_POST['onderwerp']) : '') . '" /><br />
                  
                  <label for="bericht">Bericht</label><br />
                  <textarea id="bericht" name="bericht" rows="8" style="width: 500px;">' . (isset($_POST['bericht']) ? htmlspecialchars($_POST['bericht']) : '') . '</textarea><br />
                  
                  <input type="submit" name="submit" value=" Versturen " />
              </p>
              </form>';
            }
            // versturen naar
            else
            {      
              // set datum
              $datum = date('d/m/Y H:i:s');
                
              $inhoud_mail .= "Ingevulde contactformulier via Filmpje.nl " . $_SERVER['HTTP_HOST'] . "\n";
              $inhoud_mail = "===================================================\n";
              $inhoud_mail .= "===================================================\n\n";
              
              $inhoud_mail .= "Naam: " . htmlspecialchars($_POST['naam']) . "\n";
              $inhoud_mail .= "E-mail adres: " . htmlspecialchars($_POST['mail']) . "\n";
              $inhoud_mail .= "Woonplaats: " . htmlspecialchars($_POST['woonplaats']) . "\n";
              $inhoud_mail .= "Bericht:\n";
              $inhoud_mail .= htmlspecialchars($_POST['bericht']) . "\n\n";
                
              $inhoud_mail .= "Verstuurd op " . $datum . " via het IP adres " . $_SERVER['REMOTE_ADDR'] . "\n\n";
                
              $inhoud_mail .= "===================================================\n\n";
              
              // --------------------
              // spambot protectie
              
              $headers = 'From: ' . htmlspecialchars($_POST['naam']) . ' <' . $_POST['mail'] . '>';
              
              $headers = stripslashes($headers);
              $headers = str_replace('\n', '', $headers); // Verwijder \n
              $headers = str_replace('\r', '', $headers); // Verwijder \r
              $headers = str_replace("\"", "\\\"", str_replace("\\", "\\\\", $headers)); // Slashes van quotes
              
              $_POST['onderwerp'] = str_replace('\n', '', $_POST['onderwerp']); // Verwijder \n
              $_POST['onderwerp'] = str_replace('\r', '', $_POST['onderwerp']); // Verwijder \r
              $_POST['onderwerp'] = str_replace("\"", "\\\"", str_replace("\\", "\\\\", $_POST['onderwerp'])); // Slashes van quotes
              
              if (mail($mail_ontv, $_POST['onderwerp'], $inhoud_mail, $headers))
              {
                  // zorg ervoor dat dezelfde persoon niet kan spammen
                  $_SESSION['antiflood'] = time();
                  
                  echo '<h1>Het contactformulier is verzonden</h1>
                  
                  <p>Bedankt voor het invullen van het contactformulier. Wij nemen, indien nodig, <br />zo spoedig mogelijk contact met u op.</p>';
              }
              else
              {
                  echo '<h1>Het contactformulier is niet verzonden</h1>
                  
                  <p><b>Onze excuses.</b> Het contactformulier kon niet verzonden worden.</p>';
              }
            }
            ?> 


				</div>

			</div>
			<div id="sidebarcontact">
				<!--<div id="topten">
				<em><strong>Contact:</strong></em><br /><br />
				<em>Telefoon:<br /></em> 010-1234567 <br /><br />
				<em>email:</em> <a href="mailto:klantenservice@filmpje.nl"> klantenservice@filmpje.nl </a> <br /> <br />
				<em>Adres:</em><br /> West-Kruiskade 26 <br /> 3014 AS <br /> Rotterdam
				</div>	-->
				<div id="location">
				<iframe width="240" height="240" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.nl/maps?f=q&amp;source=s_q&amp;hl=nl&amp;geocode=+&amp;q=West-Kruiskade+26&amp;ie=UTF8&amp;hq=&amp;hnear=Kruiskade+26,+Centrum,+Rotterdam,+Zuid-Holland&amp;t=m&amp;ll=51.923361,4.477015&amp;spn=0.01588,0.025749&amp;z=14&amp;output=embed&iwloc=near"></iframe>
				</div>
			</div>
			<footer>
				<p>&copy;2012 Filmpje.nl. All rights reserved. - Realisation: TT</p>
			</footer>
		</div>
	</body>
</html>