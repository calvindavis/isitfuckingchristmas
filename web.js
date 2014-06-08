var express = require("express");
var jade = require("jade");

var app = express();
var port = Number(process.env.PORT || 5000);

var indexHandler = function (req, res, next) {
	jade.renderFile(__dirname + "/templates/index.jade", {
		message: "Hell to the no."
	}, function (err, html) {
		if (err) {
			throw err;
		}
		
		res.set("Content-Type", "text/html");
		res.send(html);
	});
};

app.get("/", indexHandler);
app.get(/(\d{4}\-\d{2}\-\d{2})/, indexHandler);

var rssHandler = function (req, res, next) {
	jade.renderFile(__dirname + "/templates/rss.jade", {
		items: [
			{
				title: "No fucking way."
			},
			{
				title: "Heck no dawg."
			}
		]
	}, function (err, html) {
		if (err) {
			throw err;
		}
		
		res.set("Content-Type", "application/xml");
		res.send(html);
	});
};

app.get("/rss", rssHandler);

app.listen(port);