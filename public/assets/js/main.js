(function(){

	var html = $('html'),
        flash = $('.flash'),
		cs_logo = $('.cs_logo'),
    	cs_width = Number(cs_logo.css('width').replace('px', '')),
    	nav = $('.nav a')
    	mainnav = $('.nav .mainnav a'),
    	subnav_a = $('.nav .subnav a'),
    	body = $('html, body'),
        list = $('.mainnav a li'),
        subnav = $('.subnav'),
        white = 'rgb(242,242,242)',
        black = 'rgb(26,26,26)';

	flash.animate({
		opacity: 1
	}, 5000, function(){
		flash.animate({
			margin: 0,
			height: 0,
			padding: 0,
			opacity: 0
		},500, function(){
			flash.css('display', 'none');
		})
	});

    var changeHover = function(color){
        list.hover(function(){
            $(this).css('border-bottom', '4px dotted '+color);
        },function(){
            $(this).css('border-bottom', 'none');
        });
        mainnav.hover(function(){
            if(this.text == 'Portfolio'){
                subnav.css('display','block');
                $('.a_portfolio li').css('border-bottom','4px dotted '+color);
            }else{
                subnav.css('display','none');
                $('.a_portfolio li').css('border-bottom','none');
            }
        });

        subnav.mouseout(function(){
            subnav.css('display','none');
            $('.a_portfolio li').css('border-bottom','none');
        }).mouseover(function(){
            subnav.css('display','block');
            $('.a_portfolio li').css('border-bottom','4px dotted '+color);
        });
    }

	var timeCheck = function(){
		var hour = new Date().getHours();
        if(hour < 7 || hour >= 19){
        	var cs_logo = $('.cs_logo'),
        		carlossang_logo = $('.carlossang_logo'),
        		anchors = $('a'),
        		inputs = $('.input, textarea'),
        		cs_src = cs_logo.attr('src').replace('black', 'white'),
        		carlossang_src = carlossang_logo.attr('src').replace('black', 'white'),
        		alpha_background = $('header, #resume, #contact');

        	if(html.css('background-image').search('white')){
        		var replace = html.css('background-image').replace('white','black');
        		html.css('background-image',replace);   
        		cs_logo.attr('src',cs_src);
            	carlossang_logo.attr('src',carlossang_src);
            	html.css('color',white);
            	anchors.css('color',white);
                subnav.css('background-color', 'rgba(0,0,0,.7)');
            	changeHover(white);
            	inputs.css('color', white);
            	inputs.css('background-color', black);
            	alpha_background.css('background-color','rgba(0,0,0,.7)');             		
        	}else{
                changeHover(black);
            };
        }else{
            changeHover(black);
        };
	};

	var update =
    {
        init: function()
        {
            var timeInterval = 1000;
 
            var max = 2;
 
            var i = 0;
 
            $('.time p').html(new Date().toLocaleTimeString() + " - " + new Date().toLocaleDateString());
 
            var infiniteLoop = setInterval(function(){
 
                $('.time p').html(new Date().toLocaleTimeString() + " - " + new Date().toLocaleDateString());
 
            }, timeInterval);

            var hourlyLoop = setInterval(function(){

            	timeCheck();

            }, timeInterval*60*60);
        }
    };
 
    update.init();
    timeCheck();
    // if(html.css('background-image').search('white')){
    //     changeHover(white);
    // }else{
    //     changeHover(black);
    // }

    // subnav_a.click(function(e){
    // 	if(this.text == 'Websites'){
    // 		body.animate({scrollTop: $(".websites").offset().top}, 1000);
    // 	}else if(this.text == 'Photos'){
    // 		body.animate({scrollTop: $(".photos").offset().top}, 1000);
    // 	}else if(this.text == 'Illustrations'){
    // 		body.animate({scrollTop: $(".illustrations").offset().top}, 1000);
    // 	}else if(this.text == 'Drawings'){
    // 		body.animate({scrollTop: $(".drawings").offset().top}, 1000);
    // 	}else{
    // 		body.animate({scrollTop: $(".games").offset().top}, 1000);
    // 	}
    	
    // 	e.preventDefault();
    // });

    nav.click(function(e){
    	if(this.className == 'a_resume'){
    		body.animate({scrollTop: $("#resume").offset().top}, 500);
    	}else if(this.className == 'a_portfolio'){
    		body.animate({scrollTop: $("#portfolio").offset().top}, 500);
    	}else if(this.className == 'a_contact'){
    		body.animate({scrollTop: $("#contact").offset().top}, 500);
    	}else if(this.className == 'a_websites'){
    		body.animate({scrollTop: $(".websites").offset().top}, 500);
    	}else if(this.className == 'a_photos'){
    		body.animate({scrollTop: $(".photos").offset().top}, 500);
    	}else if(this.className == 'a_illustrations'){
    		body.animate({scrollTop: $(".illustrations").offset().top}, 500);
    	}else if(this.className == 'a_drawings'){
    		body.animate({scrollTop: $(".drawings").offset().top}, 500);
    	}else if(this.className == 'a_games'){
    		body.animate({scrollTop: $(".games").offset().top}, 500);
    	}
    	subnav.css('display','none');
    	
    	e.preventDefault();
    });

})();