
<!-- ===  Text Shorten Code  ====  -->
<?php
	// code for shortening the big content fetched from database

	 function textShorten($text, $limit = 250){
			$text = $text." ";
			$text = substr($text, 0, $limit);
			$text = substr($text, 0, strrpos($text, " "));
			$text = $text;
			return $text;
	}
?> 
<!-- ===  Text Shorten Code  ====  -->


<p class="text-justify">
	<!-- ===  Show Shorted Limited Content  ====  -->
	{!! textShorten($blog->BLOG_CONTENT) !!}
	
	<!-- ===  Show Read More button if the content bigger then this size limit  ====  -->
	@if(strlen($blog->BLOG_CONTENT) > 250)
	<a class="read_more" href="/blog/single/{{ $blog->BLOG_ID }}">Read More</a>
	@endif
</p>