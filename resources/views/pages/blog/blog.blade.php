@extends('layouts.site')
@section('main')

<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Danh mục sản phẩm</span>
                    </div>
                    <ul>
                        @foreach($category as $key => $cate)
                        <li><b><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></b></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="{{URL::to('/tim-kiem')}}" method="POST">
                            {{csrf_field()}}
                            <input type="text" name="keywords_submit" placeholder="Nhập từ khóa cần tìm">
                            <button type="submit" name="search_items" class="site-btn">Tìm kiếm</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>0975715824</h5>
                            <span>Hỗ trợ 24/7</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{url('public/frontend')}}/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Blog</h2>
                    <div class="breadcrumb__option">
                        <a href="{{URL::to('/')}}">Trang chủ</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="blog__sidebar">
                    <div class="blog__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Danh mục bài viết</h4>
                        <ul>
                            @foreach($category_post as $key => $danhmucbaiviet)
                            <li><a href="{{URL::to('/danh-muc-bai-viet/'.$danhmucbaiviet->cate_post_slug)}}">{{$danhmucbaiviet->cate_post_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Bài viết gần đây</h4>
                        <div class="blog__sidebar__recent">
                            <a href="#" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="{{url('public/frontend')}}/img/blog/sidebar/sr-1.jpg" alt="">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>09 Kinds Of Vegetables<br /> Protect The Liver</h6>
                                    <span>MAR 05, 2019</span>
                                </div>
                            </a>
                            <a href="#" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="{{url('public/frontend')}}/img/blog/sidebar/sr-2.jpg" alt="">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>Tips You To Balance<br /> Nutrition Meal Day</h6>
                                    <span>MAR 05, 2019</span>
                                </div>
                            </a>
                            <a href="#" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="{{url('public/frontend')}}/img/blog/sidebar/sr-3.jpg" alt="">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>4 Principles Help You Lose <br />Weight With Vegetables</h6>
                                    <span>MAR 05, 2019</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Search By</h4>
                        <div class="blog__sidebar__item__tags">
                            <a href="#">Apple</a>
                            <a href="#">Beauty</a>
                            <a href="#">Vegetables</a>
                            <a href="#">Fruit</a>
                            <a href="#">Healthy Food</a>
                            <a href="#">Lifestyle</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{url('public/frontend')}}/img/blog/blog-2.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                    quaerat </p>
                                <a href="#" class="blog__btn">Xem thêm <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{url('public/frontend')}}/img/blog/blog-3.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="#">Visit the clean farm in the US</a></h5>
                                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                    quaerat </p>
                                <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{url('public/frontend')}}/img/blog/blog-1.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="#">Cooking tips make cooking simple</a></h5>
                                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                    quaerat </p>
                                <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{url('public/frontend')}}/img/blog/blog-4.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="#">Cooking tips make cooking simple</a></h5>
                                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                    quaerat </p>
                                <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{url('public/frontend')}}/img/blog/blog-4.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="#">The Moment You Need To Remove Garlic From The Menu</a></h5>
                                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                    quaerat </p>
                                <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{url('public/frontend')}}/img/blog/blog-6.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="#">Cooking tips make cooking simple</a></h5>
                                <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                    quaerat </p>
                                <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="product__pagination blog__pagination">
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

@stop();