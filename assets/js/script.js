/**
 * Author:
 *
 */

// Semi-colon for concatenation safety
;(function(M, window, document, undefined){

	/**
	 * Name-spacing
	 *
	 * Here we have to specifially define which
	 * objects belong in the global object
	 *
	 */
	window.Site = {
		basePath: document.body.getAttribute('data-base-url'),
		userAgent: navigator.userAgent,
		platform: navigator.platform
	};


	/**
	 * User-agenct data-attributes
	 *
	 * Add a data-attribute of the user-agent to <html> - very useful and worthwhile
	 * Target with: html[data-useragent*="Chrome/13.0"][data-platform="Win32"]
	 *
	 */
	var b = document.documentElement;
	b.setAttribute("data-useragent", Site.userAgent);
	b.setAttribute("data-platform", Site.platform);



	/**
	 * Make the sections full-page and create a
	 * smooth scroll function to nevigate between them
	 *
	 */
	var $sections = $('.section');
	if ($sections.length) {
		var wHeight = window.innerHeight,
			wWidth = window.innerWidth;
		$sections
			.addClass('center-content')
			.css({'min-height': wHeight})
			// .first().css({'margin-top': -126});
		// Smooth scrolling
		$('.js-smoothscroll').smoothScroll({
			offset: 1,
			preventDefault: true,
			easing: 'easeInOutExpo',
			speed: 900,
			afterScroll: function() {
				window.location.hash = this.hash || '';
			}
		});
	}



	/**
	 * Twitter Stuff
	 *
	 */
	var twitterFeed = $("#twitter-feed");
	if ( twitterFeed.length ) {

		var tweetTemplate = '<article class="g g-1-3">';
		tweetTemplate += '<header>';
		tweetTemplate += '<a target="_blank" href="{{link}}"><time title="{{datetime}}" datatime="{{datetime}}">{{nicedate}}</time></a>';
		tweetTemplate += '</header>';
		tweetTemplate += '<p>{{body}}</p>';
		tweetTemplate += '</article>';

		var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

		$.get('twitter/api.php', {}, function (resp) {
			var i = 0,
				tweets = resp,
				tweetsHtml = '';
			for ( i; i < 3; i++ ) {
				if ( tweets[i] ) {
					var tweet = tweets[i],
						tweetDate = new Date(tweet.created_at),
						niceDate = tweetDate.getUTCDate() + ' ' + months[tweetDate.getUTCMonth()] + ' at ' + tweetDate.getHours() + ':' + tweetDate.getMinutes(),
						tweetText = tweet.text;
					tweetsHtml += tweetTemplate.replace('{{body}}', tweetText).replace('{{link}}', 'https://twitter.com/brewersapps/status/' + tweet.id_str).replace(/{{datetime}}/g, tweet.created_at).replace('{{nicedate}}', niceDate);
				}
			}
			$('#twitter-feed').removeClass('loading');
			$('#tweets').html(tweetsHtml).removeClass('hide');
		});
	}


}(Modernizr, window, document));
