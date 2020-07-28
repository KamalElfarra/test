@include('includs.h_blog')

<body>

<header>
    <div class="bg-191">
        <div class="container">
            <div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">


            </div><!-- top-menu -->
        </div><!-- container -->
    </div><!-- bg-191 -->

    <div class="container">
        <a class="logo" href="/" style="font-size: 30px; color: #0a6aa1;">عن الدكتور</a>

        <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

        @foreach($category as $cat)
        <ul class="main-menu" id="main-menu">

            <li><a href="/#{{$posts->slug}}">{{$cat->name}}</a></li>

        </ul>
        @endforeach
        <div class="clearfix"></div>
    </div><!-- container -->
</header>


<section class="ptb-0">
    <div class="mb-30 brdr-ash-1 opacty-5"></div>
    <div class="container">
{{--        <a class="mt-10" href="index.html"><i class="mr-5 ion-ios-home"></i>Home<i class="mlr-10 ion-chevron-right"></i></a>--}}
{{--        <a class="mt-10" href="04_FAQs.html">FAQs<i class="mlr-10 ion-chevron-right"></i></a>--}}
{{--        <a class="color-ash mt-10" href="04_FAQs-single.html">How to Buy PowerLedger POWR</a>--}}
    </div><!-- container -->
</section>


<section>
    <div class="container">
        <h2 class="mb-50"><b>{{$blog->name}}</b></h2>
        <h4><b>{{$blog->title}}</b></h4>

        <p class="pt-30">{{$blog->contents}}</p>

    </div><!-- container -->
</section>



{{--<footer class="bg-191 color-ccc">--}}

{{--    <div class="container">--}}
{{--        <div class="pt-50 pb-20 pos-relative">--}}
{{--            <div class="abs-tblr pt-50 z--1 text-center">--}}
{{--                <div class="h-80 pos-relative"><img class="opacty-1 h-100 w-auto" src="images/map.png" alt=""></div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}

{{--                <div class="col-sm-4">--}}
{{--                    <div class="mb-30">--}}
{{--                        <a href="#"><img src="/images/logo-white.png"></a>--}}
{{--                        <p class="mtb-20 color-ccc">Bit coin is an open-source, peer-to-peer, digital decentralized cryptocurrency.--}}
{{--                            Powered by blockchain technology, its defining characteristic is</p>--}}
{{--                        <p class="color-ash"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
{{--                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>--}}
{{--                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
{{--                        </p>--}}
{{--                    </div><!-- mb-30 -->--}}
{{--                </div><!-- col-md-4 -->--}}

{{--                <div class="col-sm-4">--}}
{{--                    <div class="mb-30">--}}
{{--                        <h5 class="color-primary mb-20"><b>MOST POPULAR</b></h5>--}}
{{--                        <div class="mb-20">--}}
{{--                            <a class="color-white" href="#"><b>Its Make or Break Time for Bitcoin</b></a>--}}
{{--                            <h6 class="mt-10">Jan 25, 2018</h6>--}}
{{--                        </div>--}}
{{--                        <div class="brdr-ash-1 opacty-2 mr-30"></div>--}}
{{--                        <div class="mt-20">--}}
{{--                            <a class="color-white" href="#"><b>Bitcoin's roller coster ride is not over</b></a>--}}
{{--                            <h6 class="mt-10">Jan 25, 2018</h6>--}}
{{--                        </div>--}}
{{--                    </div><!-- mb-30 -->--}}
{{--                </div><!-- col-md-4 -->--}}

{{--                <div class="col-sm-4">--}}
{{--                    <div class="mb-30">--}}
{{--                        <h5 class="color-primary mb-20"><b>MOST POPULAR</b></h5>--}}
{{--                        <div class="mb-20">--}}
{{--                            <a class="color-white" href="#"><b>Its Make or Break Time for Bitcoin</b></a>--}}
{{--                            <h6 class="mt-10">Jan 25, 2018</h6>--}}
{{--                        </div>--}}
{{--                        <div class="brdr-ash-1 opacty-2 mr-30"></div>--}}
{{--                        <div class="mt-20">--}}
{{--                            <a class="color-white" href="#"><b>Bitcoin's roller coster ride is not over</b></a>--}}
{{--                            <h6 class="mt-10">Jan 25, 2018</h6>--}}
{{--                        </div>--}}
{{--                    </div><!-- mb-30 -->--}}
{{--                </div><!-- col-md-4 -->--}}

{{--            </div><!-- row -->--}}
{{--        </div><!-- ptb-50 -->--}}

{{--        <div class="brdr-ash-1 opacty-2"></div>--}}

{{--        <div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">--}}

{{--            <ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">--}}
{{--                <li><a class="pl-0 pl-sm-10" href="#">Terms & Conditions</a></li>--}}
{{--                <li><a href="#">Privacy policy</a></li>--}}
{{--                <li><a href="#">Jobs advertising</a></li>--}}
{{--                <li><a href="#">Contact us</a></li>--}}
{{--            </ul>--}}
{{--            <ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">--}}
{{--                <li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>--}}
{{--                <li><a href="#"><i class="ion-social-twitter"></i></a></li>--}}
{{--                <li><a href="#"><i class="ion-social-google"></i></a></li>--}}
{{--                <li><a href="#"><i class="ion-social-instagram"></i></a></li>--}}
{{--                <li><a href="#"><i class="ion-social-bitcoin"></i></a></li>--}}
{{--            </ul>--}}

{{--        </div><!-- oflow-hidden -->--}}
{{--    </div><!-- container -->--}}
{{--</footer>--}}

<!-- SCIPTS -->

<script src="/plugin-frameworks/jquery-3.2.1.min.js"></script>

<script src="/plugin-frameworks/tether.min.js"></script>

<script src="/plugin-frameworks/bootstrap.js"></script>

<script src="/common/scripts.js"></script>

</body>
</html>
