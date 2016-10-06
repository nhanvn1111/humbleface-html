// ====================
// Likes Check Function
// ====================
function likeCheck(){

    window.fbAsyncInit = function() {
        FB.init({
            appId      : 'XXXXXXXXXX', // App ID
            channelUrl : '//YOUR_WEBSITE_URL.COM/', // Channel File
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
        });
        //FB.Canvas.setAutoResize();

        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
            
            	var user_id = response.authResponse.userID;
            	
            	// Replace with your page ID, to check got to http://graph.facebook.com/YOUR_PAGE_NAME
            	var page_id = 'XXXXXXXXXX';
            	var fql_query = "SELECT uid FROM page_fan WHERE page_id=" + page_id + " and uid=" + user_id;
            	
            	FB.api('/me', function(response) {
        	    	console.log(response.name);
        	    	// Pull FB data
                    $('.fbname').text(response.name);
                    $('.fbimg').append('<img src="http://graph.facebook.com/'+response.id+'/picture" alt="Avatar" />');
        		});
            }
        });

    };
    (function(d){
        var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement('script'); js.id = id; js.async = true;
        js.src = "//connect.facebook.net/en_US/all.js";
        ref.parentNode.insertBefore(js, ref);
    }(document));
}

// =================
// Carousel Function
// =================
function carouselLoad(){

    // Carousel
    $('.carousel').carousel({
        interval : 5000,
        pause : 'hover'
    });

    $('.carousel').mouseenter(function() {
        $(this).carousel('pause');
    });

    // Pagination
    $('.carousel').each(
            function() {
                    var html = '<div class="carousel-nav" data-target="' + $(this).attr('id') + '"><ul class="nav nav-pills">';
                    
                    for(var i = 0; i < $(this).find('.item').size(); i ++) {
                            html += '<li><a';
                            if(i == 0) {
                                    html += ' class="active"';
                            }
                            
                            html += ' href="#">•</a></li>';
                    }
                    
                    html += '</ul></li>';
                    $(this).after(html);
                    $('.carousel-control.left[href="#' + $(this).attr('id') + '"]').hide();
            }
    ).bind('slid',
            function(e) {
                    var nav = $('.carousel-nav[data-target="' + $(this).attr('id') + '"] ul');
                    var index = $(this).find('.item.active').index();
                    var item = nav.find('li').get(index);
                    
                    nav.find('li a.active').removeClass('active');
                    $(item).find('a').addClass('active');
                    
                    if(index == 0) {
                            $('.carousel-control.left[href="#' + $(this).attr('id') + '"]').fadeOut();
                    } else {
                            $('.carousel-control.left[href="#' + $(this).attr('id') + '"]').fadeIn();
                    }
                    
                    if(index == nav.find('li').size() - 1) {
                            $('.carousel-control.right[href="#' + $(this).attr('id') + '"]').fadeOut();
                    } else {
                            $('.carousel-control.right[href="#' + $(this).attr('id') + '"]').fadeIn();
                    }
            }
    );
    
    $('.carousel-nav a').bind('click',
            function(e) {
                    var index = $(this).parent().index();
                    var carousel = $('#' + $(this).closest('.carousel-nav').attr('data-target'));
                    
                    carousel.carousel(index);
                    e.preventDefault();
            }
    );
}

// Boxed navigation autowidth
function autoWidth(){
    var total = $('ul.boxed li').length;
    var size = 100/total;
    $('.boxed a').css('width', size+'%')
}

// ======================
// Single Page Navigation
// ======================
function singlePage(){
    // Navigation
    $('article.panel').hide();
    $('article.panel').eq(0).show();
    $('header .nav a').not('header .nav li:last-child a').on('click',function(){
    
        var now = $(this).parent().index();

        $('header .nav a').removeClass('active');
        $(this).addClass('active');

        $('article.panel').hide();
        $('article.panel').eq(now).fadeIn();

        // Nanoscroller
        $(".nano").nanoScroller();

        // Collapsable 
        $(".collapse").collapse();

    });
}

// ======================
// Multiple Page Function
// ======================
function multiplePage(){
	
	$('article.panel').show();
    var filename = location.pathname.substr(location.pathname.lastIndexOf("/")+1,location.pathname.length);

    $('header .nav').find('a[href$="'+filename+'"]').addClass('active');

    // Nanoscroller
    $(".nano").nanoScroller();

    // Collapsable 
    $(".collapse").collapse();
}

// Inital Load
$(function(){   

	// Activate last nav
	$('header li.like a').addClass('active');

    // Fancybox
    $('a.fancy').fancybox({'titlePosition' : 'inside'});
    $('a.fancy.launch').fancybox({'modal' : 'true', 'margin' : 0, 'padding' : 0});
    $('a.fancy.iframe').fancybox({ 'type' : 'iframe', 'titlePosition'   : 'inside'});

    $('#filter a').on('click',function(){
        $('#filter a').removeClass('active');
        $(this).addClass('active');
    })

    carouselLoad();
    autoWidth();

    // Pull facebook data
    likeCheck();

    //Comment out page type function that you are not using
    //singlePage(); 
    multiplePage(); 
});