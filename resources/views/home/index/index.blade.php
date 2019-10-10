
<!doctype html>
<html>
<head>
@include('home.public.head')
</head>
<body>
<header> 
@include('home.public.header')
</header>
<article> 
  <!--轮播 开始-->
 <div class="picsbox"> 
  <div class="banner">
    <div id="banner" class="fader">
      @foreach($banners_data as $k=>$v)
      <li class="slide" ><a href="/" target="_blank"><img src="/uploads/{{ $v->url }}"><span class="imginfo">{{ $v->title }}</span></a></li>
      @endforeach
     
      <div class="fader_controls">
        <div class="page prev" data-target="prev">&lsaquo;</div>
        <div class="page next" data-target="next">&rsaquo;</div>
        <ul class="pager_list">
        </ul>
      </div>
    </div>
  </div>
  <!--轮播 结束-->
  <div class="toppic">
    @foreach($articles_prev_data as $k=>$v)
    <li> <a href="/" target="_blank"> <i><img src="/uploads/{{ $v->thumb }}"></i>
      <h2>{{ $v->desc }}</h2>
      <span>{{ $v->auth }}</span> </a> </li>
    @endforeach
  </div>
 
  </div>
  <div class="blank"></div>
  <!--blogsbox begin-->
  <div class="blogsbox">
  
    @foreach($articles_data as $k=>$v)
    <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
      <h3 class="blogtitle"><a href="/home/detail/index?id={{ $v->id }}&tagname_id={{ $v->tid }}" target="_blank">{{ $v->title }}</a></h3>
      <span class="blogpic"><a href="/home/detail/index?id={{ $v->id }}&tagname_id={{ $v->tid }}" title=""><img src="/uploads/{{ $v->thumb }}" alt=""></a></span>
      <p class="blogtext">
        {{ $v->desc }}
      </p>
      <div class="bloginfo">
        <ul>
          <li class="author"><a href="/">{{ $v->auth }}</a></li>
          <li class="lmname"><a href="/">{{ $cates_cname_data[$v->cid] }}</a></li>
          <li class="timer">{{ $v->ctime }}</li>
          <li class="view"><span>{{ $v->num }}</span>已阅读</li>
          <li class="like">{{ $v->goodnum }}</li>
        </ul>
      </div>
    </div>
    @endforeach

  </div>
  <!--blogsbox end-->
  <div class="sidebar">
    <div class="zhuanti">
      <h2 class="hometitle">特别推荐</h2>
      <ul>
        @foreach($articles_tuijian_data as $k=>$v)
        <li> <i><img src="/uploads/{{ $v->thumb }}"></i>
          <p>{{ $v->title }} <span><a href="/">阅读</a></span> </p>
        </li>
       @endforeach
      </ul>
    </div>
    <div class="tuijian">
      <h2 class="hometitle">推荐文章</h2>

      <ul class="tjpic">
        <i><img src="/uploads/20191530/u=2030520958,2742862127&fm=173&app=49&f=JPEG.jpg"></i>
        <p><a href="/">死生契阔，与子成说。执子之手，与子偕老。</a></p>
      </ul>
      <ul class="sidenews">
        @foreach($articles_tuijiana_data as $k=>$v)
        <li> <i><img src="/uploads/{{ $v->thumb }}"></i>
          <p><a href="/">{{ $v->desc }}</a></p>
          <span>{{ $v->ctime }}</span> 
        </li>
        @endforeach
      </ul>
    </div>
    <div class="tuijian">
      <h2 class="hometitle">点击排行</h2>
      <ul class="tjpic">
        <i><img src="/uploads/20190528/nPy6ASJ5V34k5ZpFj9BUF7i06VcbMTJ1O4xH1Z5u.jpeg"></i>
        <p><a href="/">那一天 我闭目在经殿香雾中 蓦然听见你颂经中的真言
                       那一月 我摇动所有的转经筒 不为超度 只为触摸你的指尖
                       那一年 我磕长头匍匐在山路 不为觐见 只为贴着你的温暖</a></p>
      </ul>
      <ul class="sidenews">
        @foreach($articles_tuijianb_data as $k=>$v)
        <li> <i><img src="/uploads/{{ $v->thumb }}"></i>
          <p><a href="/">{{ $v->desc }}</a></p>
          <span>{{ $v->ctime }}</span> 
        </li>
        @endforeach
      </ul>
    </div>
    <div class="cloud">
      <h2 class="hometitle">标签云</h2>
      <ul>
        <!-- 显示标签云 开始 -->
        @foreach($tagnames_data as $k=>$v)
        <a href="/home/lists/index?tagname_id={{ $v->id }}" style="background-color: {{ $v->bgcolor  }}">{{ $v->tagname }}</a> 
        @endforeach
        <!-- 显示标签云 结束 -->
      </ul>
    </div>
    <div class="links">
      <h2 class="hometitle">友情链接</h2>
      <ul>
        <li><a href="https://weibo.com/5957454121/profile?rightmod=1&wvr=6&mod=personinfo&is_all=1" target="_blank">个人微博</a></li>
        
      </ul>
    </div>
    <div class="guanzhu" id="follow-us">
      <h2 class="hometitle">点个赞呦！ 亲!</h2>
      <ul>
        <li class="sina"><a href="https://weibo.com/5957454121/profile?rightmod=1&wvr=6&mod=personinfo&is_all=1" target="_blank"><span>新浪微博</span>博客</a></li>
        <li class="tencent"><a href="/" target="_blank"><span>腾讯微博</span>博客</a></li>
        <li class="qq"><a href="/" target="_blank"><span>QQ号</span>11111111</a></li>
        <li class="email"><a href="/" target="_blank"><span>邮箱帐号</span>11111111@qq.com</a></li>
        <li class="wxgzh"><a href="/" target="_blank"><span>微信号</span>111111111</a></li>
        <!-- <li class="wx"><img src="/home/images/wx.jpg"></li> -->
      </ul>
    </div>
  </div>
</article>
<footer>
  <p>Design by <a href="http://swarp.wang" target="_blank">关于个人博客</a> <a href="/">11111</a></p>
</footer>
<a href="#" class="cd-top">Top</a>
</body>
</html>
