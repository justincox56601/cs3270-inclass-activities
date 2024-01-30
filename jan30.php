<?php

function pl_total(int $benchPress, int $squat, int $deadlift):int{
	return 0;
}

function display_each_lift(array $lifts):string{
	//hint: use simple string concatenation for this . and .=
	//hint:  foreach syntax for associative arrays is foreach($arr as $key=>$val)
	return '';
}

function display_lifts_as_table(array $lifts):string{
	$str = '<table>';
	//fill in this part
	$str .= '</table>';
	return $str;
}

function who_lifts_more():string{
	//hint for this one you will need to add the parameter along with type
	//hint you will need to google the conversion rate from kilograms to pounds for this
	//hint your return string should be in the form "NAME lifts more"
	return '';
}

function who_lifts_more_2():string{
	//hint for this one you will need to add the parameters along with type
	//hint you will need to google the conversion rate from kilograms to pounds for this
	//hint your return string should be in the form "NAME has a bigger LIFT"
	//hint Jake's weight is always the first number parameter and Justin's is always the second number parameter
	return '';
}

function remove_extra_characters():string{
	return '';
}

function fix_the_text_message():string{
	//hint.  this will take multiple different string methods to achieve.
	return '';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>January 30th, 2024</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<article>
		<h1>In Class Activity January 30th, 2024</h1>
		<h2>String Functions</h2>
		<p>For this exercise you are going to explore different string functions.</p>
	</article>
	<article>
		<h2>Justin the power lifter</h2>
		<p>Powerlifting is a sport where people compete to see who can lift the most combined weight from Bench Press, Squat, and Deadlift</p>
		<p>complete the function pl_total(int $benchPress, int $squat, int $deadlift):int{} to display Justin's powerlifging total below</p>
		<p>Justin's powerlifting total is <?php echo pl_total(275, 315, 405)?></p>
	</article>
	<article>
		<h2>What are each of Justin's lifts?</h2>
		<p>Complete the function display_each_lift(array $lifts):string{} to display each of Justin's lift totals</p>
		<p><?php echo display_each_lift(['Bench Press'=>275, 'Squat' => 315, 'Deadlift'=>405])?></p>
	</article>
	<article>
		<h2>Can you put it into a table?</h2>
		<p>That is nice and all, but it would be easier to read if it was in a table format.  Complete the function display_lifts_as_table(array $lifts):string{} to display Justin's lifts in table format</p>
		<p><?php echo display_lifts_as_table(['Bench Press'=>275, 'Squat' => 315, 'Deadlift'=>405])?></p>
	</article>
	<article>
		<h2>Jake says he can lift more</h2>
		<p>Jake says his 200kg deadlift if bigger than Justin's 405 pound dead lift.  Is that true?  create a function who_lifts_more() that takes in Jakes deadlift weight as a parameter and returns who has the bigger deadlift.</p>
		<p><?php echo who_lifts_more(200) ?></p>
	</article>
	<article>
		<h2>What about all of the lifts?</h2>
		<p>Now Jake and Justin want to know on each of their lifts who can lift more.  Can you generalize the previous method to take in a lift, jakes weight, and Justin's weight that will print out who lifted more?</p>
		<p><?php echo who_lifts_more_2('Bench Press', 100, 275) ?></p>
		<p><?php echo who_lifts_more_2('Squat', 150, 315) ?></p>
		<p><?php echo who_lifts_more_2('Deadlift', 200, 405) ?></p>
	</article>
	<article>
		<h2>Time to message the wife</h2>
		<p>After chatting with Jake, Justin decides to message his wife and tell her all about his day.  Unfortuantely, Justin is notorious for his fat thumbs and miss types her phone number as '(21-8)867-53,09' Can you write a function to remove the extra characters and return the string as the numbers only?</p>
		<p><?php echo remove_extra_characters('(21-8)867-53,09') ?></p>
	</article>
	<article>
		<h2>More Fat Thumbs</h2>
		<p>Yeah Justin really messed this one up.  Fortuantely his wife is used to it by now, but could you help Justin out but writing a function to fix his text message?</p>
		<p>
			<?php
				$message = 'Hey lOve, I just finished the power lifti-ng meet.  i went 3 for 3 on all of the Lifts.  Set ne--w PR in Dead Lift and Squat.  it was a GOOD day.  be ho+me by din+ner';

				echo fix_the_text_message($message)
			?>
		</p>
	</article>
	
	

</body>
</html>