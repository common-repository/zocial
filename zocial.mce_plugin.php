<?php
header('Content-type: application/x-javascript');
$zocialpop = ( isset( $_GET['zocialpop'] ) ) ? "?zocialpop={$_GET['zocialpop']}" : '';
$params = ( isset( $_GET['pluginUrl'] ) ) ? "{$zocialpop}&pluginUrl={$_GET['pluginUrl']}" : '';
/* Start zocial.mce_plugin.js */
?>
(function() {
	tinymce.create('tinymce.plugins.ZOCIALPlugin', {
		init : function(ed, url) {
			// Register commands
			ed.addCommand('mceZOCIAL', function() {
				ed.windowManager.open({
					file : url + '/zocial.mcepop.php<?php echo $params; ?>',
					width : 650 + parseInt(ed.getLang('zocial.delta_width', 0)),
					height : 700 + parseInt(ed.getLang('zocial.delta_height', 0)),
					inline : 1
				}, {
					plugin_url : url
				});
			});

			// Register buttons
			ed.addButton('zocial', {title : 'Zocial Plugin for Wordpress: Insert Zocial', cmd : 'mceZOCIAL', image : url + '/css/zocial24x24.png'});
		},

		getInfo : function() {
			return {
				longname : 'ZOCIAL',
				author : 'Agnel Waghela',
				authorurl : 'http://agnelwaghela.wordpress.com/',
				infourl : 'http://agnelwaghela.site90.net/zocial',
				version : tinymce.majorVersion + "." + tinymce.minorVersion
			};
		}
	});

	// Register plugin
	tinymce.PluginManager.add('zocial', tinymce.plugins.ZOCIALPlugin);
})();
<?php /* End zocial.mce_plugin.js */ ?>