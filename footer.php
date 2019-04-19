</div>
</div>

<!-- #content -->
<div id="footer">
    <div class="container">

		<!-- 一言开始 -->
		<p id="hitokoto">:D 获取中...</p>
<script>
  fetch('https://v1.hitokoto.cn')
    .then(function (res){
      return res.json();
    })
    .then(function (data) {
      var hitokoto = document.getElementById('hitokoto');
      hitokoto.innerText = data.hitokoto; 
    })
    .catch(function (err) {
      console.error(err);
    })
</script>
		<!-- 一言结束 -->
	<?php if (wp_is_mobile()){ ?>
	<div class="widget-links">
		<ul>
			<li>友情链接:<?php wp_list_bookmarks('title_li=&categorize=0'); ?></li>	
		</ul>
	</div>
    <?php } else { ?>
    <?php } ?>
        <p>&copy; Copyright 2018-2019 <a href="/"><?php bloginfo( 'name' ); ?></a> All Rights Reserved. Powered by <a href="https://wordpress.org/" target="_blank">WordPress</a></p> 


        <p>&nbsp</p>
    </div>
</div>
<!-- #footer -->
<?php wp_footer(); ?>

</body>
</html>