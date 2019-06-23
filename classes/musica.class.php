<?php
	class Musica {
		public $notas;
		public $notas2; // Notas convertidas em números
		private $novo_tom = array();

		public function Musica($notas) {
			$this->notas = $notas;
		}

		// Converte o número da nota para o seu nome
		private function converterNumeroTexto($numero) {
			switch ($numero) {
				case 0:
					$numero = 'C';
					break;
				case 0.5:
					$numero = 'C#/Db';
					break;
				case 1:
					$numero = 'D';
					break;
				case 1.5:
					$numero = 'D#/Eb';
					break;
				case 2:
					$numero = 'E';
					break;
				case 2.5:
					$numero = 'F';
					break;
				case 3:
					$numero = 'F#/Gb';
					break;
				case 3.5:
					$numero = 'G';
					break;
				case 4:
					$numero = 'G#/Ab';
					break;
				case 4.5:
					$numero = 'A';
					break;
				case 5:
					$numero = 'A#/Bb';
					break;
				case 5.5:
					$numero = 'B';
			}
			return $numero;
		}

		// Converte a nota para o tom inserido
		public function tonalidade($tonalidade) {
			for ($i=0; $i < count($this->notas); $i++) { 
				$this->novo_tom[$i] = $this->notas[$i]->getNota() + $tonalidade;
				while ($this->novo_tom[$i] >= 6) {
					$this->novo_tom[$i] -= 6;
				}
				while ($this->novo_tom[$i] < 0) {
					$this->novo_tom[$i] += 6;
				}
				$this->novo_tom[$i] = $this->converterNumeroTexto($this->novo_tom[$i]);
			}
			return join(" ", $this->novo_tom);

		}

		public function getNotas2() {
			for ($i=0; $i < count($this->notas); $i++) { 
				$this->notas2 = $this->notas2 ." ". $this->converterNumeroTexto($this->notas[$i]->getNota());
			}
			return $this->notas2;
		}

	}

?>