var statBoard = function () {
	return {
		graphVisits : function (selector) {
			var el = $(selector),
				data = [],
				prev = null, i,
				showTooltip = function (x, y, contents) {
					$("<div />", {
						id: 'tooltip',
						text : contents,
						css : {
							top : y + 5,
							left : x + 5
						}
					}).appendTo('body').fadeIn(200);
				};
				
			el.height( $('#schedule').outerHeight());
			
			for (i = 1; i < 32; i++) {
				data.push([ new Date(39, 2, i).getTime(), Math.floor(Math.random() * 6000)]);
			}
			
			$.plot(el, [{ data: data, color:'#494949', lines : { show: false }, points : { show : true} }],
				{ xaxis : { mode : 'time', timeformat : '%b %d' }, grid : { hoverable : true, clickable : true } });
	
			el.bind('plothover', function (event, pos, item) {
				if (item) {
					if (prev != item.datapoint) {
						prev = item.datapoint;
						$('#tooltip').remove();
						showTooltip(item.pageX, item.pageY, item.datapoint[1]);
					}
				}
				else {
					$('#tooltip').remove();
					prev = null;
				}
			});
			
		},
		twitterize : function (selector, fn, subject) {
			var container = $(selector);
			
			twitterlib[fn](subject, { limit : 10 }, function (tweets) {
				var list = $('<ul />'), i
					len = tweets.length,
					totalWidth = 0;
					
				for (i = 0; i < len; i++ ) {
					$('<li><a><img/></a></li>')
						.find('a')
						.attr('href', 'http://www.twitter.com/' + tweets[i].user.screen_name + '/status/' + tweets[i].id)
						.end()
							.find('img')
							.attr('src', tweets[i].user.profile_image_url)
							.end()
					.append(this.ify.clean(tweets[i].text))
					.appendTo(list);
				}
				container.append(list);
				
				$('li', list).each(function (i, el) {
					
					totalWidth += $(el).outerWidth(true);
				});
				
				list.width(totalWidth);
				
				function scrollTweets() {
					var rand = totalWidth * Math.floor(Math.random() * 10 + 15);
					list.startAnimation({
						right: totalWidth
					}, rand, 'linear', function () {
						list.css('right', - container.width());
						scrollTweets();
					});
				}
				
				scrollTweets();
				
				list.hover(function () {
					list.pauseAnimation();
				}, function () {
					list.resumeAnimation();
				});
			}); // end of twitterlib
		
		},
		iconizeWorkers : function (selector) {
			$(selector).each(function (i, el) {
				var el = $(el), 
					workers = el.text().split(' '),
					path = '';
				
				$.each(workers, function (i, val) {
					path += '<img src="images/' + val.toLowerCase() + '.png" alt="'+ val + '" />';
				});
				
				el.html(path);
			});
		}
	};
};