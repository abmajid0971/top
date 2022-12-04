@extends('Frontend.layout.main')
@section('main-container')
<header class="header_menu">
    <!--navigation-->
    <div class="nav_main">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo hide_desktop" href="indexd41d.html?">
                        <img src="assets/images/logo.svg" alt="Logo">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="indexd41d.html?">Top 6</a></li>
                        <li><a href="blogd41d.html?">Blog</a></li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
    <!--navigation-->
</header>
<!--header-->
<?php $i =1;

?>
<?php
$k =$offerothercount;
?>
<?php $j =$wordlist;

?>
<?php $o =2; ?>
<div class="container">
    <div class="blogsection">
        <div class="content_description content_descriptionhome bg_white">
            <h1>The Best Dating Sites in 2022</h1>
            <p>Have you wondered why you should opt for one of the best online dating sites, not an alternative or
                more traditional approach? Here are the best dating websites for you...</p>
        </div>

        <div class="disclosuresection hidden-xs">
            <div class="disclosure"><a class="disclosure_link">Advertising Disclosure</a>
                <div class="disclosure_box" style="display: none;">
                    <a class="x-btn">close</a>
                    <div class="disclosure_text">
                        <div class="global-disclosure-text">
                            <p>The comparator does not reference all the sites on the Canadian market but offers a
                                list of sites with which the publisher is in contact. The publisher receives
                                remuneration from the sites and depending on the partnerships set up, the number and
                                ranking of offers may be impacted. The Director of the publication can manually
                                update the site and thus modify the classification and the sites presented.</p>
                        </div>
                    </div>
                    <a class="close">Ok</a>
                </div>
            </div>
        </div>

    </div>

</div>
<div class="container">
    <div class="category_grid" id="start">
        <div class="categ_headings">
            <div class="col-md-4 col-sm-3 col-xs-3 mw_280 p-8">
                <h6>Website</h6>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-4 w30 p-8">
                <h6>Features We Like</h6>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-3 p-8">
                <h6>Score</h6>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-2 mw_200 p-8">
                <h6>Visit</h6>
            </div>
        </div>
        @foreach($offertop as $varoffertop)
        <a href="{{$varoffertop->Visit_Site_Click_URL}} target="_blank">

            <a href="{{$varoffertop->Visit_Site_Click_URL}}" target="_blank">
                <div class="categ_col_repeat redborderd">
                    <div class="col-md-4  col-sm-4 col-xs-12 col__item mw_280 p-8">
                        <div class="categ_thumb"><span class="counter_col">{{$varoffertop->Rank}}</span>
                            <div class="thumb_control"> <img src={{asset('uploads/'.$varoffertop->Icon)}} alt=""> </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-7 padd_r_9_mb w30 p-8">
                        <div class="categ_thumb meetic">

                            <h6>🌟 {{$varoffertop->Promo_Text_TOP}}</h6>
                            <ul>
                                <li>{{$varoffertop->Promo_text_1}}</li>
                                <li>{{$varoffertop->Promo_text_2}}</li>
                                <li>{{$varoffertop->Promo_text_3}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-5 p-8">
                        <div class="categ_thumb starating">
                            <p class="rating10">{{$varoffertop->Score}}</p>
                            <div class="star_rating">
                                @for ($i = 1; $i <= $varoffertop->Stars; $i++)
                                    <i class="fas fa-star"></i>

                                    @endfor
                                    
                            </div>
                            <p class="excellent">Ages <strong>{{$varoffertop->Ages}}</strong></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 padd_0_ipad mw_200 p-8">
                        <div class="centered_links">
                            <div class="clearfix"></div>
                            <div class="speech-bubble-ds hidden-xs">
                                <p>Over 1500 people <br>chose this site today</p>
                                <div class="speech-bubble-ds-arrow"></div>
                            </div> <a class="visitsitebutton sp-trig" href="{{$varoffertop->Visit_Site_Click_URL}}"
                                target="_blank">Visit Site</a> <span class="yellowcolr"><a
                                    href="{{$varoffertop->Visit_Site_Click_URL}}" target="_blank">❤️ Find love now
                                </a></span>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach

            @foreach($offerother as $varofferother)
            

            <a href="{{$varofferother->Visit_Site_Click_URL}}" target="_blank">
                <div class="categ_col_repeat">
                    <div class="col-md-4  col-sm-4 col-xs-12 col__item mw_280 p-8">
                        <div class="categ_thumb"><span class="counter_col">{{$o++}}</span>
                            <div class="thumb_control"> <img src={{asset('uploads/'.$varofferother->Icon)}} alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-7 padd_r_9_mb w30 p-8">
                        <div class="categ_thumb meetic">

                            <h6> {{$varofferother->Promo_Text_TOP}}</h6>
                            <ul>
                                <li>{{$varofferother->Promo_text_1}}</li>
                                <li>{{$varofferother->Promo_text_2}}</li>
                                <li>{{$varofferother->Promo_text_3}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-5 p-8">
                        <div class="categ_thumb starating">
                            <p class="rating10">{{$varofferother->Score}}</p>
                            <div class="star_rating">@for ($i = 1; $i <= $varofferother->Stars; $i++)
                                    <i class="fas fa-star"></i>

                                    @endfor
                            </div>
                            <p class="excellent">Ages <strong>{{$varofferother->Ages}}</strong></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 padd_0_ipad mw_200 p-8">
                        <div class="centered_links">
                            <div class="clearfix"></div> <a class="visitsitebutton"
                                href="{{$varofferother->Visit_Site_Click_URL}}" target="_blank">Visit Site</a> <span
                                class="yellowcolr"><a href="{{$varofferother->Visit_Site_Click_URL}}"
                                    target="_blank">{{$varofferother->text_below_click_url}} </a></span>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach

            @foreach($offercompare as $varoffercompare)
            <div class="categ_col_repeat dflex">
                <div class="col-md-4  col-sm-4 col-xs-12 col__item mw_280 p-8">
                    <div class="categ_thumb "><span class="counter_col">{{$j++}}</span>
                        <div class="thumb_control rec-title">
                            <h3>{{$varoffercompare->Promo_Text_TOP}}</h3>
                            <p>{{$varoffercompare->Promo_text_1}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-12 padd_r_9_mb p-8 w44 h-100">
                    <div class="categ_thumb meetic rec-desc">
                        <ul>
                            <li>{{$varoffercompare->Promo_text_2}}</li>
                            <li>{{$varoffercompare->Promo_text_3}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 padd_0_ipad   mw_200 p-8">
                    <div class="centered_links">
                        <div class="clearfix"></div>
                        <a class="visitsitebutton compareBtn" data-toggle="modal" id="#exampleModal"
                             href="#"
                            data-id="{{$varoffercompare->id}}">Compare</a>


                    </div>
                </div>
            </div>

            @endforeach
            @foreach($offerEditor as $varofferEditor)
            <a href={{$varofferEditor->Visit_Site_Click_URL}} target="_blank">

                <a href="{{$varofferEditor->Visit_Site_Click_URL}}" target="_blank">
                    <div class="categ_col_repeat redborderd">
                        <div class="col-md-4  col-sm-4 col-xs-12 col__item mw_280 p-8">
                            <div class="categ_thumb">
                                <div class="thumb_control"> <img src={{asset('uploads/'.$varofferEditor->Icon)}} alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-7 padd_r_9_mb w30 p-8">
                            <div class="categ_thumb meetic">

                                <h6>🌟 {{$varofferEditor->Promo_Text_TOP}}</h6>
                                <ul>
                                    <li>{{$varofferEditor->Promo_text_1}}</li>
                                    <li>{{$varofferEditor->Promo_text_2}}</li>
                                    <li>{{$varofferEditor->Promo_text_3}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-5 p-8">
                            <div class="categ_thumb starating">
                                <p class="rating10">{{$varofferEditor->Score}}</p>
                                <div class="star_rating">@for ($i = 1; $i <= $varofferEditor->Stars; $i++)
                                    <i class="fas fa-star"></i>

                                    @endfor
                                </div>
                                <p class="excellent">Ages <strong>{{$varofferEditor->Ages}}</strong></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 padd_0_ipad mw_200 p-8">
                            <div class="centered_links">
                                <div class="clearfix"></div> <a class="visitsitebutton"
                                    href="{{$varofferEditor->Visit_Site_Click_URL}}" target="_blank">Visit Site</a>
                                <span class="yellowcolr"><a href="{{$varofferEditor->Visit_Site_Click_URL}}"
                                        target="_blank">{{$varofferEditor->text_below_click_url}} </a></span>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach




                <div class="categ_col_repeat recommendlist">
                    <div class="col-md-12  p-8">
                        <h2>Not on Our Recommended List</h2>
                    </div>
                    <div class="col-md-4 col-sm-4 col-12 col__item  rec-col first">
                        <div class="categ_thumb ">
                            <div class="thumb_control title">
                                <h3>Zoosk</h3>
                                <p> Online Dating Site</p> <a class="visitsitebutton compareBtn"
                                    href="javascript:void(0);" data-type="list" data-index="3">Compare</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-12 col__item  rec-col ">
                        <div class="categ_thumb ">
                            <div class="thumb_control title">
                                <h3>EliteSingles</h3>
                                <p>Dating sites for educated singles</p> <a class="visitsitebutton compareBtn"
                                    href="javascript:void(0);" data-type="list" data-index="5">Compare</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-12 col__item  rec-col ">
                        <div class="categ_thumb ">
                            <div class="thumb_control title">
                                <h3>SilverSingles</h3>
                                <p>Dating Site for 50+ Singles</p> <a class="visitsitebutton compareBtn"
                                    href="javascript:void(0);" data-type="list" data-index="4">Compare</a>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
<div class="container">
    <div id="lower" class="content_description content_description_lower bg_white">
        <h2>Choose the Right Dating Site: 3 Question to Guide the Decision</h2>
        <p>
            Many people who want to venture into the dating world are mostly use dating sites. These websites
            provide an avenue that connects people and gives them the possibility of finding a partner that meets
            their preferences.
        </p>
        <p>
            However, choosing the right dating site can be tricky, as there are so many, and they all come at a
            price.
        </p>
        <h3>#1 What Type of Relationship Are You Looking For?</h3>
        <p>
            For many people, relationship choice plays a vital role in the dating site they decide to utilize. This
            factor is essential in the decision-making, as several dating sites have different offerings that target
            different individuals.
        </p>
        <p>Some dating sites are so explicit that they delve into details on the type of offerings available for
            their users, while others leave the users to fish amongst the users' pool.
        </p>
        <p>Users have to determine the purpose of their search before selecting a dating site. So, several dating
            sites have options tailored to those searching for a long-term relationship or flings. Considering a
            dating site like EliteSingles, users can access a pool of educated singles who need partners for a short
            or lengthy relationship. Other dating sites such as OurTime and Cupid also offer a more standardized
            offering when searching for partners on their dating site.
        </p>
        <h3>#2 Do You Prefer Being Matched or Searched?</h3>
        <p>The dating pool of several dating sites is so vast that traversing through their offering can be a
            Herculean task. This can be an issue for users who intend to find partners in a short period that match
            their specification. Yes, this is a real issue most people face in the real world, as the availability
            of prospective partners overshadows meeting and geographical location. Several dating sites offer
            different algorithms for users to find their desired partners based on several metrics. Some dating
            sites offer their users the Match option or the Search Option.
        </p>
        <p>Most people prefer matchmaking dating sites because customers can input their data and general
            information to connect to people with similar characteristics based on their desired metrics. Dating
            sites that allow customers to search through their pool of users allow potential partners to navigate
            and decide who suits their preference. This method brings the decision-making process to the users' lap
            and allows them to make candid choices to meet the right partner.
        </p>
        <h3>#3 How Much Will It Cost Me?</h3>
        <p>Finding the right partner that suits your taste consists of lots of trials and errors. Every day we go
            out, we meet several people during a commute, at work, on our social media app, and so on.
        </p>
        <p>However, the time it takes to filter through the endless meeting can be tiresome and daunting as we are
            most times occupied with other things. To make this easier and limit the stress of accessing people at
            face value, dating sites allow users to meet new people who match their preferences.
        </p>
        <p>Consequentially, this service rendered by dating sites requires a fee. Although most dating sites offer
            their new users freebies such as a free sign-up or free trial period, users still get to pay a fee once
            this promo is over, and they need to unlock more features. These new features allow the users to enjoy a
            premium package where all the pre-designed features of the dating site are unlocked. The price to unlock
            a premium package usually ranges from $12-$35
        </p>
        <p>
            To conclude, most people have met their prospective partners through the use of dating sites. These
            sites are advantageous to users' classifications as it eradicates the awkwardness of meeting someone new
            and getting to know them. With better practice and utilization, users would end up being familiar with
            these dating sites.
        </p>



    </div>
</div>

<!--footer-->
<div class="footer_disclosuresection visible-xs">
    <div clas="container">
        <div class="disclosure_text">
            <div class="global-disclosure-text">
                <p>The comparator does not reference all the sites on the Canadian market but offers a list of sites
                    with which the publisher is in contact. The publisher receives remuneration from the sites and
                    depending on the partnerships set up, the number and ranking of offers may be impacted. The
                    Director of the publication can manually update the site and thus modify the classification and
                    the sites presented.</p>
            </div>
        </div>
    </div>
</div>

<footer class="foooter_main">
    <div class="container">

        <div class="col-sm-3 col-md-3">
            <a href="indexd41d.html?" class="logo logo-footer">
                <img src="assets/images/logo_white.svg" alt="top6-bestdatingsites.com">
            </a>

            <ul class="footer_socials">
                <li>
                    <a class="footer_socials_item" href="#" target="_blank">
                        <i class="fab fa-facebook-square "></i>
                    </a>
                </li>
                <li>
                    <a class="footer_socials_item" href="#">
                        <i class="fab fa-instagram-square"></i>
                    </a>
                </li>
                <li>
                    <a class="footer_socials_item" href="#">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                </li>
            </ul>
        </div>

        <nav class="col-sm-3 col-md-3">
            <p class="footer_title">Categories</p>
            <ul class="footer_menu_list">
                <li><a href="indexd41d.html?">Top 6</a></li>
                <li><a href="datingwebsitesd41d.html?">Best dating sites</a></li>
                <li><a href="seniordatingd41d.html?">Senior dating sites</a></li>
                <li><a href="christiandatingd41d.html?">Christian dating sites</a></li>
            </ul>
        </nav>
        <nav class="col-sm-3 col-md-3">
            <p class="footer_title">Reviews</p>
            <ul class="footer_menu_list">
                <li><a href="blogd41d.html?" target="_blank">Zoosk</a></li>
                <li><a href="elitesinglesd41d.html?" target="_blank">EliteSingles</a></li>
                <li><a href="seniorstodated41d.html?" target="_blank">SeniorsToDate</a></li>

            </ul>
        </nav>
        <nav class="col-sm-3 col-md-3">
            <p class="footer_title">About us</p>
            <ul class="footer_menu_list">
                <li><a href="termsd41d.html?" target="_blank">General Terms and Conditions of Use</a></li>
                <li><a href="privacyd41d.html?" target="_blank">Privacy Policy for data of a personal nature</a>
                </li>
            </ul>
        </nav>



    </div>
</footer>


<div class="logofooter">
    <p class="copyright"><a href="indexd41d.html?">© 2022 top6-bestdatingsites.com</a> </p>
</div>

<button id="scroll" class="scroll">
    <img src="assets/images/chevron-up.svg" alt="scroll to top" />
</button>
<div class="modal fade" id="compareModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div id="modelContentBox" class="modal-dialog modal-lg modal-dialog-centered" role="document">

        
    </div>
</div>
<!--footer-->

<!--scripts-->
@endsection