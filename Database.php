<?php
class Database {
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;

// local variables that will disappear once the function is finished running
// a constructor can accept parameters in the normal manner, which are passed when the object is created
//defines the constructors.
//constructor is called on an object after it has been created	
	public function __construct($host, $username, $password, $database) {
		//accesses to our golbal variables
		$this->host =$host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;


	}
	public function openConnection() {
 
$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
// to see if the connection was succesful
// to check if its true or nah
// connection->connect_error checks to see if there is a connection error.
if($this->connection->connect_error ){
	die("Error: " . $this->connection->connect_error);	
} 

	}
	public function closeConnection() {
		//to tell whether or not i opened the function and if we were we are now able to close the fuction
		if (isset(/*checks if there is anything in the varable if not i will be null*/ $this->connection)){
         $this->connection->close();
		}

	}
	// everytime we call on our query function we have to passed in a string and the string can be located in the variable
	public function query($string) {
       $this->openConnection();
// this will exicute a query in our database
       // takes in a string of texts the queries the string to the database below
$query =  this->connection->query($string);

$this->closeConnection();
return $query;
	}
}
//It's a way to view your code in a more intuitive, real-world way
//its so that you can customize the behavior of that set of functions
//The point of OOP is not to 'group similar functions in a class
//in a class context, it is possible to create a new object by new self and new parent
//we make a class to call it later
//when we create an instance of a class we create an object
// when you make functions you have to call every function over and over.