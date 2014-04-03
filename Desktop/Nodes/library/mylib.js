module.exports = (function() { //the immediate function is from the FIRST '('
	return{
		add: function(num1, num2) {
			return num1 + num2; },
		multiply: function(num1, num2) {
			return num1 * num2; },
		square: function(num) {
			return (num * num); },
		random: function(num1, num2) {
			return Math.floor((Math.random() * num2) + num1)
		}

	}
})(); //this makes it an immediate function that runs right away.







		// log_app: function() { console.log(app); },
// 		sum: function(a,b) { return a+b; },
// 		Person: function Person(name) {
// 			this.name = name;
// 			this.introduce = function(){
// 			console.log('my name is', this.name);
// 			}
// 		}
// 	}
// }

// exports.sum = function(a,b) { return a+b; };
// exports.Person = function Person(name) {
// 	this.name = name;
// 	this.introduce = function() {
// 		console.log('my name is', this.name);
// 	}
// }; //here we use a self invoking constructor pattern to create an object