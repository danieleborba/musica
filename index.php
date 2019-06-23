<center>
	<h1>
		<?php
			include('autoload.php');

			$nota1 = new Nota('C');
			$nota2 = new Nota('E');
			$nota3 = new Nota('A');
			$musica = new Musica(array($nota1, $nota2, $nota3));

			echo 'Notas: ' .$musica->getNotas2();
			echo '<br>Mais 1 tom: ' .$musica->tonalidade(1);
			echo '<br>Menos 1 tom: ' .$musica->tonalidade(-1);
		?>
	</h1>
</center>