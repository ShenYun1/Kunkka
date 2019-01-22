<?php 
$sidebar_html = ABSPATH . "wp-content/cache/sidebar.txt";
$have_cached = false;
if (file_exists($sidebar_html)){
    $file_time = filemtime($sidebar_html);
    if (($file_time + 3600) > time()){ //缓存1小时
        echo "<!-- cached sidebar -->";
        echo(file_get_contents($sidebar_html));
        echo "<!-- end of cached sidebar -->";
        $have_cached = true;
    }
}
if(!$have_cached){
    ob_start();
?>
<div id="sidebar">
    <?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'sidebar' ) ) : ?>
        <p><?php _e( 'Please set up widgets at dashboard!', MUTHEME_NAME ); ?></p>
    <?php endif; ?>
</div>
<!-- end #sidebar -->
<?php
    $sidebar_content = ob_get_contents();
    ob_end_clean();
    $sidebar_fp = fopen($sidebar_html, "w");
 
    if ($sidebar_fp){
         fwrite($sidebar_fp, $sidebar_content);
         fclose($sidebar_fp);
    }
 
    echo $sidebar_content;
}
?>