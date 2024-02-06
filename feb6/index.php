<?php
/**
 * INSTRUCTIONS
 * Welcome to Chirper!  The hottest most exciting new social media platform to take over the world.
 * You are a new dev working on the team and today's task is to help flush out the feed.
 * 
 * The team has already flushed out a few things for you such as creating a database service and a user service.
 * They are already included so no need to worry about the path or include files.  YOu may need to add methods to
 * them though.  So keep that in mind.
 * 
 * 1) your first task is to implement a login.  The team has already created a login view and a welcome view.  By default
 * the $isLoggedIn varaibale is set to false.  YOu will need to decide how to decide if a user is logged in an show the 
 * correct view to them.
 * HINT:  the login view does NOT require a password.  just enter a username and submit.
 * HINT: the welcome view requires a $user array/object with the username property.  you can get this by calling the 
 * get_user() method.  Currently there are only a few registered users.  you will have to figure out how who they are.
 * HINT:  once you have figured out which views you want to display and when, the method you will want to use is include()
 * 
 * 2) once the user is logged in, they will need to see their feed.  The team has already created a chirp view for you, 
 * you will just need to create a for loop to go over each item in the $dataArray and include the chirp view
 * HINT:  for this particular situation, you will want to use a foreach loop instead of a sentinal loop.
 * HINT: you should ONLY need to include the chirp view.  Take a look at what it is expecting for context clues as to how
 * to set up your loop.
 * 
 * 3) It has occurred to your team, that it would be impractical to show ALL of the posts.  Instead a users should only see
 * posts from people they follow.  The user object already contains a list of people the user follows.  Use that information 
 * to update the loop below so that only posts from the person the use is following are displayed.
 * 
 * 4) Your Senior dev has taken a look at your code and told you, they are not a fan of having decision making functionality 
 * in the main html like that.  They want you to create a new function in the db service that will do the same thing as the loop
 * below.  ie...  it will return only the posts from people the user follows.  Then update the $dataArray variable so that it 
 * gets its data from that new method.  This way we won't have to have decision making happening inside the HTML.
 * HINT: this is an extercise in extension.  You do not need to reinvent the wheel.  use the prebuilt get_feed() method inside of
 * your new method.
 * 
 * 5) Each chirp also has comments.  Your final task is to update the chirp view so that it also displays the comments associated
 * with each chirp.  This may require some CSS work but don't sweat it if you don't get to it.  We have a UI/UX team for that.
 */

define('ABS_PATH',  __DIR__);
require_once(ABS_PATH . '/services/db.service.php');
require_once(ABS_PATH . '/services/user.service.php');



$isLoggedIn = false;
$user = null;

$dataArray = get_feed();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Chirper</h1>
    <?php  //user ternary here to show one view if logged in and a different one if not ?>
    <?php 
        //check to make sure user is logged in before showing feed
        //use a foreach loop to show the feed
        //use include() to show the prebuilt chirp view    
    ?>
</body>
</html>