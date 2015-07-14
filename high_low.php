<?php 
	fwrite(STDOUT, "Guess a number between the parameters you enter and get hints to find the random number." . PHP_EOL);
	do {
		fwrite(STDOUT, "The parameter you set to play with is: $argv[1] , $argv[2]" . PHP_EOL);
		$randomVar = rand($argv[1],$argv[2]);
		$tries = 0;
			do {
				//Stops loop if user enters too many times
				if($tries == 5){
					fwrite(STDOUT , "Out of tries ¯＼_(ツ)_/¯" . PHP_EOL);
					break;
				}
				fwrite(STDOUT, "Guess: ");
				$userVar = fgets(STDIN);

				if($userVar > $randomVar) {
					fwrite(STDOUT, "You guessed high" . PHP_EOL);
				} 
				if($userVar < $randomVar){
					fwrite(STDOUT, "You guess low" . PHP_EOL);
				}

				//Gives user warning and hint after set amount of tries
				if($tries == 3) {
					$hint = substr($randomVar, -1);
					fwrite(STDOUT, "1 guess remaining (ಠ_ಠ)". PHP_EOL. "Here's a hint... the last number is ". $hint . PHP_EOL);
				}
				//Runs when the user guesses the number correctly
				if($userVar == $randomVar) {
					fwrite(STDOUT, "You got it! Number of tries taken: $tries" . PHP_EOL);
				}
				$tries++;
			}while($randomVar != $userVar);
			
			fwrite(STDOUT, "Would you like to play again (y/n): ");
			//Gets the users answer if they want to play agian sets it to lowercase and trims it
			$userAns = strtolower(trim(fgets(STDIN)));
	}while($userAns == "y");

?>