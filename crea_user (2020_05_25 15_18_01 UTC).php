<?php
session_start();
include ('function.php');
	echo"<html>";
	head();
	echo"<body>
		<div id='container'>";
			headernav();
			echo"<div id='colonna2'><center> Inserisci un nuovo utente </center><br>";
			if(isset($_REQUEST["errore"])) {
				if($_REQUEST["errore"] == "duplicato") {
					echo"<CENTER> Lo username inserito è già in uso </CENTER><br>";
				}
				elseif($_REQUEST['errore'] == "parametri") {
					echo"<CENTER> Dati mancanti, riprova! </CENTER><br>";
				}
			}
			echo"<form action='update_user.php' method='POST'>
					TIPO: <select name='tipo'>
                <option value='ADMIN'> ADMIN </option>
                <option value='USER'> USER </option>
                </select> <br><br>
					NOME: <input type='text' name='Nome'> <br><br>
					COGNOME: <input type='text' name='Cognome'> <br><br>
					USERNAME: <input type='text' name='Username'> <br><br>
					PASSWORD: <input type='password' name='password'> <br><br>
					<input type='submit' value='Registra'>
				</form>
			</div>";
			footer();
		echo"</div>
	</body>
</html>";
?>