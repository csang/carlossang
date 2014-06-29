(function(){

	var year = new Date().getFullYear(),
		months = ['January',
				'February',
				'March',
				'April',
				'May',
				'June',
				'July',
				'August',
				'September',
				'October',
				'November',
				'December'],
		days = ['Sunday',
				'Monday',
				'Tuesday',
				'Wednesday',
				'Thursday',
				'Friday',
				'Saturday'],
		total_days = [28,29,30,31],
		leap_year = 0;
		d_mode_month = $('.mode_month'),
		d_mm_month = $('.mode_month h2').html(),
		d_mm_days = $('.mode_month .days');

	if(year%400 == 0){
		leap_year = 1;
	}else if(year%100 == 0){
		leap_year = 0;
	}else if(year%4 == 0){
		leap_year = 1;
	}else{
		leap_year = 0;
	}

	var update_calendar = function(month){
		var x;

		switch (month)
		{
		case 'January':
			x = 31;
			break;
		case 'February':
			if(leap_year){
				x = 29;
			}else{
				x = 28;
			}
			break;
		case 'March':
			x = 31;
			break;
		case 'April':
			x = 30;
			break;
		case 'May':
			x = 31;
			break;
		case 'June':
			x = 30;
			break;
		case 'July':
			x = 31;
			break;
		case 'August':
			x = 31;
			break;
		case 'September':
			x = 30;
			break;
		case 'October':
			x = 31;
			break;
		case 'November':
			x = 30;
			break;
		case 'December':
			x = 31;
			break;
		};

		for (var i = 1, max = x; i <= max; i++) {
			d_mm_days.append('<div class="day inline"><h4>' + i + '</h4></div>');
		};
	};

	update_calendar(d_mm_month);

})();