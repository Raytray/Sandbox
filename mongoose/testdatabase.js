var mongoose = require('mongoose');
mongoose.connect('mongodb://localhost/test');

var db = mongoose.connection;
db.on('error', console.error.bind(console, 'connection error:'));
db.once('open', function callback() {
    var kittySchema = mongoose.Schema({
	name: String,
	_id: String
    })

    kittySchema.methods.speak = function () {
	var greeting = this.name
	? "Meow name is " + this.name
	: "I don't have a name"
	console.log(greeting);
    }
    var Kitten = mongoose.model('Kitten', kittySchema);
    var fluffy = new Kitten({ name: 'fluffy', _id: "fluffID" });
    fluffy.speak();
    fluffy.save(function (err,fluffy){
	if (err){
	    console.log(err);
	}
	else{
	    fluffy.speak();
	}
    });

    Kitten.find(function(err, kittens) {
	if (err){
	    console.log(err);
	}
	console.log(kittens)
    });
});
