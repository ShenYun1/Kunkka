<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */
get_header(); ?>
    <div id="primary" class="full-page">
        <div class="errorDiv">
            <a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home">
                <img src="<?php echo mutheme_image( '404.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" width="55%"; />
            </a>
            <p><h1>Not Found</h1></p>
            <p>对不起，您访问的界面已迁移或不存在，即将返回首页</p>
            <p><span id="timedown" style="font-size:2em;color:#EB4444"></span> s </p>
        </div>
    </div>
    <!-- #primary -->
    <style>
    .errorDiv{
        margin: 0 auto;
        text-align: center;
    }
    </style>
    <script type="text/javascript">  
    //设定倒数秒数  
    var t = 15;  
    //显示倒数秒数  
    function showTime(){  
        t -= 1;  
        document.getElementById('timedown').innerHTML= t;  
        if(t==0){  
            location.href='/';  
        }  
        //每秒执行一次,showTime()  
        setTimeout("showTime()",1000);  
    }  

    //执行showTime()  
    showTime();  
    </script>  
<?php get_footer(); ?>