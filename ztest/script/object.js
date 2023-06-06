function Person(firstName, lastName, dob) {
	this.firstName = firstName;
	this.lastName = lastName;
	// this is creating a new object for Date called dob
	this.dob = new Date(dob);
}

/* Creating a prototype object from Person and giving it a name of getBirthYear 
   and inside this prototype there is a function that return the Year of dob of a new object Person */
Person.prototype.getBirthYear = function () {
	return this.dob.getFullYear();
}


/* Creating a prototype object from Person and giving it a name of getFullName
   and inside this prototype there is a function that returns the fullname of a new object
   Person using backticks: `` formatting string */
Person.prototype.getFullName = function () {
	return `${this.firstName} ${this.lastName}`;
}

// Creating a new object from function called Person;
const person1 = new Person('Niel Angelo', 'Gencaya', '12-22-2002');

