<script src="rollover.js" type="text/javascript"></script>

<div id="single">
	<div class="article">
		<h2>Image Rollover Code</h2>

		<p>
		This script is a standards compliant means of adding mouse rollover code to images in a document without the hassle
		of coding in extra parameters to each image in your document. This code is standards compliant and should not invalidate
		your document.
		</p>

		<h3>Sample</h3>

		<p><img src="rollover.gif" alt="Rollover Sample" class="imgover"></p>

		<h3>Usage</h3>

		<p>To begin with you need to load the javascript into a page in the head section of your page. If you place the code into a file
		called rollover.js then you would include the file as follows</p>

		<pre><code class="html">&lt;head&gt;
	&lt;title&gt;..&lt;/title&gt;
	&lt;script src="rollover.js" type="text/javascript"&gt;&lt;/script&gt;
&lt;/head&gt;</code></pre>

		<p>Next you will need to add the attribute <code class="html">class="imgover"</code> to any image in your document that
		requires a mouseover effect to be trigger.</p>

		<pre><code class="html">&lt;img src="sample.jpg" alt="Some Image" class="imgover"&gt</code></pre>

		<p>Finally, for any image in your document you will need to create a rollover state for it, the only requirements for this
		image is that it is named exactly the same as the original image, but it needs <em>_o</em> on the end of the name. The image
		should also be in the same directory as the original and should be of the same type. So for example you would have
		<em>sample.jpg</em> and <em>sample_o.jpg</em> files in the same directory.</p>

		<h3>Download</h3>
		<p>File: <a href="rollover.js">rollover.js</a></p>


		<p><a href="#" onclick="history.back()">Back to previous page</a> / <a href="/">Home</a></p>
	</div>
</div>
