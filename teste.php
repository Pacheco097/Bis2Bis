<form>
		Insira a pontuacao (Separado por ":"): <input type="text" name="joga">
		<input type="submit" name="enviar">		
</form>

<?php 

if (isset($_GET)) {
	
	foreach ($_GET as $key => $value) {

		list($jogadora,$jogadorb)=explode(':', $value);
		$jogador = $jogadora + $jogadorb;

		$nova = ($jogador >= 40 ? 2 : 5);

		if ($jogador < 5) {
			echo "Saca Jogador A";
			echo "</br> $jogador";
			break;
		}
		elseif ($jogador < 10) {
			echo "Saca jogador B";
			echo "</br> $jogador";
			break;
		}
		elseif ($jogador < 15) {
			echo "Saca jogador A";
			echo "</br> $jogador";
			break;
		}
		elseif ($jogador < 20) {
			echo "Saca jogador B";
			echo "</br> $jogador";
			break;
		}

		elseif ($jogador < 25) {
			echo "Saca jogador A";
			echo "</br> $jogador";
			break;
		}
		elseif ($jogador < 30) {
			echo "Saca jogador B";
			echo "</br> $jogador";
			break;
		}
		elseif ($jogador < 35) {
			echo "Saca jogador A";
			echo "</br> $jogador";
			break;
		}
		elseif ($jogador < 40) {
			echo "Saca jogador B";
			echo "</br> $jogador";
			break;
		}
		elseif ($jogador >= 40 && $jogador <=41) {
			echo "Saca jogador A";
			echo "</br> $jogador";
			break;
		}
		elseif ($jogador >= 42 && $jogador <= 43) {
			echo "Saca jogador B";
			echo "</br> $jogador";
			break;
		}
		elseif ($jogador >= 44 && $jogador <= 45) {
			echo "Saca jogador A";
			echo "</br> $jogador";
			break;
		}
		if ($jogador >= 46) {
		  $rodada = 0;
		  $jogador1 = 'A';


		for ($i=0; $i <= $jogador; $i++) { 
			if (($rodada == $nova) && $jogador1 == 'B') {
			          $jogador1 = 'A';
			          $rodada = 0;
			        }
			else if (($rodada == $nova) && $jogador1 == 'A') {
			          $jogador1 = 'B';
			          $rodada = 0;
			        }

			        $rodada++;
			      }
			      echo "Saca jogador ".$jogador1;
			      echo "</br> $jogador";
			      break;

		}

	}
}


 ?>