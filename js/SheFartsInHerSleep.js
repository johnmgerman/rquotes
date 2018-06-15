/*
	Created by John German, currently 35 years old, born November 8, 1980.
*/

/*if (location.protocol !== 'https:') {
    window.location.href = 'https://rquotes.tk';
}*/

jQuery.support.cors = true;
var objectHold = null;
    var URL = 'http://' + window.location.hostname + '/iwillfindyouandiwillkillyou';
	var arr = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l'];
	var deviceWidth = 0;
	var theme = '';
	var userAuth = 'bGVoaWdodmFsbGV5X29wcG9zaXRlb2ZzaTpMZWhpZ2h2YWxsZXlfb3Bwb3NpdGVvZnNpeGNvbXBhbnkxMjMk';
	var applicationBase64 = 'V3JpdGVyc0FkbWluS2VlcGVyOjZHam40QHNaOTBebkIhYTN+NA==';
	var intervalNumber = '';

        //,'http://www.ew.com/^http://www.ew.com/sites/all/themes/ew_com/img/ew-mobile-logo-full.png'
        // 'http://www.poemofquotes.com/^http://www.poemofquotes.com/poqlogo.png', 
        // 'http://www.musicals101.com/^http://www.musicals101.com/images/logomasthead.jpg',
	var ewrj = ['http://www.30rockquotes.net/^https://www.30rockquotes.net/images/header/homepage_logo.png',
	            'http://www.broadwayworld.com/^https://nav.bwwstatic.com/2014/images/newbroadwayworld-logo-trans6-265-compressed.png',
	            'https://www.theodysseyonline.com^https://az616578.vo.msecnd.net/a-prod/package/03fb2ebe2ccbdaf55983bc5596dba8a2.svg',
	            'http://www.fanpop.com/^https://www.fanpop.com/images/2011/fanpop-quad.png?v=1',
	            'https://odetojoandkatniss.wordpress.com/^https://odetojoandkatniss.files.wordpress.com/2014/05/header2-corrected2.jpg',
	            'http://www.allmusicals.com/^https://www.allmusicals.com/new-logo-am.gif',
				'https://www.logogarden.com/^https://www.logogarden.com/wp-content/themes/logogarden/images/logo/logo.png',
				'https://www.lunapic.com/^http://www194.lunapic.com/editor/images/lunapic-bw.gif',
				'http://dc.wikia.com/^https://vignette4.wikia.nocookie.net/marvel_dc/images/8/89/Wiki-wordmark.png/revision/latest?cb=20160607022950',
				'http://marvel.wikia.com/^https://vignette4.wikia.nocookie.net/marveldatabase/images/8/89/Wiki-wordmark.png/revision/latest?cb=20170123113307png'];

	var randomNumber = -1;
	var randomNumber2 = -1;
	var randomNumber3 = -1;
	var randomNum = -1;
	var i = 1;

	while (i < 4)
	{
	    if (i == 1) {
	        randomNumber = asdfwerkui();
	        randomNum = randomNumber;
	    } else if (i == 2) {
	        randomNumber2 = asdfwerkui();
	        randomNum = randomNumber2;

	        if (randomNumber == randomNumber2 || isNaN(randomNum) == true)
	            randomNum = -1;

	    } else if (i == 3) {
	        randomNumber3 = asdfwerkui();
	        randomNum = randomNumber3;

	        if ((randomNumber3 == randomNumber2 || randomNumber3 == randomNumber) || isNaN(randomNum) == true)
	            randomNum = -1;
	    }

	    if (randomNum > -1) {
	        $("#ad_" + i).html('<a href="' + ewrj[randomNum].split('^')[0] + '" target="_blank"><img src="' + ewrj[randomNum].split('^')[1] + '" width="199" height="66" /></a>');
	        i = i + 1;
	    }
	}
	
	/*$.ajax({
			    type: 'GET',
			    cache: false,
			    url: URL + '/w'
			})
			.done(function (msg) {	
                alert('REFERER: ' + msg);
			})
			.fail(function(jqXHR, textStatus, errorThrown)
			{
                alert(textStatus + ' - ' + errorThrown);
			});*/

	function asdfwerkui() {
	   return Math.floor((Math.random() * ewrj.length));
	}

	function updateTheme(newTheme) {
	    theme = newTheme;

	    var rmbtnClasses = '';
	    var rmhfClasses = '';
	    var rmbdClassess = '';

	    qwer = '';

	    $.each(arr, function (index, value) {
	        qwer = value;

	        rmbtnClasses = rmbtnClasses + ' ui-btn-up-' + value + ' ui-btn-hover-' + value;
	        rmhfClasses = rmhfClasses + ' ui-bar-' + value;
	        rmbdClassess = rmbdClassess + ' ui-body-' + value + ' ui-page-theme-' + value;
	    });

	    // reset all the buttons widgets
	    $.mobile.activePage.find('.ui-btn').not('.ui-li-divider').removeClass(rmbtnClasses).addClass('ui-btn-up-' + newTheme).attr('data-theme', newTheme);

	    // reset the header/footer widgets
	    $.mobile.activePage.find('.ui-header, .ui-footer').removeClass(rmhfClasses).addClass('ui-bar-' + newTheme).attr('data-theme', newTheme);

	    // reset the page widget
	    $.mobile.activePage.removeClass(rmbdClassess).addClass('ui-body-' + newTheme + ' ui-page-theme-' + newTheme).attr('data-theme', newTheme);

	    $("#contact_main").removeClass('ui-body-' + qwer + ' ui-page-theme-' + qwer).addClass('ui-body-' + newTheme + ' ui-page-theme-' + newTheme).attr('data-theme', newTheme);
	    $("#search_main").removeClass('ui-body-' + qwer + ' ui-page-theme-' + qwer).addClass('ui-body-' + newTheme + ' ui-page-theme-' + newTheme).attr('data-theme', newTheme);
	    $("#stats_main").removeClass('ui-body-' + qwer + ' ui-page-theme-' + qwer).addClass('ui-body-' + newTheme + ' ui-page-theme-' + newTheme).attr('data-theme', newTheme);
	    $("#settings_main").removeClass('ui-body-' + qwer + ' ui-page-theme-' + qwer).addClass('ui-body-' + newTheme + ' ui-page-theme-' + newTheme).attr('data-theme', newTheme);

	    // target the list divider elements, then iterate through them and
	    // change its theme (this is the jQuery Mobile default for
	    // list-dividers)
	    $.mobile.activePage.find('.ui-li-divider').each(function (index, obj) {
	        $(this).removeClass(rmhfClasses).addClass('ui-bar-' + newTheme).attr('data-theme', newTheme);
	    });
	}

	$(window).bind("resize", function()
	{
		deviceWidth = $('[data-role="page"]').first().width();
		GetRandomMovieQuote(false);
	}).trigger("resize");

	$(document).on("pagecreate", "#welcome", function()
	{
		$("#welcome_main").on("swipeleft", function()
		{
			GetRandomMovieQuote(true);
		});
	});

	$(document).on("pagebeforeshow", "#welcome", function () {
	    updateTheme(theme);
	});

	$(window).on("orientationchange", function()
	{
		$(window).bind("resize", function()
		{
			deviceWidth = $('[data-role="page"]').first().width();
			GetRandomMovieQuote(false);
		}).trigger("resize");
	});

	GetRandomMovieQuote(true);

	function GetRandomMovieQuote(reload)
	{
		//s$('div[data-role=page]:hidden').remove();

		if (reload)
		{
			loadingMessage();

			var decadesString = GetDecadesNumber('settings_decades', '1000');
			var videosOnly = GetLocalStorageItem("settings_videos");
			var savedQuotesFor = GetDecadesNumber('settings_quotesfor', '');

			if (videosOnly == '')
			    videosOnly = '0';

			$.ajax({
			    type: 'GET',
			    cache: false,
			    url: URL + '/TheForceIsStrongWithThisOne/' + decadesString + '/' + videosOnly + '/' + savedQuotesFor,
				headers: {
				    "Authorization": "Basic " + userAuth
				}
			})
			.done(function (msg) {	
                if (msg != '') {
                    weoud = '';

			        msg = JSON.parse(msg);

			        msg = msg[0];

			        objectHold = msg;
					keiuower(msg);
			        FormatMovie(msg);

			        SetPlayerWidth(msg);

			        asdlfkjwer();
			    } else {
			        GetRandomMovieQuote(true);
			    }
			})
			.fail(function(jqXHR, textStatus, errorThrown)
			{
				$("#movie_quote").html("To quote THE FLY: 'something went wrong.'.  An error occurred retrieving the next movie quote.");
				asdlfkjwer();
			});
		}
		else
		{
			SetPlayerWidth(null);
			if (objectHold != null)
				FormatMovie(objectHold);
		}
	}
	
	function yearWords(year) {
		$.ajax({
			type: 'GET',
			cache: false,
			url: URL + '/imustbreakyou/' + year,
			headers: {
				"Authorization": "Basic " + userAuth
			}
		})
		.done(function (msg) {
			msg = JSON.parse(msg);
			msg = msg[0];
			
			if (msg.YWD_Word && parseInt(year) > 1900)
				$("#whats_showing").html($("#whats_showing").html() + '<br/><strong>' + year.substr(0,3) + '0\'s WORD:</strong> ' + msg.YWD_Word);
			else
				$("#whats_showing").html($("#whats_showing").html() + '<br /><strong>Before 1900\'s WORD:</strong> ' + msg.YWD_Word);
			
			if (msg.YWD_Word_ && msg.YWD_Word_ != '')
				$("#whats_showing").html($("#whats_showing").html() + ' - ' + msg.YWD_Word_);
		})
		.fail(function(jqXHR, textStatus, errorThrown)
		{
			alert(textStatus + ' - ' + errorThrown);
			$("#movie_quote").html("To quote THE FLY: 'something went wrong.'.  An error occurred retrieving the next movie quote.");
			asdlfkjwer();
		});
	}

	function asdlfkjwer() {
	    if (intervalNumber != 0)
	        clearInterval(intervalNumber);

	    $.mobile.loading("hide");
	}

	var asdfd = 'loading...';
	var k = 0;
	
	function keiuower(msg)
	{
		if (msg.SQE_Year >= 1910 && msg.SQE_Year <= 1919) {
	        updateTheme('j');
	        weoud = "1910's";
	    }
	    else if (msg.SQE_Year >= 1920 && msg.SQE_Year <= 1929) {
	        updateTheme('g');
	        weoud = "1920's";
	    }
	    else if (msg.SQE_Year >= 1930 && msg.SQE_Year <= 1939) {
	        updateTheme('e');
	        weoud = "1930's";
	    }
	    else if (msg.SQE_Year >= 1940 && msg.SQE_Year <= 1949) {
	        updateTheme('f');
	        weoud = "1940's";
	    }
	    else if (msg.SQE_Year >= 1950 && msg.SQE_Year <= 1959) {
	        updateTheme('d');
	        weoud = "1950's";
	    }
	    else if (msg.SQE_Year >= 1960 && msg.SQE_Year <= 1969) {
	        updateTheme('b');
	        weoud = "1960's";
	    }
	    else if (msg.SQE_Year >= 1970 && msg.SQE_Year <= 1979) {
	        updateTheme('c');
	        weoud = "1970's";
	    }
	    else if (msg.SQE_Year >= 1980 && msg.SQE_Year <= 1989) {
	        updateTheme('a');
	        weoud = "1980's";
	    }
	    else if (msg.SQE_Year >= 1990 && msg.SQE_Year <= 1999) {
	        updateTheme('h');
	        weoud = "1990's";
	    }
	    else if (msg.SQE_Year >= 2000 && msg.SQE_Year <= 2009) {
	        updateTheme('i');
	        weoud = "2000's";
	    }
	    else if (msg.SQE_Year >= 2010 && msg.SQE_Year <= 2019) {
	        updateTheme('k');
	        weoud = "2010's";
	    }
	    else if (msg.SQE_Year < 1910) {
	        updateTheme('l');
	        weoud = msg.SQE_Year + '\s';
	    }

	    $("#whats_showing").html("Welcome to the " + weoud + ".");

	    if (msg.QTS_Name)
	        $("#whats_showing").html($("#whats_showing").html() + "<br/><strong>" + msg.QTS_Name + ' Quote.</strong>');
		
		yearWords(msg.SQE_Year);
	}

	function loadingMessage()
	{			
		//http://stackoverflow.com/questions/7208609/show-page-loading-spinner-on-ajax-call-in-jquery-mobile
		//https://demos.jquerymobile.com/1.2.0/docs/pages/loader.html
		//http://demos.jquerymobile.com/1.4.2/loader/
		$.mobile.loading( "show", {
				text: "loading...",
				textVisible: true,
				theme: theme,
				textonly: true,
				html: "<div id=\"asdfd\" style=\"text-align:center\">loading...</div>"
		});

		intervalNumber = setInterval("aseroiu()", 641);
	}

	function aseroiu() {
	    for (i = 0; i <= 6; i++) {
	        if (i == k) {
	            asdfd = asdfd.replace(asdfd[i], asdflkj(asdfd[i]));

	            if ((i + 1) <= asdfd.length)
	                asdfd = asdfd.replace(asdfd[i+1], asdflkj(asdfd[i+1]));

	            break;
	        }
	    }

	    k = k + 1;

	    if (k > 6)
	        k = 0;

	    $("#asdfd").html(asdfd);
	}

	function asdflkj(letter)
	{
	    if (letter == 'l')
	        letter = 'L';
	    else if (letter == 'L')
	        letter = 'l';
	    else if (letter == 'o')
	        letter = 'O';
	    else if (letter == 'O')
	        letter = 'o';
	    else if (letter == 'a')
	        letter = 'A';
	    else if (letter == 'A')
	        letter = 'a';
	    else if (letter == 'd')
	        letter = 'D';
	    else if (letter == 'D')
	        letter = 'd';
	    else if (letter == 'i')
	        letter = 'I';
	    else if (letter == 'I')
	        letter = 'i';
	    else if (letter == 'n')
	        letter = 'N';
	    else if (letter == 'N')
	        letter = 'n';
	    else if (letter == 'g')
	        letter = 'G';
	    else if (letter == 'G')
	        letter = 'g';

	    return letter;
	}

	function FormatMovie(msg)
	{
	    var formatMovie = '';
		var sqe_name = msg.SQE_Name;
		
		if (msg.SQL_URL != '')
			sqe_name = '<a href="' + msg.SQL_URL + '" target="_blank">' + sqe_name + '</a>';

		if (deviceWidth < 500)
		{
			formatMovie = '"' + msg.SQE_Quote + '"';
			formatMovie = formatMovie + '<br />';
			formatMovie = formatMovie + sqe_name + ' - ' + msg.SQE_Year;
			
			if ((msg.MOV_Character != '' && msg.SQE_Character != null) && (msg.SQE_Actor != "" && msg.SQE_Actor != null))
				formatMovie = formatMovie + ' - ' + msg.SQE_Character + ' (' + msg.SQE_Actor + ')<br /><br />';
		}
		else
		{
		    formatMovie = '<blockquote class="blockQuoteStyle blockquote-' + theme + '">"' + msg.SQE_Quote + '"';
			formatMovie = formatMovie + '<footer class="footerClass">- ' + sqe_name + ' - ' + msg.SQE_Year;
			
			if ((msg.MOV_Character != '' && msg.SQE_Character != null) && (msg.SQE_Actor != "" && msg.SQE_Actor != null))
				formatMovie = formatMovie + ' - ' + msg.SQE_Character + ' (' + msg.SQE_Actor + ')';

			formatMovie = formatMovie + '</footer></blockquote>';
		}

		$("#movie_quote").html(formatMovie);
	}

	function SetPlayerWidth(msg)
	{
	    var width = deviceWidth / 2;
	    width = width - 10;

	    if (width > 450)
	        width = 450;
	    else if (width < 200)
	        width = 225;

	    if (msg == null) {
	        document.getElementById("movie_iframe").width = width;
	        document.getElementById("movie_iframe_contact").width = width;
	    }
	    else if (msg.SQE_URLClip != null && msg.SQE_URLClip != '') {
	        var splitURLClip = msg.SQE_URLClip.split("/");

			$.ajax({
	            type: 'GET',
	            cache: false,
	            url: 'https://www.googleapis.com/youtube/v3/videos?part=id&id=' + splitURLClip[4] + '&key=AIzaSyBJpbXUKWIU2pVKTG7ZjDqJfHK0vxQUhkg'
	        })
            .done(function (msg6) {
                if (msg6.pageInfo.totalResults > 0)
                    document.getElementById("movie_iframe").src = msg.SQE_URLClip + '?autoplay=true&allownetworking=internal&rel=0&modestbranding=1';
                else {
                    UpdatePotentiallyInvalidURL(msg);
                }
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
				UpdatePotentiallyInvalidURL(msg);
            });

	        //controls=0 - disables control bar.
	        //autohide=1 - control bar hides after video starts.
	        //modestbranding=1 - removes youtube HD.
	        //rel=0 - removes related links at end of video.

	        document.getElementById("movie_iframe").width = width;
	        document.getElementById("movie_iframe_contact").width = width;
	    }
	    else
	        document.getElementById("movie_iframe").src = '';
	}
	
	function UpdatePotentiallyInvalidURL(msg)
	{
		var urls = {
			SQE_ID: msg.SQE_ID,
			SQE_URLClip: msg.SQE_URLClip
		};

		urls = JSON.stringify(urls);

		$.ajax(
		{
			type: 'POST',
			context: this,
			url: URL + '/RunForrestRun',
			cache: false,
			contentType: 'application/json; charset=utf-8',
			data: urls,
			headers: {
				"Authorization": "Basic " + userAuth
			}
		})
		.done(function (result) {

		})
		.fail(function (jqXHR, textStatus, errorThrown) {
			alert(textStatus + ' - ' + errorThrown);
		});
	}

	$("#refresh_quote").click(function()
	{
		GetRandomMovieQuote(true);
	});

	$("#search_button").click(function()
	{
		if($("#searchtext").val().length < 3)
		{
			alert("Please enter at least 3 characters to search on.");
		}
		else if ($("#searchby").val() == '5' && isNaN($("#searchtext").val()))
		{
			alert("Please enter a valid year to search on in the format of YYYY.");
		}
		else
		{
		   /* 
                    8/4/2017 - JMG - removed to open up the search feature;  
                                   - Having settings tied to the search without
                                   - having any display of the current settings
                                   - is inadequate.
                    var savedQuotesFor = GetDecadesNumber('settings_quotesfor', '');
		    var savedDecades = GetDecadesNumber('settings_decades', '1000'); 
                   */

                    var savedQuotesFor = '';
		    var savedDecades = '1000';

		    $.ajax({
				type: 'GET',
				url: URL + '/wearegroot/' + $("#searchby").val() + '/' + $("#searchtext").val() + '/' + savedDecades + '/' + savedQuotesFor,
				headers: {
				    "Authorization": "Basic " + applicationBase64
				}
			})
			.done(function (msg)
			{
				msg = JSON.parse(msg);

				//var bgColor = 'f5f5f5';
				var html = '<table width="100%" cellpadding="0" data-theme="' + theme + '" cellspacing="0"><tr><th class="smallScreen" style="text-align:left"><u>Movie</u></th><th class="smallScreen"><u>Actor</u></th><th></th></tr>';
				for(var i=0;i < msg.length; i++)
				{
					var quote = msg[i];
					var sqe_actor = quote.SQE_Actor;

					if (sqe_actor == null)
					    sqe_actor = 'Unknown';

					html = html + '<tr class="blockquote-' + theme + '"><td valign="top" class="smallScreen">' + quote.SQE_Name + '</td>';
					html = html + '<td valign="top" class="smallScreen">' + sqe_actor + '</td>';
					html = html + '<td valign="top" class="smallScreen"><a href="#" id="MOVID_' + quote.SQE_ID + '" data-id="MOVID_' + quote.SQE_ID + '">View</a></td>';
					html = html + '</tr>';

					html = html + '<tr class="blockquote-' + theme + '"><td class="smallScreen" style="border-bottom: 1px dashed gray;word-wrap: break-word;" colspan="3">"' + quote.SQE_Quote + '"</td></tr>';
				}

				html = html + '</table>';

				if (msg.error)
					html = '<strong>Your search returned zero results.<p /> To quote 300, "This is madness!".<p />The search has been logged and the creator will look into finding it, unless it was done in error.</strong>';

				$("#search_results").html(html);
			})
			.fail(function(jqXHR, textStatus, errorThrown)
			{
				$("#search_results").html("To quote THE FLY: 'something went wrong.'.  An error occurred retrieving the search results.");
			});
		}
	});

	$(document).click(function(e)
	{
		if (e.target.id.indexOf("MOVID_") > -1)
		{
		    var mov_id = e.target.id.replace('MOVID_', '');

			$.ajax({
				type: 'GET',
				context: this,
				url: URL + '/IllHaveWhatShesHaving/' + mov_id,
				headers: {
				    "Authorization": "Basic " + userAuth
				}
			})
			.done(function (msg)
			{
			    msg = JSON.parse(msg);
                            keiuower(msg);
			    FormatMovie(msg);

			    SetPlayerWidth(msg);

			    $.mobile.changePage($("#welcome"), "slide", true, true);
			})
			.fail(function(jqXHR, textStatus, errorThrown)
			{
				$("#search_results").html("To quote THE FLY: 'something went wrong.'.  An error occurred retrieving the specific movie quote.");
			});
		}
	});
	
	$(document).on("pagebeforeshow","#search",function() {
		updateTheme(theme);
	});
	
	$(document).on("pagebeforeshow", "#contact", function() {
		updateTheme(theme);
	});

	$(document).on("pagebeforeshow","#stats",function()
	{
		updateTheme(theme);

		$.ajax({
		    type: 'GET',
            cache: false,
			context: this,
			url: URL + '/IWantToBeAlone',
			headers: {
				"Authorization": "Basic " + applicationBase64
			}
		})
		.done(function (msg)
		{
		    if (msg != 'null') {
		        msg = JSON.parse(msg);

		        more_stats = '';

		        for (i = 0; i < msg.length; i++) {
                    
		            var lstUpdatedArry = msg[i].SQS_LastUpdated.split("T");
		            $("#last_updated").text(lstUpdatedArry[0]);
					
					var xap = msg[i].SQS_ID;
					
					if (xap == 'Book' || xap == 'Stage Play' || xap == 'Comic')
						xap = xap + 's';
				
					if (xap == 'T.V')
						xap = xap + 'Shows';

		            more_stats += '<div data-role="collapsible">';
		            more_stats += '<h1>' + msg[i].SQS_ID + ' stats</h1>';
		            more_stats += '<table width="100%">';
		            more_stats += '    <tr class="blockQuoteClass">';
		            more_stats += '	    <td width="150" class="statsCells"><strong>Total Quotes:</strong></td>';
		            more_stats += '	    <td class="statsCells">' + format(msg[i].SQS_TotalQuoteCount) + '</td>';
		            more_stats += '    </tr>';
		            more_stats += '    <tr class="blockQuoteClass">';
		            more_stats += '	    <td class="statsCells" width="150"><strong>Total Quotes<br/>with Videos:</strong></td>';
		            more_stats += '	    <td class="statsCells">' + format(msg[i].SQS_TotalVideos) + '</td>';
		            more_stats += '    </tr>';
		            more_stats += '    <tr class="blockQuoteClass">';
		            more_stats += '	    <td class="statsCells" width="150"><strong>Total ' + xap + ':</strong></td>';
		            more_stats += '	    <td class="statsCells">' + format(msg[i].SQS_TotalQuotes) + '</td>';
		            more_stats += '    </tr>';
		            more_stats += '   <tr class="blockQuoteClass">';
		            more_stats += '	    <td class="statsCells" width="150"><strong>Earliest Quote:</strong></td>';
		            more_stats += '	    <td class="statsCells">' + msg[i].SQS_EarliestQuote + ' (year)' + '</td>';
		            more_stats += '    </tr>';
		            more_stats += '    <tr class="blockQuoteClass">';
		            more_stats += '	    <td class="statsCells" width="150"><strong>Latest Quote:</strong></td>';
		            more_stats += '	    <td class="statsCells">' + msg[i].SQS_LatestQuote + ' (year)' + '</td>';
		            more_stats += '    </tr>';
		            more_stats += '    <tr class="blockQuoteClass">';
		            more_stats += '	    <td class="statsCells" width="150"><strong>Different Years:</strong></td>';
		            more_stats += '	    <td class="statsCells">' + msg[i].SQS_DifferentYears + '</td>';
		            more_stats += '    </tr>';
		            more_stats += '    <tr class="blockQuoteClass">';
		            more_stats += '	    <td class="statsCells" width="150"><strong>Last Updated:</strong></td>';
		            more_stats += '	    <td class="statsCells">' + lstUpdatedArry + '</td>';
		            more_stats += '    </tr>';
		            more_stats += '</table>';
		            more_stats += '</div>';
		        }

		        $("#stats_asdfj").html('<div data-role="collapsibleset">' + more_stats + '</div>').enhanceWithin();
            }
            else
                $("#stats_main").html("To quote THE FLY: 'something went wrong.'.  An error occurred retrieving the app stats.");
		})
		.fail(function(jqXHR, textStatus, errorThrown)
		{
			$("#stats_main").html("To quote THE FLY: 'something went wrong.'.  An error occurred retrieving the app stats.");
		});
	});

	function format(x) {
	    return isNaN(x) ? "" : x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	}

	function GetDecadesNumber(storageName, kwiuerj)
	{
		var savedDecades = '';

		if (localStorage != null && localStorage != "undefined")
		{
		    if (localStorage.getItem(storageName) != null) {
		        savedDecades = localStorage.getItem(storageName);
		    }
		}

		if (savedDecades == '')
			savedDecades = kwiuerj;

		return savedDecades;
	}

	function GetLocalStorageItem(item)
	{
		var returnValue = '';

		if (localStorage != null && localStorage != "undefined")
		{
			if (localStorage.getItem(item) != null)
				returnValue = localStorage.getItem(item);
		}

		return returnValue;
	}
	
	function GetDecades()
	{
	    var savedQuotesFor = GetDecadesNumber('settings_quotesfor', '');

		$.ajax({
		    type: 'GET',
            cache: false,
			context: this,
			url: URL + '/waxon_waxoff/' + savedQuotesFor,
			headers: {
				"Authorization": "Basic " + applicationBase64
			}
		})
		.done (function (decadesListing)
		{
		    decadesListing = JSON.parse(decadesListing);

		    var savedDecades = GetDecadesNumber('settings_decades', '1000');

		    var html = '';
		    for (var i = 0; i < decadesListing.length; i++) {
		        var decade = decadesListing[i];

		        html += '<input type="checkbox" id="decades_' + i + '" name="decades_' + i + '" value="' + decade.MOV_Decade_Year + '"';

		        if (savedDecades.indexOf(decade.MOV_Decade_Year) > -1)
		            html += ' checked ';

		        html += '> ' + decade.MOV_Decade_String;
		        html += '<br />';
		    }

		    $("#settings_decades").html(html);

		    var settings_videos = GetLocalStorageItem("settings_videos");

		    if (settings_videos == '1')
		        $("#settings_videos").checked = true;
		})
		.fail(function(jqXHR, textStatus, errorThrown)
		{
			$("#settings_main").html("To quote THE FLY: 'something went wrong.'.  An error occurred retrieving the app stats.");
		});
	}

	$(document).on("pagebeforeshow", "#settings", function()
	{
		updateTheme(theme);
		
		GetDecades();
		
		$.ajax({
			type: 'GET',
			context: this,
			url: URL + '/HeyStella',
			headers: {
				"Authorization": "Basic " + applicationBase64
			}
		})
		.done (function (quotesFor)
		{
		    quotesFor = JSON.parse(quotesFor);

		    var savedQuotesFor = GetDecadesNumber('settings_quotesfor', '');

		    var html = '';
		    for (var i = 0; i < quotesFor.length; i++) {
		        var quotes = quotesFor[i];

		        html += '<input type="checkbox" id="quotesfor_' + i + '" name="quotesfor_' + i + '" value="' + quotes.QTS_ID + '"';

		        if (savedQuotesFor.indexOf(quotes.QTS_ID) > -1)
		            html += ' checked ';

		        html += '> ' + quotes.QTS_Name;
		        html += '<br />';
		    }

		    $("#settings_quotesfor").html(html);
		})
		.fail(function(jqXHR, textStatus, errorThrown)
		{
		
		});
	});
	
	function SaveSettings(formName, storageName) {
		var asdf = '';

		var theForm = document.settings_form;

		for (var i=0;i<50;i++ )
		{
			if(theForm[formName + i] != null)
			{
				if (theForm[formName + i].checked)
				{
					if (asdf == '')
						asdf = theForm[formName + i].value;
					else
						asdf = asdf + "," + theForm[formName + i].value;
				}
			}
		}

		localStorage.setItem(storageName, asdf);
	}

	$("#settings_button").click(function()
	{	
		SaveSettings("decades_", "settings_decades");
		SaveSettings("quotesfor_", "settings_quotesfor");
		
		GetDecades();

		var theForm = document.settings_form;
		
		if (theForm.settings_video.checked)
			localStorage.setItem("settings_videos", '1');
		else
			localStorage.setItem("settings_videos", '0');
		
		$("#settings_message").html("Information saved successfully. <p />");
	});