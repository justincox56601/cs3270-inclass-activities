<?php
/**
 * Creating an instance of a singleton class
 * 1) create an interface called iDatabase and give it the methods get, post, update, delete, for now, they will take no parameters and return void
 * 2) create a normal class called DatabaseService that implements iDatabase
 * 3) implement the iDatabase methods in DatabaseService.  for now, just have them echo out something.
 * 
 * Convert the DatabaseService into a Singleton
 * 1) give the DatabaseService a private static property called $_singleton, or $_instance
 * 2) give the __construct() method the private keyword
 * 3) create a new public static method called get_instance(), and have it return DatabaseService
 * 4) inside get_instance(), check if $this->_singleton is null, if it is, create a new instance of DatabaseService and save it in _singleton
 * 5) return $this->_singleton
 * 
 * confirm your singleton works by calling the get_instance() method and then tyring out a couple of the methods you implemented.
 * show this to me before moving on.
 * 
 */


/**
 * Using the strategy pattern
 * 1) In general, 'Service' classes should be singletons.  so create a UserService using the singleton pattern.  For now, the constructor will take 0 arguments
 * 2) Update the constructor AND the get_intance method to receive a parameter of type iDatabase.  Then save that as a class property.
 * 3) create a public method called get_users():array.  This method will take no parameters, and returns an array of User objects.  For now, just have it return an empty array
 * 4) in get_users() make a call to your stored databaseService, get() method.  this returns your 'raw user data from the database'
 * 5) For now, jsut have this method return an array ['user1', 'user2', 'user3']
 * 
 * confirm that your class works and your strategy works by creating an instance of the databaseService, the UserService, and calling the get_users() method.
 * Your output should show the output of the database class get() method AND the array of users from the get_users() method becuase both get invoked when calling UserService->get_users()
 * Show this to me before moving on
 */


/**
 * Using the MVC pattern.
 * 1) create a UserModel class that takes raw user data in the constructor, and stores first name, last name, age as properties
 * 2) update your DatabaseService->get() method to return an associative array of 3 raw users.  each itm in the array should have at least first name, last name, and age.
 * 3) update your UserService->get_users() method to receive that array of raw users, loop over them and create User objects from them.  Now make sure your method returns an array of User objects
 * 4) show me this works before moving on
 * 
 * 5) Create a UserController class that will take a UserService as a parameter inthe constructor
 * 6) create a method called render that takes in $view and $data=[] as parameters.
 * 7) in this method, extract $data to get varaibles from it, and include the view that was passed in.
 * 8) create a new method called get_users():void
 * 9) in this method call your UserService->get_users() method and save that as $data.  then call your controllers render method passing in 'UserView' as the view, and [$data] as the data.
 * 10) show this to me before you move on
 * 
 * 11) create a simple view that would display the first name, last name, and age of a User object.  Nothing special, I just want to see you using Objects correctly in the view
 * 12) For simplicity sake, you can do this in a commented section like I did with the notes.
 * 13) show this to me when you are done.
 */