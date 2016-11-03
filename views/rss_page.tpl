
<button id="rss_toggle">rss feed</button>
<form id="rss_feed">
<select onchange="showRSS(this.value)">
<option value="">Select an RSS-feed:</option>
<option value="Google">Google News</option>
</select>
<div id="rssOutput">RSS-feed will be listed here...</div>
</form>
<script type="text/javascript" src="includes/jquery.js"></script>