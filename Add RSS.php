<?php
/*
Plugin Name: Add RSS
Plugin URI: http://dancameron.org/wordpress/
Description: Add RSS Feeds to your template header for Firefox and other browsers to detect your additional RSS feeds. Feeds are not excluded to local RSS to your site. Forexample you can add your Twitter or Pownce feed just as easily as adding your comments feed.
Version: .9
Author: Dan Cameron
Author URI: http://dancameron.org
*/

/*
This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, version 2.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
*/


function add_rss_header() {

	$option_feed1   = get_option("option_feed1");
	$option_feed2   = get_option("option_feed2");
	$option_feed3   = get_option("option_feed3");
	$option_feed4   = get_option("option_feed4");
	$option_feed5   = get_option("option_feed5");
	$option_feed6   = get_option("option_feed6");
	$option_feed7   = get_option("option_feed7");
	$add_rss_feed1   = get_option("add_rss_1");
	$add_rss_feed2   = get_option("add_rss_2");
	$add_rss_feed3   = get_option("add_rss_3");
	$add_rss_feed4   = get_option("add_rss_4");
	$add_rss_feed5   = get_option("add_rss_5");
	$add_rss_feed6   = get_option("add_rss_6");
	$add_rss_feed7   = get_option("add_rss_7");
	$addrss1desc   = get_option("addrss1desc");
	$addrss2desc   = get_option("addrss2desc");
	$addrss3desc   = get_option("addrss3desc");
	$addrss4desc   = get_option("addrss4desc");
	$addrss5desc   = get_option("addrss5desc");
	$addrss6desc   = get_option("addrss6desc");
	$addrss7desc   = get_option("addrss7desc");
	$url = get_option("home");

	?>

	<!-- Add RSS feeds -->

	<?php if( get_option('option_feed1') == 'true') { ?>	
		<link rel="alternate" type="application/rss+xml" title="<?php echo get_option('addrss1desc'); ?>" href="<?php echo get_option('add_rss_1'); ?>" />
	<?php } ?>
	<?php if( get_option('option_feed2') == 'true') { ?>	
		<link rel="alternate" type="application/rss+xml" title="<?php echo get_option('addrss2desc'); ?>" href="<?php echo get_option('add_rss_2'); ?>" />
	<?php } ?>
	<?php if( get_option('option_feed3') == 'true') { ?>	
		<link rel="alternate" type="application/rss+xml" title="<?php echo get_option('addrss3desc'); ?>" href="<?php echo get_option('add_rss_3'); ?>" />
	<?php } ?>
	<?php if( get_option('option_feed4') == 'true') { ?>	
		<link rel="alternate" type="application/rss+xml" title="<?php echo get_option('addrss4desc'); ?>" href="<?php echo get_option('add_rss_4'); ?>" />
	<?php } ?>
	<?php if( get_option('option_feed5') == 'true') { ?>	
		<link rel="alternate" type="application/rss+xml" title="<?php echo get_option('addrss5desc'); ?>" href="<?php echo get_option('add_rss_5'); ?>" />
	<?php } ?>
	<?php if( get_option('option_feed6') == 'true') { ?>	
		<link rel="alternate" type="application/rss+xml" title="<?php echo get_option('addrss6desc'); ?>" href="<?php echo get_option('add_rss_6'); ?>" />
	<?php } ?>
	<?php if( get_option('option_feed7') == 'true') { ?>	
		<link rel="alternate" type="application/rss+xml" title="<?php echo get_option('addrss7desc'); ?>" href="<?php echo get_option('add_rss_7'); ?>" />
	<?php } ?>


	<!-- Add RSS (end) -->

<?php } // end add_rss_header()

//admin panel
function add_rss_adminPanel() {
		add_options_page('Add RSS', 'Add RSS', 10,
			basename(__FILE__), 'add_rss_optionsSubpanel');
}
function add_rss_optionsSubpanel() {
	if($_POST['action'] == "save") {
		echo "<div class=\"updated fade\" id=\"limitcatsupdatenotice\"><p>" . __("Configuration <strong>updated</strong>.") . "</p></div>";
		//updating stuff..
		update_option("add_rss_1", $_POST["addrss1"]);
		update_option("add_rss_2", $_POST["addrss2"]);
		update_option("add_rss_3", $_POST["addrss3"]);
		update_option("add_rss_4", $_POST["addrss4"]);
		update_option("add_rss_5", $_POST["addrss5"]);
		update_option("add_rss_6", $_POST["addrss6"]);
		update_option("add_rss_7", $_POST["addrss7"]);
		update_option("addrss1desc", $_POST["rss1desc"]);
		update_option("addrss2desc", $_POST["rss2desc"]);
		update_option("addrss3desc", $_POST["rss3desc"]);
		update_option("addrss4desc", $_POST["rss4desc"]);
		update_option("addrss5desc", $_POST["rss5desc"]);
		update_option("addrss6desc", $_POST["rss6desc"]);
		update_option("addrss7desc", $_POST["rss7desc"]);
		update_option("option_feed1", $_POST["optaddrss1"]);
		update_option("option_feed2", $_POST["optaddrss2"]);
		update_option("option_feed3", $_POST["optaddrss3"]);
		update_option("option_feed4", $_POST["optaddrss4"]);
		update_option("option_feed5", $_POST["optaddrss5"]);
		update_option("option_feed6", $_POST["optaddrss6"]);
		update_option("option_feed7", $_POST["optaddrss7"]);
					
		$option_feed1   = get_option("option_feed1");
		$option_feed2   = get_option("option_feed2");
		$option_feed3   = get_option("option_feed3");
		$option_feed4   = get_option("option_feed4");
		$option_feed5   = get_option("option_feed5");
		$option_feed6   = get_option("option_feed6");
		$option_feed7   = get_option("option_feed7");
		$add_rss_feed1   = get_option("add_rss_1");
		$add_rss_feed2   = get_option("add_rss_2");
		$add_rss_feed3   = get_option("add_rss_3");
		$add_rss_feed4   = get_option("add_rss_4");
		$add_rss_feed5   = get_option("add_rss_5");
		$add_rss_feed6   = get_option("add_rss_6");
		$add_rss_feed7   = get_option("add_rss_7");
		$addrss1desc   = get_option("addrss1desc");
		$addrss2desc   = get_option("addrss2desc");
		$addrss3desc   = get_option("addrss3desc");
		$addrss4desc   = get_option("addrss4desc");
		$addrss5desc   = get_option("addrss5desc");
		$addrss6desc   = get_option("addrss6desc");
		$addrss7desc   = get_option("addrss7desc");
		$url = get_option("home");

	     }

		?>
		
		<div class="wrap">
		<h2>Add RSS Feeds</h2>	
		<form method="post">
	    <fieldset class="options">
			
			
			
			<legend>First</legend>
			<table class="optiontable">
				
			<tr valign="top">
			<th scope="row">
			<label for="rssone">Add RSS Feed</label>
			</th>
			<td>
			<input name="optaddrss1" type="checkbox" id="optaddrss1" value="true"  <?php if(get_option('option_feed1') == 'true') { echo 'checked="true"'; } ?> />
			<br/>
			</td>
			</tr>

			<tr valign="top">
			<th scope="row">
			<label for="rssonedesc">First RSS Label</label>
			</th>
			<td>
			<input type="text" name="rss1desc" size="10" value="<?php echo get_option('addrss1desc'); ?>"><br>(example: "RSS 2.0 - Comments" )
			<br/>
			</td>
			</tr>

			<tr valign="top">
			<th scope="row">
			<label for="rssoneurl">Add RSS Feed</label>
			</th>
			<td>
			<input type="text" name="addrss1" size="30" value="<?php echo get_option('add_rss_1'); ?>"><br> (example: "comments/feed/" or "http://feeds.dancameron.org/dancameron"" )<br/><br/><a href="#submit">Save</a><br/><br/><br/><br/>
			</td>
			</tr>
			
			
			
			<legend>Second</legend>
			<table class="optiontable">
					
					
			<tr valign="top">
			<th scope="row">
			<label for="rssone">Additional RSS Feed</label>
			</th>
			<td>
			<input name="optaddrss2" type="checkbox" id="optaddrss2" value="true"  <?php if(get_option('option_feed2') == 'true') { echo 'checked="true"'; } ?> />
			<br/>
			</td>
			</tr>

			<tr valign="top">
			<th scope="row">
			<label for="rsstwodesc">RSS Label</label>
			</th>
			<td>
			<input type="text" name="rss2desc" size="10" value="<?php echo get_option('addrss2desc'); ?>">
			<br/>
			</td>
			</tr>

			<tr valign="top">
			<th scope="row">
			<label for="rsstwourl">Second RSS URI</label>
			</th>
			<td>
			<input type="text" name="addrss2" size="30" value="<?php echo get_option('add_rss_2'); ?>">
			<br/><br/><a href="#submit">Save</a><br/><br/> 
			</td>
			</tr>
			
			
			<legend>Third</legend>
			<table class="optiontable">
					
					
			<tr valign="top">
			<th scope="row">
			<label for="rss3">Additional RSS Feed</label>
			</th>
			<td>
			<input name="optaddrss3" type="checkbox" id="optaddrss3" value="true"  <?php if(get_option('option_feed3') == 'true') { echo 'checked="true"'; } ?> />
			<br/>
			</td>
			</tr>

			<tr valign="top">
			<th scope="row">
			<label for="rss3desc">RSS Label</label>
			</th>
			<td>
			<input type="text" name="rss3desc" size="10" value="<?php echo get_option('addrss3desc'); ?>">
			<br/>
			</td>
			</tr>

			<tr valign="top">
			<th scope="row">
			<label for="rss3url">Third RSS URI</label>
			</th>
			<td>
			<input type="text" name="addrss3" size="30" value="<?php echo get_option('add_rss_3'); ?>">
			<br/><br/><a href="#submit">Save</a><br/><br/> 
			</td>
			</tr>
			
			<legend>Fourth</legend>
			<table class="optiontable">
					
					
			<tr valign="top">
			<th scope="row">
			<label for="rss4">Additional RSS Feed</label>
			</th>
			<td>
			<input name="optaddrss4" type="checkbox" id="optaddrss4" value="true"  <?php if(get_option('option_feed4') == 'true') { echo 'checked="true"'; } ?> />
			<br/>
			</td>
			</tr>

			<tr valign="top">
			<th scope="row">
			<label for="rss4desc">RSS Label</label>
			</th>
			<td>
			<input type="text" name="rss4desc" size="10" value="<?php echo get_option('addrss4desc'); ?>">
			<br/>
			</td>
			</tr>

			<tr valign="top">
			<th scope="row">
			<label for="rss4url">Fourth RSS URI</label>
			</th>
			<td>
			<input type="text" name="addrss4" size="30" value="<?php echo get_option('add_rss_4'); ?>">
			<br/><br/><a href="#submit">Save</a><br/><br/> 
			</td>
			</tr>
			
			
			<legend>Fifth</legend>
			<table class="optiontable">
					
					
			<tr valign="top">
			<th scope="row">
			<label for="rss5">Additional RSS Feed</label>
			</th>
			<td>
			<input name="optaddrss5" type="checkbox" id="optaddrss5" value="true"  <?php if(get_option('option_feed5') == 'true') { echo 'checked="true"'; } ?> />
			<br/>
			</td>
			</tr>

			<tr valign="top">
			<th scope="row">
			<label for="rss5desc">RSS Label</label>
			</th>
			<td>
			<input type="text" name="rss5desc" size="10" value="<?php echo get_option('addrss5desc'); ?>">
			<br/>
			</td>
			</tr>

			<tr valign="top">
			<th scope="row">
			<label for="rss5url">Fifth RSS URI</label>
			</th>
			<td>
			<input type="text" name="addrss5" size="30" value="<?php echo get_option('add_rss_5'); ?>">
			<br/><br/><a href="#submit">Save</a><br/><br/> 
			</td>
			</tr>
			
			
			<legend>Sixth</legend>
			<table class="optiontable">
					
					
			<tr valign="top">
			<th scope="row">
			<label for="rss6">Additional RSS Feed</label>
			</th>
			<td>
			<input name="optaddrss6" type="checkbox" id="optaddrss6" value="true"  <?php if(get_option('option_feed6') == 'true') { echo 'checked="true"'; } ?> />
			<br/>
			</td>
			</tr>

			<tr valign="top">
			<th scope="row">
			<label for="rss6desc">RSS Label</label>
			</th>
			<td>
			<input type="text" name="rss6desc" size="10" value="<?php echo get_option('addrss6desc'); ?>">
			<br/>
			</td>
			</tr>

			<tr valign="top">
			<th scope="row">
			<label for="rss6url">Sixth RSS URI</label>
			</th>
			<td>
			<input type="text" name="addrss6" size="30" value="<?php echo get_option('add_rss_6'); ?>">
			<br/><br/><br/><br/> 
			</td>
			</tr>
			
			
			<legend>Seventh Time</legend>
			<table class="optiontable">
					
					
			<tr valign="top">
			<th scope="row">
			<label for="rss7">Additional RSS Feed</label>
			</th>
			<td>
			<input name="optaddrss7" type="checkbox" id="optaddrss7" value="true"  <?php if(get_option('option_feed7') == 'true') { echo 'checked="true"'; } ?> />
			<br/>
			</td>
			</tr>

			<tr valign="top">
			<th scope="row">
			<label for="rss7desc">RSS Label</label>
			</th>
			<td>
			<input type="text" name="rss7desc" size="10" value="<?php echo get_option('addrss7desc'); ?>">
			<br/>
			</td>
			</tr>

			<tr valign="top">
			<th scope="row">
			<label for="rss7url">Seventh RSS URI</label>
			</th>
			<td>
			<input type="text" name="addrss7" size="30" value="<?php echo get_option('add_rss_7'); ?>">
			<br/> 
			</td>
			</tr>
			
			
		
		</table>
	    </fieldset>
		<a name="submit">
		<fieldset class="options">
		<div class="submit">
		<input type="hidden" name="action" value="save">
		<input type="submit" value="Save">
		</div>
		</fieldset>
		</form>
		<br><br>
	
	</div>
		<?php } // end add_rss_optionsSubpanel()

//user hooks
add_action('wp_head', 'add_rss_header');


//admin hooks
add_action('admin_menu', 'add_rss_adminPanel');

?>
