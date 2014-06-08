var express = require("express");
var jade = require("jade");

var app = express();
var port = Number(process.env.PORT || 5000);

app.get("/", function (req, res, next) {
	res.set("Content-Type: application/json");
	res.send(JSON.stringify({ isItFuckingChristmas: "no" }));
});

app.listen(port);