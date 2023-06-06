const todos = [
	{
		id: 1,
		text: "Take out Trash",
		isCompleted: true
	},

	{
		id: 2,
		text: "Meeting with boss",
		isCompleted: true
	},

	{
		id: 3,
		text: "Studying",
		isCompleted: false
	}
];

// Array Methods access
// forEach, map, filter

todos.forEach((todo) => {
	return todo.id;
});

const todoText = todos.map((todo) => {
	return todo.text;
})

const todoCompleted = todos.filter((todo) => {
	return todo.isCompleted === true;
}).map((todo) => {
	return todo.text;
})