
    // code for top sticky menu animation
    $(function () {
        var scrollArrow = $(document).scrollTop();
        var headerHight = $('#logoDiv').outerHeight();
        $(window).scroll(function () {
            var targetDiv = $(document).scrollTop();
            if (targetDiv > headerHight) { $('#logoDiv').addClass('gizle'); }
            else { $('#logoDiv').removeClass('gizle'); }
            if (targetDiv > scrollArrow) { $('#logoDiv').removeClass('sabit'); }
            else { $('#logoDiv').addClass('sabit'); }
            scrollArrow = $(document).scrollTop();
        });
    }); 
    //code for scrolling transition for links
    $(function () {
        $('a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    // code for scroll to top
    $(document).ready(function () {
        //Check to see if the window is top if not then display arrowDiv
        $(window).scroll(function () {
            if ($(this).scrollTop() > 600) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });
        //Click event to scroll to top
        $('.scrollToTop').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 800);
            return false;
        });
	 });	
	 $(document).ready(function () {
        //Click event to scroll to top
        $('.scrollToBottom').click(function () {
            $('html, body').animate({scrollTop:$(document).height()}, 1000);
            return false;
        });
		
	 });
	//hide/view new post form	
	    function hide_newPost(id) {
       var commentBox = document.getElementById(id);
       if(commentBox.style.display == 'block')
          commentBox.style.display = 'none';
       else
          commentBox.style.display = 'block';
    }
	//hide/view new comments and form
	function hide_comment() {
	var commentBox = document.getElementById('commentContainer');	
       if(commentBox.style.display == 'block')
          commentBox.style.display = 'none';
       else
          commentBox.style.display = 'block';
    }