<?php
	$services = array(
				'facebook' 			=> 'Facebook.com',
				'googleplus'		=> 'plus.google.com',
				'twitter'			=> 'Twitter.com',
				'linkedin'			=> 'Linkedin.com',
				'dropbox'			=> 'Dropbox.com',
				'evernote'			=> 'Evernote.com',
				'forrst'			=> 'Forrst.com',
				'dribbble'			=> 'Dribbble.com',
				'cloudapp'			=> 'Cloudapp',
				'github'			=> 'Github.com',
				'spotify'			=> 'Spotify.com',
				'instapaper'		=> 'Instapaper.com',
				'soundcloud'		=> 'Soundcloud.com',
				'tumblr'			=> 'Tumblr.com',
				'smashing'			=> 'Smashingmagazine.com',
				'itunes'			=> 'iTunes.com',
				'appstore'			=> 'apple.com/mac/app-store/',
				'macstore'			=> 'store.apple.com',
				'android'			=> 'Android.com',
				'pinterest'			=> 'Pinterest.com',
				'quora'				=> 'Quora',
				'lanyrd'			=> 'lanyrd',
				'paypal'			=> 'Paypal.com',
				'amazon'			=> 'Amazon.com',
				'skype'				=> 'Skype.com',
				'lastfm'			=> 'Lastfm.com',
				'yelp'				=> 'Yelp.com',
				'foursquare'		=> 'Foursquare.com',
				'klout'				=> 'klout',
				'wikipedia'			=> 'Wikipedia.org',
				'disqus'			=> 'Disqus.com',
				'intensedebate'		=> 'Intensedebate.com',
				'google'			=> 'Google.com',
				'gmail'				=> 'Gmail.com',
				'vimeo'				=> 'Vimeo.com',
				'scribd'			=> 'Scribd.com',
				'youtube'			=> 'Youtube.com',
				'wordpress'			=> 'Wordpress.org',
				'songkick'			=> 'Songkick.com',
				'posterous'			=> 'Posterous.com',
				'eventbrite'		=> 'Eventbrite.com',
				'flattr'			=> 'Flattr.com',
				'plancast'			=> 'Plancast.com',
				'yahoo'				=> 'Yahoo.com',
				'ie'				=> 'windows.microsoft.com',
				'meetup'			=> 'Meetup.com',
				'openid'			=> 'Openid',
				'html5'				=> 'w3.org',
				'aol'				=> 'AOL',
				'guest'				=> 'Guset Icon',
				'creativecommons'	=> 'Creative Commons',
				'rss'				=> 'RSS',
				'chrome'			=> 'Chrome Icon',
				'eventasaurus'		=> 'Eventasaur.us',
				'weibo'				=> 'Weibo',
				'plurk'				=> 'Plurk',
				'grooveshark'		=> 'Grooveshark',
				'blogger'			=> 'Blogger.com',
				'viadeo'			=> 'Viadeo.com',
				'podcast'			=> 'Podcast',
				'fivehundredpx'		=> 'Fivehundredpx',
				'bitcoin'			=> 'Bitcoin',
				'ninetyninedesigns'	=> 'Ninetyninedesigns',
				'pinboard'			=> 'Pinboard',
				'stumbleupon'		=> 'Stumbleupon.com',
				'myspace'			=> 'Myspace.com',
				'windows'			=> 'Windows',
				'eventful'			=> 'Eventful',
				'xing'				=> 'Xing.com',
				'flickr'			=> 'Flickr.com',
				'delicious'			=> 'delicious',
				'googleplay'		=> 'googleplay',
				'opentable'			=> 'opentable',
				'digg'				=> 'digg.com',
				'reddit'			=> 'Reddit',
				'call'				=> 'call',
				'email'				=> 'email',
				'cal'				=> 'calender',
				'cart'				=> 'cart',
				'print'				=> 'print'
			);
/* Start tsepop.htm */
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zocial</title>

<script type="text/javascript" src="<?php echo $_GET['zocialpop']; ?>"></script>
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="<?php echo $_GET['pluginUrl'] . 'js/jqueryui.js' ?>"></script>
<script src="<?php echo $_GET['pluginUrl'] . 'js/jquery.qtip.min.js' ?>"></script>

<link rel="stylesheet" href="<?php echo $_GET['pluginUrl'] . 'css/bootstrap.css' ?>" />
<link rel="stylesheet" href="<?php echo $_GET['pluginUrl'] . 'css/bootstrap-responsive.css' ?>" />
<link rel="stylesheet" href="<?php echo $_GET['pluginUrl'] . 'css/zocial.css' ?>" />
<link rel="stylesheet" href="<?php echo $_GET['pluginUrl'] . 'css/jquery.qtip.min.css' ?>" />
<style type="text/css">
	.input-prepend .add-on, .input-prepend .btn {
		margin-right: -5px;
	}
	.checkbox {
		padding-left: 25px;
	}
	.ui-helper-hidden-accessible {
		position: absolute !important;
		clip: rect(1px 1px 1px 1px);
	}
</style>
<base target="_self" />
</head>
<body>
	<div class="container">
		
<?php
/*
for ( $i = 0; $i < sizeof( $smileys ); $i++ ) {
	echo "\t\t\t<img src=\"{$tsedir}/{$smileys[$i][1]}\" alt=\"{$smileys[$i][2]}\" title=\"{$smileys[$i][2]}\" onclick=\"javascript:ZOCIALDialog.insert('{$smileys[$i][0]}');\" />\n";
}*/
?>
		
		<form class="form-horizontal zocialpop">
			<fieldset>
				<div id="legend" class="">
					<legend class="">Zocial Shortcode Insert</legend>
				</div>
				<div class="control-group">

					<!-- Text input-->
					<label class="control-label" for="input01">URL</label>
					<div class="controls">
						<input type="text" placeholder="http://www.example.com/follow_me" class="input-xlarge href">
					<p class="help-block">Here goes the URL/Link.</p>
					</div>
				</div>
				<div class="control-group">

					<!-- Prepended checkbox -->
					<label class="control-label">Label</label>
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on">
								<label class="checkbox">
									<input type="checkbox" class="iconcheck">
								</label>
							</span>
							<input class="span2 content" size="16" placeholder="Sign in with Blah Blah" type="text">
						</div>
						<p class="help-block">Tick the checkbox if you want only the icon.</p>
					</div>

				</div>
				<div class="control-group">
					<label class="control-label">Service</label>
					<div class="controls">
						<div id="radio">
							<?php
								foreach($services as $s => $v) {
									echo '<input type="radio" id="' . $s . '" name="service" value="' . $s . '" />';
									echo '<label for="' . $s . '" data-help="' . $s . '" class="zocial icon '.$s.'"><span>' . $s . '</span></label>';
								}
							
							?>
							<p class="help-block">Click on anyone service to select it.</p>
						</div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<button type="button" class="GSC btn btn-primary">Generate Shortcode</button>
						<button class="btn" id="popCancel">Cancel</button>
					</div>
				</div>
			</fieldset>
		</form>
		<div class="SCpreview">
			<div class="well prettyprint">
				<span class="SCfirst">[zocial </span>
				<span class="SCser">s=</span>
				<span class="SChref">href=</span>
				<span class="SCicon">icon=false]</span>
				<span class="SCcontent"></span>
				<span class="SClast">[/zocial]</span>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var ZOCIALDialog = {
			init : function(ed) {
				tinyMCEPopup.resizeToInnerSize();
			},

			insert : function insertTSE(code) {
				tinyMCEPopup.execCommand('mceInsertContent', false, code);
				tinyMCEPopup.close();
			}
		};
		tinyMCEPopup.onInit.add(ZOCIALDialog.init, ZOCIALDialog);
	
		$(document).ready(function(){
			
			var toolTipConf	= {
						content: {
							attr: 'data-help'
						},
						position: {
							at: 'top center', 
							my: 'bottom center'
						},
						style: {
							classes: 'ui-tooltip-rounded ui-tooltip-shadow ui-tooltip-tipsy'
						}
					};
			$('a[data-help],label[data-help]').qtip(toolTipConf);
			
			$('#radio').buttonset();
			
			$('a').on('click', function(e){
				e.preventdefault();
			});
			
			$('.iconcheck').on('click', function(e){
				console.log($('.iconcheck:checked').val())
				if( $('.iconcheck:checked').val() !== undefined ) {
					$('.SCicon').html( 'icon=true]' );
				}
				else{
					$('.SCicon').html( 'icon=false]' );				
				}
			});
				
			$('.href').on('keyup', function(e){
				$('.SChref').html( 'href=' + $(this).val() );
			});

			$('.content').on('keyup', function(e){
				$('.SCcontent').html( $('.content').val() );
			});
			
			$('input[name=service]').on('change', function() {
				$('.SCser').html( 's=' + $(this).val() );
			});
			
			function globalHandler(e){
				var ser = $('form').find('input[name=service]:checked').val();
				if(!$('label.' + ser ).hasClass('active') ) {
					$('form label').removeClass('last_active');	
					$('form label.active').addClass('last_active').removeClass('active');
					$('form label.' + ser ).addClass('active');
				}
				return false;
			}
			$('form').bind('change', globalHandler);
			
			
			
			$('.GSC').on('click', function(e) {
				var icon = ( $('.iconcheck:checked').val() !== undefined )? true : false,
					href 	= ( $('.href').val() )? $('.href').val() : 'http://wordpress.org/extend/plugins/zocial/',
					ser = $('form').find('input[name=service]:checked').val(),
					content = ( $('.content').val() )? $('.content').val() : ser,
					s = ( ser !== undefined )? ser : 'wordpress';
					
				ZOCIALDialog.insert( '[zocial s=' + s + ' href=' + href + ' icon=' + icon + ']' + content + '[/zocial]' );
			});
			$('#popCancel').on('click', function(e){
				tinyMCEPopup.close();
			});
		});
	</script>
</body>
</html>
<?php /* End tsepop.htm */ ?>