<div class="wrap zocial_admin">
	<div class="icon32" id="icon-zocial"></div>
	
	<h2 id="zocial_title">Zocial</h2>
	<br />
	<div id="zocial_tabs">
		<ul>
			<li><a href="#zocial_home">Home</a></li>
			<li><a href="#zocial_doc">Documentation</a></li>
		</ul>
		<div id="zocial_home">
		<p class='sharingbar'><a href="https://twitter.com/agnel_waghela" class="twitter-follow-button" data-show-count="true">Follow @agnel_waghela</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<a href="https://twitter.com/share" class="twitter-share-button" data-text="WP plugin for 42 CSS3 FONT-FACE VECTOR ICON BUTTONS http://goo.gl/01gvw" data-via="agnel_waghela" data-related="agnel_waghela" data-hashtags="zocial,agnel_waghela">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				<iframe src="http://markdotto.github.com/github-buttons/github-btn.html?user=agnel&repo=zocial&type=fork&count=true"
  allowtransparency="true" frameborder="0" scrolling="0" width="95px" height="20px" data-help="Fork this project on Github"></iframe>
<iframe src="http://markdotto.github.com/github-buttons/github-btn.html?user=agnel&type=follow&count=true"
  allowtransparency="true" frameborder="0" scrolling="0" width="165px" height="20px" data-help="Follow the Author on Github"></iframe></p>
			<h3>Good buttons make good neighbours.</h3>
			<p>'Zocial' is Simple plugin for adding Social Network Links in a different way. Just go through the Documentation - The 5min Guide To <strong>ZOCIAL</strong>.</p>
			<h3>Features</h3>
			<ol>
				<li>@Font-Face icons</li>
				<li>Custom Font file for all social icons</li>
				<li>em sizing based on button font-size</li>
				<li>Support for about **73** different Services</li>
				<li>No raster images (sweet)</li>
				<li>Editable button text</li>
				<li>Editable size</li>
				<li>One version for all resolutions</li>
				<li>100% vector icon with @font-face</li>
				<li>Cross-browser support</li>
				<li>Works splendidly on any browser supporting @font-face</li>
				<li>Gracefully degrades (IE6, IE7)</li>
				<li>Button & Icon styles</li>
				<li>Also includes generic icon-less primary and secondary buttons</li>
			</ol>
			Contact Author:
			<?php
				foreach($author_media_links as $s => $l) {
					echo "<a href='{$l}' class='zocial icon {$s}' data-help='".strtoupper($s)."'>{$s}</a>";
				}
			?>
		</div>
		<div id="zocial_doc">
			<div id="zocial_documentation">
				<h3 id="toc"><strong>Table of Contents</strong></h3>
				<ol class="alpha">
					<li><a href="#setup">Installing the Plugin</a></li>
					<li><a href="#useofshortcode" data-help="This will tell you how to use the Plugin Shortcode in your to get those 'Zocial' Buttons">Use of Shortcode</a></li>
					<li><a href="#keywords">Keywords</a></li>
					<li><a href="#demos">Demos</a></li>
					<li><a href="#contact">Contact Me</a></li>
				</ol>
				<hr class="space" />
				<h3 id="setup">A. Setting the plugin - <a href="#toc">Top</a></h3>
				<p>This plugin does have any settings as such. So you need not worry at all.</p>
				<pre>Note: This plugin does not use any jQuery to render those buttons it is purely based on CSS and Fonts.</pre>
				<hr class="space" />
				<h3 id="useofshortcode">B. How to Use the Shortcode? - <a href="#toc">Top</a></h3>
				<p>Its very Simple. Take a look at the code below.</p>
				<strong>The Code: </strong><pre>[zocial href="http://www.facebook.com/" s="facebook" icon="false"]Like Us on Facebook![/zocial]</pre>
				<strong>Output: </strong>
				<p style="font-size: 13px;"><button class="zocial facebook" data-help="Icon Parameter set to false">Like Us on Facebook!</button>
				<button class="zocial facebook icon" data-help="Icon Parameter set to true">Like Us on Facebook!</button></p>
				
				<strong>Lets see what the above code means.</strong>
				<br />
				<table>
					<thead>
						<tr>
							<th>Parameter</th>
							<th>Accepted Values</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>zocial</td>
							<td>The Keyword for using this shortcode! <strong><i>The Closing tag is very much necessary.</i></strong></td>
						</tr>
						<tr>
							<td>href=""</td>
							<td>The Link to You particular Social Page, Profile, Application or any Social Link.</td>
						</tr>
						<tr>
							<td>s</td>
							<td>It Stands for 'Service'. The name of Social Service You would like to use. See the <a href="#keywords">Full List of keywords</a> of Available social services.</td>
						</tr>
						<tr>
							<td>icon</td>
							<td>It is boolean. Either 'true' or 'false'. If it is set to true then the text between the Shortcode [zocial]The Text[/zocial] wont appear it will just show the icon only.</td>
						</tr>
					</tbody>
				</table>
				<hr class="space" />
				<h3 id="keywords">C. Keywords - <a href="#toc">Top</a></h3>
				
				<table>
					<thead>
						<tr>
							<th>Keyword</th>
							<th>Name of Social Network</th>
						</tr>
					</thead>
					<tbody>
					<?php
						foreach($zocialServices as $k => $v) {
							echo "<tr>".
									"<td><strong>{$k}</strong></td>".
									"<td>{$v}</td>".
								 "</tr>";
						}
					?>
					</tbody>
				</table>
				<hr class="space" />
				<h3 id="demos">D. Demos - <a href="#toc">Top</a></h3>
				<?php
					foreach($zocialServices as $k => $v) {
						echo "<button style='font-size: 13px;' class='zocial icon {$k}' data-help='".strtoupper($k)."'>{$v}</button>";
					}
				?>
				<hr class="space" />
				<h3 id="contact">Thank you - <a href="#toc">Top</a></h3>
				<p>Thank you for using this plugin. If you have any problem you can contact me <a href="admin.php?page=zocial_admin_page#zocial_home">Here</a>.</p>
				<p>If you like this plugin, you can show your love - </p>
				<p><a href="#toc">Go To Table of Contents</a></p>
			</div>
		</div>
	</div>
</div>