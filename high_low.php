<?php 

	fwrite(STDOUT, "Guess a number between 1-100 and get hints to find the random number." . PHP_EOL);
	
	do {
	$randomVar = rand(1,100);
	$tries = 0;
		do {
			$tries++;
			fwrite(STDOUT, "Guess: ");
			$userVar = fgets(STDIN);
			if($userVar > $randomVar) {
				fwrite(STDOUT, "You guessed high" . PHP_EOL);
			}
			if($userVar < $randomVar) {
				fwrite(STDOUT, "You guess low" . PHP_EOL);
			}
		}while($randomVar != $userVar);
		
		fwrite(STDOUT, "You got it! Number of tries taken: $tries" . PHP_EOL . "Would you like to play again (y/n): ");
		$userAns = trim(fgets(STDIN));
		echo $userAns;
	}while($userAns == "y");


?>