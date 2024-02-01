<?php
$username1 = (isset($_POST['username'])) ? $_POST['username'] : '';
$password1 = (isset($_POST['password'])) ? $_POST['password'] : '';

$catgame = "[Having pulled over a speeding driver.] 
Mac: All right, how about Cat Game? 
Foster: Cat Game? What's the record?
Mac: Thorny did six, but I think you can do ten.
Foster: Ten? Starting right meow?
[They go up to the car.]
Driver: Sorry about the...
Foster: All right meow. Hand over your license and registration.
[The man gives him his license.]
Foster: Your registration? Hurry up meow.
Driver: [laughing.] Sorry.
Foster: Is there something funny here boy?
Driver: Oh, no.
Foster: Then why you laughing, Mister... Larry Johnson?
[Foster stares at him.]
Foster: All right meow, where were we?
Driver: Excuse me, are you saying meow?
Foster: Am I saying meow?
Driver: I thought...
Foster: Don't think boy. Meow, do you know how fast you were going?
[The man laughs.]
Foster: Meow. What is so damn funny?
Driver: I could have sworn you said meow.
Foster: Do I look like a cat to you, boy? Am I jumpin' around all nimbly-bimbly from tree to tree? Am I drinking milk from a saucer? DO YOU SEE ME EATING MICE?
[The man is uncontrollably laughing.]
Foster: You stop laughing right meow!
Driver: [Stops and swallows hard.] Yes sir.
Foster: Meow, I'm gonna have to give you a ticket on this one. No buts meow. It's the law.
[Rips off the ticket and hands it to the man.]
Foster: Not so funny meow, is it?
[Foster gets up to leave, but Mac shakes his hands at him, indicating only nine meows.]
Foster: Meow!'";

function get_userName(string $email):string{
    return '';
}

function get_emailDomain(string $email):string{
    return '';
}

function get_usernames_and_domains(array $emails):string{
    //hint: you alread have methods to get username and domain.  reuse them;
    //hint:  use the </br> character at the end of each line to create a new line
    //hint: your return string should have the shape of "username - domain"
    return '';
}

function get_user_domain_as_table(array $emails):string{
    //hint: you made tables in your last in class exercise.  use what you learned there to help you here
    //hint: you have already written the code needed for several parts of this.  reuse that code.
    return '';
}

function get_meow_count(string $string):int{
    return 0;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feb 1, 2024</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <article>
		<h1>In Class Activity February 1st, 2024</h1>
		<h2>String Functions part 3 </h2>
		<p>For this exercise you are going to explore different string functions.</p>
	</article>
    <article>
        <h2>SocialMedia.com</h2>
        <p>SocialMedia.com uses email addresses to create user usernames for their users.  For some reason, they store the user name and the eamil domain in separate tables.  Can you create a function that will take an eamil address and return ONLY the username (everything before the '@' symbol) portion of it?  Can you create a separate function that will take in an email address and return ONLY the domain (everything after the '@' symbol)?</p>
        <p> Your username is: <?php echo get_userName('sample.deez.@gmail.com') ?></p>
        <p> Your domain is: <?php echo get_emailDomain('sample.deez.@gmail.com') ?></p>
    </article>
    <article>
        <p>That is great and all, but SocialMedia.com is VERY popular and rarely has one person signing up at a single time.  Can you do the same thing but this time with an array of email addresses?</p>
        <p>
            <?php 
                $emails = ['sample.deez.@gmail.com', 'narato@hiddenleaf.com', 'ed@fullmetal.gov', 'luffy@findtheonepiece.net'];
                echo get_usernames_and_domains($emails); 
            ?>
        </p>
    </article>
    <article>
        <p>For some reason the higherups want to see that as a table.  can you redo waht you did but this time display it as a table?</p>
        <p>
            <?php 
                $emails = ['sample.deez.@gmail.com', 'narato@hiddenleaf.com', 'ed@fullmetal.gov', 'luffy@findtheonepiece.net'];
                echo get_user_domain_as_table($emails); 
            ?>
        </p>
    </article>
    <article>
        <h2>Super Troopers Cat Game Scene</h2>
        <p>Super troopers had a funny scene where Mac and Foster were trying to sneak the word 'meow' into what they were saying to the people they had pulled over.  Mac bet Foster that he could say the word 'meow' 10 times.  Did he actually do it?</p>
        <p>Foster said 'meow' <?php echo get_meow_count($catgame) ?> times</p>
    </article>
    <article>
        <h2>Cross site scripting Demo</h2>
        <p>enter the following text in the username box below &ltscript&gtalert('You have been hacked')&lt/script&gt and then anything for the password.  What happens?</p>
        <form action="" method="post">
            <div>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
        <p>your username is: <?php echo $username1;?></p>
        <p>your pasword is : <?php echo $password1;?></p>
    </article>
</body>
</html>