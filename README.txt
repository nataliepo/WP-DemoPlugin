This is a WP plugin that I created for the 2/23/10 WordPress "Writing your first plugin" meetup in NYC.  

INSTALLATION:
	* place the hackday.php file in your Wordpress wp-content/plugins/ directory
	* log into your WP install
	* go to the Plugins page
	* Activate this plugin
	
	
USAGE:
 	Since this plugin uses a callback 'add_shortcode' that translates a string in entry text into the textblock in my code, it's a great example of how users can hack a solution that's Good Enough for their usage.

	If you place
		[bgaddress location="MN"]
	anywhere in your entry body and save it, the dynamically loaded page will show
		Dude McGee
		24 Gumpdrop Lane
		Some Town, MN 34612
	in its place.
	
	Otherwise, if you place any other state as the location, it will show the other address
		Dude McGee
		100 Times Square #24236
		New York, NY 10101
	