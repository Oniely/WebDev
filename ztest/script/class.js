// refer to the object_inside_array.js before coming here to recall;

class Person {
	constructor(firstName, lastName, dob) {
		this.firstName = firstName;
		this.lastName = lastName;
		this.dob = new Date(dob);
	}

	getBirthYear() {
		return this.dob.getFullYear();
	}

	getFullName() {
		return `${this.firstName} ${this.lastName}`;
	}
}


const person1 = new Person("Niel", "Gencaya", '12-22-2002');

console.log(person1.getBirthYear())