var moment = require("moment");

var YES_MESSAGES = [
	"It fucking is."
];
var NO_MESSAGES = [
	"You fucking wish.",
	"Is it fuck.",
	"It fucking isn't.",
	"Fuck no.",
	"No fucking way.",
	"It's fucking not.",
	"You fucking wish.",
	"Is it fuck.",
	"It fucking isn't.",
	"Fuck no.",
	"You fucking wish.",
	"Is it fuck.",
	"It fucking isn't.",
	"Fuck no.",
	"No fucking way.",
	"It's fucking not.",
	"You fucking wish.",
	"Is it fuck.",
	"It fucking isn't.",
	"Fuck no."
];

/**
 * Milliseconds per day.
 */
var MS_PER_DAY = 24 * 60 * 60 * 1000;

/**
 * Number of items to show in the RSS feed.
 */
var RSS_ITEMS = 5;

var cleanDate = function (dirtyDate) {
	var date = moment(dirtyDate);
	var result = date.format("YYYY/MM/DD");
	
	return result;
};

var rssDate = function (dirtyDate) {
	var date = moment(dirtyDate);
	var result = date.format("ddd, DD MMM YYYY hh:mm:ss") + " +0000";
	
	return result;
};

var getValue = function (array, seed) {
	var length = array.length;
	var index = seed % length;
	var value = array[index];
	
	return value;
}

exports.isItFuckingChristmas = function (dirtyDate) {
	var date = cleanDate(dirtyDate);
	var year = date.substr(0, 4);
	var monthDay = date.substr(-5);
	var time = moment(date).valueOf();
	var days = Math.floor(time / MS_PER_DAY);
	
	switch (monthDay) {
		case "12/25":
			return getValue(YES_MESSAGES, year);
			
		case "02/29":
			return "No, it's a fucking leap day.";
	}
	
	switch (date) {
		case "2012/04/06":
			return "It's fucking Good Friday.";
			
		case "2012/04/08":
			return "It's Easter you daft cunt.";
			
		case "2012/04/08":
			return "Holy shit! It's Easter Monday.";
	}
	
	return getValue(NO_MESSAGES, days);
};

exports.isItFuckingChristmasRss = function () {
	var date = cleanDate();
	var time = moment(date).valueOf();
	var items = [];
	var n = 0;
	
	for (; n < RSS_ITEMS; n += 1) {
		items.push({
			description: exports.isItFuckingChristmas(time),
			pubDate: rssDate(time),
			link: "http://isitfuckingchristmas.co.uk/" + cleanDate(time)
		});
		
		time -= MS_PER_DAY;
	}
	
	return items;
};