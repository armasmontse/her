import './slider'
import './menu'
import {setCookie, getCookie} from './cookie';

$(document).ready(function() {

    const cookie = getCookie('popup');
    const popup = $('#popup');

    if(cookie != 'true'){

        popup.css('display', 'flex');
        setCookie('popup', true, 0.5);

    }

    // Close modal on close click or overlay click.

    $('.close').click(function() {

        popup.hide();

    });

    $('body').click(function(event) {

        if($(event.target).is('#popup')){

            popup.hide();

        }

    });

    $('.scroller_JS').click(function(){
		$('body,html').animate({ scrollTop: $('body').height() }, 800);
    });

})
