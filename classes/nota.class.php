<?php
	class Nota {
		private $nota;

		public function nota($nome) {
			switch ($nome) {
				case 'C':
					$this->nota = 0;
					break;
				case 'C#/Db':
					$this->nota = 0.5;
					break;
				case 'D':
					$this->nota = 1;
					break;
				case 'D#/Eb':
					$this->nota = 1.5;
					break;
				case 'E':
					$this->nota = 2;
					break;
				case 'F':
					$this->nota = 2.5;
					break;
				case 'F#/Gb':
					$this->nota = 3;
					break;
				case 'G':
					$this->nota = 3.5;
					break;
				case 'G#/Ab':
					$this->nota = 4;
					break;
				case 'A':
					$this->nota = 4.5;
					break;
				case 'A#/Bb':
					$this->nota = 5;
					break;
				case 'B':
					$this->nota = 5.5;
			}
			return $this->nota;
		}

		public function getNota() {
			return $this->nota;
		} 
	}
?>