<!DOCTYPE html>
<html xmlns:wb="http://open.weibo.com/wb">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0" />
    <link href="<?php bloginfo('template_url'); ?>/style/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style/neup.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style/swiper-3.3.1.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style/bootstrap-datepicker3.standalone.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url'); ?>/style/bootstrap-datepicker3.standalone.css.map" rel="stylesheet" />
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-2.2.3.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap-datepicker.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap-datepicker.zh-CN.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/swiper-3.3.1.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/prefixfree.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/calender_index.js"></script>
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>




    <script>
        $(function () {
            $("#tabs1 a").mousemove(function (e) {
                $(this).tab('show');
            });
        });
    </script>
    <script>
        $(function () {
            $("#tabs331 a").mousemove(function (e) {
                $(this).tab('show');
            });
        });
    </script>
    <script>
        $(function () {
            $("#tabs2221 a").mousemove(function (e) {
                $(this).tab('show');
            });
        });
    </script>
    <title>无标题文档</title>
</head>

<body class="bg">
    <div class="line1">
        <div class = "banner"></div>
        <nav class="menubar">
            <ul class="nav nav-justified">
                <li class="active"><a href="#" style="color:red">先锋首页</a></li>
                <li><a href="#" style="color:white">东大共青团</a></li>
                <li><a href="#" style="color:white">学生组织</a></li>
                <li><a href="#" style="color:white">网上团支部</a></li>
                <li><a href="#" style="color:white">青年之声</a></li>
                <li><a href="#" style="color:white">先锋论坛</a></li>
                <li><a href="#" style="color:white">文件下载</a></li>
                <li><a href="#" style="color:white">友情链接</a></li>
            </ul>
        </nav>
    </div>
    <div class="line2">
        <div id="myCarousel" class="line20 carousel slide" data-ride="carousel">
                    <!-- 轮播（Carousel）指标 -->
            <div class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" type="circle" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" type="circle"></li>
                <li data-target="#myCarousel" data-slide-to="2" type="circle"></li>
            </div>
              <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php bloginfo('template_url'); ?>/images/20151020221927_21947.png" alt="First slide">
                    <div class="carousel-caption"><p>管院学子在第八届网商创新应用大赛辽宁赛区决赛中喜获佳绩</p></div>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/images/20150610211937_28458.png" alt="Second slide">
                    <div class="carousel-caption"><p>中荷学院第八届团委学生会工作总结暨第九届团委学生会主席团换</p></div>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/images/20150628210741_34025.jpg" alt="Third slide">
                    <div class="carousel-caption"><p>“唱响红色旋律 构建和谐社区”七一文艺汇演成功参演</p></div>
                </div>
                <!-- 轮播（Carousel）导航 -->
                <a class="carousel-control left" href="#myCarousel"
                   data-slide="prev"><br><br><br><br>&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel"
                   data-slide="next"><br><br><br><br>&rsaquo;</a>
            </div>

        </div>
        <div class="line21">
            <div class="line211 frame">
                <div class="line211a"><p>先锋头条</p></div>
				<div class="line211a2"><a href="#" class="a">more>></a></div>
                <div class="line211b"></div>
                <div class="line211c">
                    <a href="#" class="a">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					留守儿童，估算约1亿的消息上了微博热搜榜，随后，各大媒体官号相继转发，这源于中国青年报中青在线的一篇题为“我国将首次摸清留守儿童底数”的报道。（点击看全文）</a>
                </div>
            </div>
            <div class="line212 frame">
                <div class="line212a1"><p>外媒聚焦</p></div>
                <div class="line212a2"><a href="#" class="a">more>></a></div>
                <div class="line212b"></div>
                <div class="line212c">
                    <ul class="disc">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args=array(
                        'category_name' => "外媒聚焦", // 分类名为qqq
                        'posts_per_page' => 4, // 只显示4篇
                        'paged'=>$paged,
                                    );
                        query_posts($args);

                        if (have_posts()) : while (have_posts()) : the_post();
                        ?>
                        <li><a href="<?php the_permalink(); ?>" class="a"><?php the_title(); ?></a></li>
                        <?php endwhile; endif; wp_reset_query();?>
                    </ul>
                </div>
            </div>
            <div class="line213 frame">
                <div class="line213a1"><p>通知公告</p></div>
                <div class="line213a2"><a href="#" class="a">more>></a></div>
                <div class="line213b"></div>
                <div class="line213c">
                    <ul class="disc">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args=array(
                        'category_name' => "通知公告", // 分类名为qqq
                        'posts_per_page' => 4, // 只显示4篇
                        'paged'=>$paged,
                                    );
                        query_posts($args);

                        if (have_posts()) : while (have_posts()) : the_post();
                        ?>
                        <li><a href="<?php the_permalink(); ?>" class="a"><?php the_title(); ?></a></li>
                        <?php endwhile; endif; wp_reset_query();?>
                    </ul>
                </div>
            </div>
            <div class="line214 frame">
                <div class="line214a">
                    <ul class="disc">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args=array(
                        'category_name' => "先锋头条", // 分类名为qqq
                        'posts_per_page' => 4, // 只显示4篇
                        'paged'=>$paged,
                                    );
                        query_posts($args);

                        if (have_posts()) : while (have_posts()) : the_post();
                        ?>
                        <li><a href="<?php the_permalink(); ?>" class = a><?php the_title(); ?></a></li>
                        <?php endwhile; endif; wp_reset_query();?>
                </div>
            </div>
            <div class="line215 frame">
                <div class="line215a1"><p>学院团讯</p></div>
                <div class="line215a2"><a href="#" class="a">more>></a></div>
                <div class="line215b"></div>
                <div class="line215c">
                    <ul class="disc">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args=array(
                        'category_name' => "学院团讯", // 分类名为qqq
                        'posts_per_page' => 4, // 只显示4篇
                        'paged'=>$paged,
                                    );
                        query_posts($args);

                        if (have_posts()) : while (have_posts()) : the_post();
                        ?>
                        <li><a href="<?php the_permalink(); ?>" class = "a"><?php the_title(); ?></a></li>
                        <?php endwhile; endif; wp_reset_query();?>
                    </ul>
                </div>
            </div>
            <div class="line216 frame">
                <div class="line216a1"><p>活动预告</p></div>
                <div class="line216a2"><a href="#" class="a">more>></a></div>
                <div class="line216b"></div>
                <div class="line216c">
                    <ul class="disc">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args=array(
                        'category_name' => "活动预告", // 分类名为qqq
                        'posts_per_page' => 4, // 只显示4篇
                        'paged'=>$paged,
                                    );
                        query_posts($args);

                        if (have_posts()) : while (have_posts()) : the_post();
                        ?>
                        <li><a href="<?php the_permalink(); ?>" class = "a"><?php the_title(); ?></a></li>
                        <?php endwhile; endif; wp_reset_query();?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="line22">
            <div class="line221">
                <div id="datepicker" class="calendar" style="width: 100%"></div>
            </div>
            <div class="line222">
            </div>
        </div>
    </div>


    <div class="line3">
        <!-- Example row of columns -->
        <!-- <div class="row"> -->
        <div class="col-md-4 line31 frame">
            <div class="container" style="border:height: 100%;width:100%;padding: 0">
                <div class="row" style="height: 100%;width:100%;margin: 0;">
                    <ul class="nav-tabs nav" id="tabs1">
                        <li class="line3-active"><a href="#tabs-1" id="line3-head1">思想引领行动 </a></li>
                        <li><a href="#tabs-2" id="line3-head2">素质拓展行动</a></li>
                        <li><a href="#tabs-3" id="line3-head3">权益服务行动</a></li>
                        <li><a href="#tabs-4" id="line3-head4">组织提升行动</a></li>
                    </ul>
                    <div class="line3-container"></div>
                    <div class="tab-content" id="line31-tab-content">
                        <div class="tab-pane active" id="tabs-1">
                            <div class="tab-pane-content-1">
                                <dt><a href="#">主题团日</a></dt>
                                <dt><a href="#">四进四信</a></dt>
                                <dt><a href="#">青马工程</a></dt>
                                <dt><a href="#">社会实践</a></dt>
                                <dt><a href="#">智慧社区</a></dt>
                            </div>
                            <div class="tab-pane-content-2">
                                <img
                                    src="<?php echo bloginfo('template_url'); ?>/images/1657B9A7-C380-46B2-9F8C-DEC8EF51D8AA.png">
                            </div>
                            <div class="tab-pane-content-3">
                                <ul>
<!--                                    <dl>-->
<!--                                        --><?php
//                                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
//                                        $args = array(
//                                            'category_name' => "主题团日", // 分类ID为1
//                                            'posts_per_page' => 4, // 只显示4篇
//                                            'paged' => $paged,
//                                        );
//                                        query_posts($args);
//
//                                        if (have_posts()) : while (have_posts()) :
//                                        the_post();
//                                        ?>
<!--                                        <dt><a href="--><?php //the_permalink(); ?><!--" target="_blank"-->
<!--                                               class="a">--><?php //the_title(); ?><!--</a>-->
<!--                                        <dt>-->
<!--                                            --><?php //endwhile;
//                                            endif;
//                                            wp_reset_query(); ?>
<!--                                        <div class="clear"></div>-->
<!--                                    </dl>-->
                                    <dl>
                                        <li><a href="#" target="_blank">关于举办2016年“创青春”全国大学生.......................</a><span>03-30</span></li>
                                        <li><a href="#" target="_blank">东北大学“示范团支部”创建和“十佳..........................</a><span>03-28</span></li>
                                        <li><a href="#" target="_blank">关于开展东北大学2016年五四奖章、.......................</a><span>03-20</span></li>
                                        <li><a href="#" target="_blank">关于举办2016年“创青春”全国大学生........................</a> <span>03-16</span></li>
                                        <li><a href="#" target="_blank">东北大学“示范团支部”创建和“十佳...........................</a> <span>03-10</span></li>
                                        <div class="clear"></div>
                                    </dl>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2">
                            素质拓展行动内容...
                        </div>
                        <div class="tab-pane" id="tabs-3">
                            权益服务行动内容...
                        </div>
                        <div class="tab-pane" id="tabs-4">
                            组织提升行动内容...
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="line32">
            <div class="line32a1"><p>活力支部</p></div>
            <div class="line32a2"><a href="#" class="a">more>></a></div>
            <div class="line32b"></div>
            <div class="line32c1">
                <ul class="disc">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args=array(
                        'category_name' => "活力支部", // 分类ID为1
                        'posts_per_page' => 4, // 只显示4篇
                        'paged'=>$paged,
                                    );
                        query_posts($args);

                        if (have_posts()) : while (have_posts()) : the_post();
                        ?>
                        <li><a href="<?php the_permalink(); ?>" class="a"><?php the_title(); ?></a></li>
                        <?php endwhile; endif; wp_reset_query();?>
                </ul>
            </div>
            <div class="line32c2"></div>
        </div>
        <div class="col-md-4 line33 frame">
            <div class="line33a1"><h4 style="font-weight:bold;">先锋排行</h4></div>
            <div class="line33a2"><a href="#" class="line33-more">more >></a></div>
            <div class="line33b"></div>
            <div class="line33content">
                <div class="container" style="width: 100%;padding: 0;">
                    <div class="row" style="width: 100%;padding: 0;margin: 0;">
                        <div class="line33-container" style="height: 100%">
                            <ul class="nav-tabs nav" id="tabs331"><li class="line33-active"><a href="#tabs-331" id="line33-head1" style="align-content: center" onclick="return false">投稿排行 </a></li>
                                <li><a href="#tabs-332" id="line33-head2" onclick="return false">投稿之星</a></li>
                                <li><a href="#tabs-333" id="line33-head3" onclick="return false">支部投稿</a></li>
                                <li><a href="#tabs-334" id="line33-head4" onclick="return false">点击排行</a></li>
                            </ul>
                            <div class="tab-content" id="tab-content33">
                                <div class="tab-pane active" id="tabs-331">
                                    <div class="tab-pane-content331" style="padding: 0;">
                                        <div class="content331">
                                            <ul>
                                                <dl>
                                                    <p>1 <a href="#" target="_blank">
                                                            关于举办2016年“创青春”全国大学生..............................................</a></p>
                                                    <p>2 <a href="#" target="_blank">
                                                            东北大学“示范团支部”创建和“十佳.................................................</a></p>
                                                    <p>3 <a href="#" target="_blank">
                                                            关于开展东北大学2016年五四奖章、..............................................</a></p>
                                                    <p>4 <a href="#" target="_blank">
                                                            关于举办2016年“创青春”全国大学生...............................................</a></p>
                                                    <p>5 <a href="#" target="_blank">
                                                            东北大学“示范团支部”创建和“十佳..................................................</a></p>
                                                </dl>
                                            </ul>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-332" style="color:black;">
                                    <div class="tab-pane-content332">
                                        <div class="content332">
                                            <ul>
                                                <dl>投稿之星内容...</dl>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-333" style="color:red">

                                    <div class="tab-pane-content333">
                                        <div class="content333">
                                            <ul>
                                                <dl>支部投稿内容...</dl>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-334" style="color:blue">
                                    <div class="tab-pane-content334">
                                        <div class="content334">
                                            <ul>
                                                <dl>点击排行内容...</dl>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div> <!-- /container -->

    <div class="line4">
        <div class="line41 frame">
            <div class="line41a"></div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?php echo bloginfo('template_url'); ?>/images/line41-1.png"></div>
                    <div class="swiper-slide"><img src="<?php echo bloginfo('template_url'); ?>/images/line41-2.png"></div>
                    <div class="swiper-slide"><img src="<?php echo bloginfo('template_url'); ?>/images/line41-1.png"></div>
                    <div class="swiper-slide"><img src="<?php echo bloginfo('template_url'); ?>/images/line41-2.png"></div>
                    <div class="swiper-slide"><img src="<?php echo bloginfo('template_url'); ?>/images/line41-3.png"></div>
                    <div class="swiper-slide"><img src="<?php echo bloginfo('template_url'); ?>/images/line41-1.png"></div>
                    <div class="swiper-slide"><img src="<?php echo bloginfo('template_url'); ?>/images/line41-2.png"></div>
                    <div class="swiper-slide"><img src="<?php echo bloginfo('template_url'); ?>/images/line41-1.png"></div>
                    <div class="swiper-slide"><img src="<?php echo bloginfo('template_url'); ?>/images/line41-2.png"></div>
                    <div class="swiper-slide"><img src="<?php echo bloginfo('template_url'); ?>/images/line41-3.png"></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination" style="bottom: -5px;"></div>
                <!-- Add Arrows -->

            </div>
            <div class="swiper-button-next" style="right: 1225px;top: 90px; background-image: none; "><h4 style="color: rgb(250,89,89);margin-top: -8px;
    margin-left: 10px;margin-bottom: 0px;">></h4></div>
            <div class="swiper-button-prev" style="left: 20px;top: 90px;background-image: none;"><h4 style="color: rgb(250,89,89);margin-top: -8px;"><</h4></div>
        </div>
        <div class="line42 frame">
           <div class="line42a"></div>
           <div class="line42b"><a href="#" class="a5">专题一  学习之路</a></div>

        </div>
        <div class="line43 frame">
            <div class="line43a"></div>
            <div class="line43b"><a href="#" class="a5">专题二  青年之声</a></div>

        </div>
        <div class="line44 frame">
            <div class="line44a" ></div>
            <div class="line44at" style = "height:27px;line-height:27px;overflow:hidden;  left: 6%;color:white">活动专题</div>
            <div class="line44b"></div>
            <div class="line44c" ><ul style="list-style-type: none">
                    <div class="line44c1"> <a href="#"><img src="<?php echo bloginfo('template_url'); ?>/images/Snip20160525_4.png" border="0" width="84.6%" height="19.3%"></a></div>
                    <div class="line44c2"><a href="#"><img src="<?php echo bloginfo('template_url'); ?>/images/Snip20160525_5.png" border="0" width="84.6%" height="19.3%"></a></div>
                    <div class="line44c3"><a href="#"><img src="<?php echo bloginfo('template_url'); ?>/images/Snip20160525_6.png" border="0"  width="84.6%" height="19.3%"></a></div>
                </ul>
            </div>

        </div>
    </div>

    </div>

    <!-- </div> -->
    <footer class="foot">
    </footer>
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            slidesPerView: 5,
            paginationClickable: true,
            spaceBetween: 30,
            loop:true,
            centeredSlides: true,
            autoplay: 1500,
            autoplayDisableOnInteraction: false
//            grabCursor: true
        });
    </script>
</body>
</html>
