@extends('index.g9zz.master')

@section('title','首页')

@section('css')

@endsection

@section('content')
    <div class="container main-container">

        <div class="banner-container rbs row">
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <div class="item">
                    <a href="http://iphpt.com" class="no-pjax">
                        <p class="img"><span style="background-image:url(http://www.g9zz.com/uploads/banners/vkpEjOATSA2eTcZFO9OI.jpg?imageView2/1/w/424/h/212)"></span></p>
                        <p class="caption">叶落山城秋</p>
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <div class="item">
                    <a href="http://iphpt.com" class="no-pjax">
                        <p class="img"><span style="background-image:url(http://www.g9zz.com/uploads/banners/c5WtZ85nURmWBj1dk4s9.jpg?imageView2/1/w/424/h/212)"></span></p>
                        <p class="caption">叶落山城</p>
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <div class="item">
                    <a href="http://iphpt.com" class="no-pjax">
                        <p class="img"><span style="background-image:url(http://www.g9zz.com/uploads/banners/w4ofWg8EyyO6C0SvFa95.jpg?imageView2/1/w/424/h/212)"></span></p>
                        <p class="caption">叶落山城</p>
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <div class="item">
                    <a href="http://iphpt.com" class="no-pjax">
                        <p class="img"><span style="background-image:url(http://www.g9zz.com/uploads/banners/lBRhSaePKgav06w2IkSl.jpg?imageView2/1/w/424/h/212)"></span></p>
                        <p class="caption">叶落山城</p>
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <div class="item">
                    <a href="http://iphpt.com" class="no-pjax">
                        <p class="img"><span style="background-image:url(http://www.g9zz.com/uploads/banners/54kbY8umhh5i7yWTUNh0.jpg?imageView2/1/w/424/h/212)"></span></p>
                        <p class="caption">叶落山城</p>
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <div class="item">
                    <a href="http://iphpt.com" class="no-pjax">
                        <p class="img"><span style="background-image:url(http://www.g9zz.com/uploads/banners/i2IcbRHtIlTcUBKemtc4.jpg?imageView2/1/w/424/h/212)"></span></p>
                        <p class="caption">叶落山城</p>
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <div class="item">
                    <a href="http://iphpt.com" class="no-pjax">
                        <p class="img"><span style="background-image:url(http://www.g9zz.com/uploads/banners/3rB7jwKpIRRfY151l672.jpg?imageView2/1/w/424/h/212)"></span></p>
                        <p class="caption">叶落山城</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="sites-index">
            @foreach($categories as $item)
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <i class="fa fa-weibo text-md"></i> {{$item['name']}}
                    </div>


                    <div class="panel-body row">
                        @if ($item['child'])
                            @foreach($item['child']  as $value)
                                <div class="col-md-2 site">
                                    <a class="popover-with-html" target="_blank" href="http://iphpt.com?utm_source=g9zz.com" data-content="">
                                        <img class="favicon" src="https://oe9nbfytu.qnssl.com/user/b618677591aa49b3972ece0c7d26b473/thumb">
                                        {{$value['name']}}
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

            @endforeach




            <br>
            <hr>





        </div>



    </div>
@endsection


@section('js')

@endsection