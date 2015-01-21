<?
	$g_extraheaders = "<link rel=\"stylesheet\" type=\"text/css\" href=\"listmenu.css\" />\n";
	$page='listmenu'; include("../../../header.inc.php");
?>


<script src="listmenu.js" type="text/javascript"></script>

<div id="single">
	<div class="article">		
		<h2>Expandable Listmenu Script</h2>
		<p>One of the requirements of our <a href="http://play.game.net">new website</a> at work was to create a list
		menu where you could click on some elements to expand/close different sections of the menu, similar to windows
		explorer.</p>
		
		<p>The challenge I set myself was to create a script that required minimal markup changes and one that would degrade
		nicely in the majority of browsers.</p>
		
		<p>I was aware of the <a href="http://www.gazingus.org/html/menuExpandable.html">expandable menus</a> already available
		on <a href="http://www.gazingus.org/">Gazingus</a> but I felt the amount of HTML markup you had to change to make the 
		code work with the script was unsatisfactory for my needs. I needed to keep the markup simple as some of the menus
		would be written by people who's HTML skills were not necessarily very advanced.</p>
		
		<p>The following script is the result of my efforts, it appears to degrade well in all the browsers I've tested and if there
		is no scripting enabled in the browser then the entire list will appear.</p>
		
		<p>Any comments are more than welcome, you can leave them with the <a href="http://www.bleedingego.co.uk/index.php?i=59#comments">related news item</a>.</p>
		
		<h3>Sample</h3>
		
		<ul class="treemenu">
			<li class="treenodeopen">
				<a href="">Game Channels</a>
				<ul>
					<li><a href="http://play.game.net/channels/bw/default.asp">BarrysWorld</a></li>
					<li><a href="http://play.game.net/channels/st/default.asp">Strat &amp; Roleplay</a></li>
					<li><a href="http://play.game.net/channels/sp/default.asp">Sport &amp; Sim</a></li>
					<li><a href="http://play.game.net/channels/ea/default.asp">Electronic Arts</a></li>
				</ul>
			</li>
			<li class="treenode">
				<a href="">General News</a>
				<ul>
					<li><a href="http://play.game.net/channels/news.asp">All</a></li>
					<li><a href="http://play.game.net/channels/bw/news.asp">BarrysWorld</a></li>
					<li><a href="http://play.game.net/channels/st/news.asp">Strat &amp; Roleplay</a></li>
					<li><a href="http://play.game.net/channels/sp/news.asp">Sport &amp; Sim</a></li>
				</ul>
			</li>
			<li class="treenode">
				<a href="">Community News</a>
				<ul>
					<li><a href="http://play.game.net/channels/community.asp">All</a></li>
					<li><a href="http://play.game.net/channels/bw/community.asp">BarrysWorld</a></li>
					<li><a href="http://play.game.net/channels/st/community.asp">Strat &amp; Roleplay</a></li>
					<li><a href="http://play.game.net/channels/sp/community.asp">Sport &amp; Sim</a></li>
				</ul>
			</li>
			<li class="treenode">
				<a href="">Software</a>
				<ul>
					<li class="treenodeopen">
					<a href="http://play.game.net/apps/default.asp">Home</a>
					<ul>
						<li>Sample</li>
						<li>Wobble</li>
					</ul>					
					</li>
					<li><a href="http://play.game.net/apps/gamebar/default.asp">GAMEbar</a></li>
					<li><a href="http://play.game.net/apps/gamelogon/default.asp">GAMElogon</a></li>
				</ul>
			</li>
		</ul>

		<h3>Usage</h3>

		<p>To begin with you need to load the javascript into a page in the head section of your page. If you place the code into a file
		called listmenu.js then you would include the file as follows</p>
		
		<pre><code class="html">&lt;head&gt;
	&lt;title&gt;..&lt;/title&gt;
	&lt;script src="listmenu.js" type="text/javascript"&gt;&lt;/script&gt;
&lt;/head&gt;</code></pre>

		<p>To create an expandable menu in your document all you need to do is insert a list into the document using the following syntax.</p>
			
		<pre><code class="html">&lt;ul&gt;
	&lt;li class="treenode"&gt;
		&lt;a href=""&gt;Top Level Item&lt;/a&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;a href=""&gt;List Item&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=""&gt;List Item&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=""&gt;List Item&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=""&gt;List Item&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/li&gt;
&lt;/ul&gt;</code></pre>

		<p>If you want a menu to appear already expanded on document load then you will need to change the 
		<code class="html">class="treenode"</code> attribute to <code class="html">class="treenodeopen"</code>.</p>
		
		<h3>Download</h3>
		<p>Script: <a href="listmenu.js">listmenu.js</a></p>
		<p>Sample Stylesheet: <a href="listmenu.css">listmenu.css</a></p>


		<p><a href="#" onclick="history.back()">Back to previous page</a> / <a href="/">Home</a></p>
	</div>
</div>

<?PHP include("../../../footer.inc.php"); ?>
