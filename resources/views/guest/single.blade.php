@extends("layouts.main")


@section("content")

<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- preloader -->

<div class="uc-mobile-menu-pusher">
<div class="content-wrapper">
<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="left_section">
                                            <span class="date">
                                                Sunday .
                                            </span>
                        <!-- Date -->
                                            <span class="time">
                                                09 August . 2016
                                            </span>
                        <!-- Time -->
                        <div class="social">
                            <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                            <!--Linkedin-->
                            <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                            <!--Pinterest-->
                            <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                        </div>
                        <!-- Top Social Section -->
                    </div>
                    <!-- Left Header Section -->
                </div>
                <div class="col-md-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo.png" alt="Tech NewsLogo"></a>
                    </div>
                    <!-- Logo Section -->
                </div>
                <div class="col-md-4">
                    <div class="right_section">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                            <li class="dropdown lang">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">En <i
                                        class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Bn</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Language Section -->

                        <ul class="nav-cta hidden-xs">
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                                    class="fa fa-search"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head-search">
                                            <form role="form">
                                                <!-- Input Group -->
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                           placeholder="Type Something"> <span class="input-group-btn">
                                                                            <button type="submit"
                                                                                    class="btn btn-primary">Search
                                                                            </button>
                                                                        </span></div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Search Section -->
                    </div>
                    <!-- Right Header Section -->
                </div>
            </div>
        </div>
        <!-- Header Section -->

        <div class="navigation-section">
            <nav class="navbar m-menu navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    @include("inc.menu")
                    <!-- .navbar-collapse -->
                </div>
                <!-- .container -->
            </nav>
            <!-- .nav -->
        </div>
        <!-- .navigation-section -->
    </div>
    <!-- .container -->
</section>
<!-- header_section_wrapper -->

<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="entity_wrapper">
    <div class="entity_title">
        <h1><a href="#">{{$data->title}}</a></h1>
    </div>
    <!-- entity_title -->

    <div class="entity_meta"><a href="#" target="_self">Created at: {{$data->created_at}}</a>
    </div>
    <!-- entity_meta -->

    <div class="entity_rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-full"></i>
    </div>
    <!-- entity_rating -->

    <div class="entity_social">
        <a href="#" class="icons-sm sh-ic">
            <i class="fa fa-share-alt"></i>
            <b>424</b> <span class="share_ic">Shares</span>
        </a>
        <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
        <!--Twitter-->
        <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
        <!--Google +-->
        <a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a>
        <!--Linkedin-->
        <a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a>
        <!--Pinterest-->
        <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
    </div>
    <!-- entity_social -->

    <div class="entity_thumb">
        <img class="img-responsive" src="assets/img/category_img_top.jpg" alt="feature-top">
    </div>
    <!-- entity_thumb -->

    <div class="entity_content">
        <p>
            {{$longdesc->Long_desc}}
        </p>

    </div>
    <!-- entity_content -->

    <div class="entity_footer">
        <div class="entity_tag">
            <span class="blank"><a href="#">Tech</a></span>
            <span class="blank"><a href="#">Transport</a></span>
            <span class="blank"><a href="#">Mobile</a></span>
            <span class="blank"><a href="#">Gadgets</a></span>
        </div>
        <!-- entity_tag -->

        <div class="entity_social">
            <span><i class="fa fa-share-alt"></i>424 <a href="#">Shares</a> </span>
            <span><i class="fa fa-comments-o"></i>4 <a href="#">Comments</a> </span>
        </div>
        <!-- entity_social -->

    </div>
    <!-- entity_footer -->

</div>
<!-- entity_wrapper -->

<div class="related_news">
    <div class="entity_inner__title header_purple">
        <h2><a href="#">Related News</a></h2>
    </div>
    <!-- entity_title -->

    <div class="row">
        <div class="col-md-6">
            <div class="media">
                <div class="media-left">
                    <a href="#"><img class="media-object" src="assets/img/cat-mobi-sm1.jpg"
                                     alt="Generic placeholder image"></a>
                </div>
                <div class="media-body">
                    <span class="tag purple"><a href="category.html" target="_self">Mobile</a></span>

                    <h3 class="media-heading"><a href="single.html" target="_self">Apple launches photo-centric wrist
                        watch for Android</a></h3>
                    <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
                        <span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
                    </div>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="#"><img class="media-object" src="assets/img/cat-mobi-sm3.jpg"
                                     alt="Generic placeholder image"></a>
                </div>
                <div class="media-body">
                    <span class="tag purple"><a href="category.html" target="_self">Mobile</a></span>

                    <h3 class="media-heading"><a href="single.html" target="_self">The Portable Charger or data
                        cable</a></h3>
                    <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
                        <span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media">
                <div class="media-left">
                    <a href="#"><img class="media-object" src="assets/img/cat-mobi-sm2.jpg"
                                     alt="Generic placeholder image"></a>
                </div>
                <div class="media-body">
                    <span class="tag purple"><a href="category.html" target="_self">Mobile</a></span>

                    <h3 class="media-heading"><a href="single.html" target="_self">Iphone 6 launches white & Grey
                        colors handset</a></h3>
                    <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
                        <span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
                    </div>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="#"><img class="media-object" src="assets/img/cat-mobi-sm4.jpg"
                                     alt="Generic placeholder image"></a>
                </div>
                <div class="media-body">
                    <span class="tag purple"><a href="category.html" target="_self">Mobile</a></span>
                    <a href="single.html" target="_self"><h3 class="media-heading">Fully new look slim handset
                        like</h3></a>
                    <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
                        <span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Related news -->

<div class="widget_advertisement">
    <img class="img-responsive" src="assets/img/category_advertisement.jpg" alt="feature-top">
</div>
<!--Advertisement-->

<div class="readers_comment">
    <div class="entity_inner__title header_purple">
        <h2>Readers Comment</h2>
    </div>
    <!-- entity_title -->

    <div class="media">
        <div class="media-left">
            <a href="#">
                <img alt="64x64" class="media-object" data-src="assets/img/reader_img1.jpg"
                     src="assets/img/reader_img1.jpg" data-holder-rendered="true">
            </a>
        </div>
        @foreach ($comment as $comm)
        <div>

          <div class="media-body">
            <h2 class="media-heading"><a href="#">comment {{++$loop->index}}</a></h2>
            {{$comm->comment}}

            <div class="entity_vote">
                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
                <a href="#"><span class="reply_ic">Reply </span></a>
            </div>
        <div>
      
        </div>
       
        @endforeach
      

    </div>
    <!-- media end -->

</div>
<!--Readers Comment-->

<div class="widget_advertisement">
    <img class="img-responsive" src="assets/img/category_advertisement.jpg" alt="feature-top">
</div>
<!--Advertisement-->

<div class="entity_comments">
    <div class="entity_inner__title header_black">
        <h2>Add a Comment</h2>
    </div>
    <!--Entity Title -->

    <div class="entity_comment_from">
        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="inputName" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group comment">
                <textarea class="form-control" id="inputComment" placeholder="Comment"></textarea>
            </div>

            <button type="submit" class="btn btn-submit red">Submit</button>
        </form>
    </div>
    <!--Entity Comments From -->

</div>
<!--Entity Comments -->

</div>
<!--Left Section-->

<div class="col-md-4">
<div class="widget">
    <div class="widget_title widget_black">
        <h2><a href="#">Popular News</a></h2>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Canon launches photo centric 00214 Model supper shutter camera</a>
            </h3> <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span> 
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right2.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Samsung galaxy note are the supper mobile of all products.</a>
            </h3>
            <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span> 
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right3.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Apple launches photo-centric wrist watch for Android</a>
            </h3>
            <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span> 
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right4.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Kodak Hi-Speed shutter double shot camera comming soon</a>
            </h3>
            <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-share-alt"></i>424</a> Shares
                </span> 
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&raquo;</a></p>
</div>
<!-- Popular News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive adv_img" src="assets/img/right_add1.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add2.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add3.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add4.jpg" alt="add_one">
</div>
<!-- Advertisement -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="assets/img/right_add5.jpg" alt="add_one">
</div>
<!-- Advertisement -->

<div class="widget reviews m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Reviews</a></h2>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">DSLR is the most old camera at this time readmore about new
                    products</a>
            </h3> 
            <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right2.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body"><h3 class="media-heading"><a href="single.html" target="_self">Samsung is the best
            mobile in the android market.</a></h3> <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span></div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right3.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Apple launches photo-centric wrist watch for Android</a>
            </h3> 
            <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span></div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right4.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Yasaki camera launches new generic hi-speed shutter camera.</a>
            </h3> 
            <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span></div>
    </div>
    <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&raquo;</a></p>
</div>
<!-- Reviews News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="assets/img/right_add6.jpg" alt="add_one">
</div>
<!-- Advertisement -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Most Commented</a></h2>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Yasaki camera launches new generic hi-speed shutter camera.</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right2.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Samsung is the best mobile in the android market.</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right3.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Apple launches photo-centric wrist watch for Android</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right4.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">DSLR is the most old camera at this time readmore about new
                    products</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
            </div>
        </div>
    </div>
    <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&nbsp;&raquo; </a></p>
</div>
<!-- Most Commented News -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Editor Corner</a></h2>
    </div>
    <div class="widget_body"><img class="img-responsive left" src="assets/img/editor.jpg"
                                  alt="Generic placeholder image">

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without</p>

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without
            revolutionary ROI.</p>
        <button class="btn pink">Read more</button>
    </div>
</div>
<!-- Editor News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
    <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
    <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
    <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
</div>
<!--Advertisement -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Readers Corner</a></h2>
    </div>
    <div class="widget_body"><img class="img-responsive left" src="assets/img/reader.jpg"
                                  alt="Generic placeholder image">

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without</p>

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without
            revolutionary ROI.</p>
        <button class="btn pink">Read more</button>
    </div>
</div>
<!--  Readers Corner News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="assets/img/podcast.jpg" alt="add_one">
</div>
<!--Advertisement-->
</div>
<!--Right Section-->

</div>
<!-- row -->

</div>
<!-- container -->

</section>
<!-- Entity Section Wrapper -->

<section id="subscribe_section" class="subscribe_section">
    <div class="row">
        <form action="#" method="post" class="form-horizontal">
            <div class="form-group form-group-lg">
                <label class="col-sm-6 control-label" for="formGroupInputLarge">
                    <h1><span class="red-color">Sign up</span> for the latest news</h1>
                </label>

                <div class="col-sm-3">
                    <input type="text" id="subscribe" name="subscribe" class="form-control input-lg">
                </div>
                <div class="col-sm-1">
                    <input type="submit" value="Sign Up" class="btn btn-large pink">
                </div>
                <div class="col-sm-2"></div>
            </div>
        </form>
    </div>
</section>
<!-- Subscriber Section -->

@include("inc.footer")
<!-- .uc-mobile-menu -->

</div>
<!-- #main-wrapper -->

@endsection