fetch("https://fitness-calculator.p.rapidapi.com/burnedcalorie?activityid=bi_1&activitymin=25&weight=75", {
	"method": "GET",
	"app": {
		"x-rapidapi-host": "fitness-calculator.p.rapidapi.com",
		"x-rapidapi-key": "c760c89d0fmsh881854bf7d92056p1a3bc8jsn484c6dfb802c"
	}
})
.then(response => {
	console.log(response);
})
.catch(err => {
	console.error(err);
});