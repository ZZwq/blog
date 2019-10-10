<!doctype html>
<html>
<head>
@include('home.public.head')
</head>
<body>
<header>
 @include('home.public.header')
</header>
<div class="pagebg ab"> </div>
<div class="container">
  <h1 class="t_nav"><span>你，我生命中一个重要的过客，我们之所以是过客，因为你未曾会为我停留。</span><a href="/" class="n1">网站首页</a><a href="/" class="n2">留言</a></h1>
  <div class="news_infos">
    <ul>
      此处安装评论插件
       <div class="comment-entry f-12 first">
      @foreach($pcontent_data as $k=>$v)
     <div class="comment-item">  
        <div class="details f-aid">
          <span>头像:<img style="width:100px;" src="/uploads/{{$v->thumb}}"></span>
          <br> 
          <span>用户名称:{{$v->uname}}</span>
          <br>
           <span class="comment-entry-time">评论时间:{{$v->ctime}}</span>  
           </div>   
          <div class="comment-content">      
            评论内容:{{$v->pcontent}}
           </div> 
                  
     </div> 
      @endforeach 
   </div>
  
    </ul>
  </div>
  <div class="sidebar">
    <div class="about">
      <p class="avatar"> <img src="/home/images/avatar.jpg" alt=""> </p>
      <p class="abname">dancesmile | 杨青</p>
      <p class="abposition">Web前端设计师、网页设计</p>
      <p class="abtext"> 一个80后草根女站长！09年入行。一直潜心研究web前端技术，一边工作一边积累经验，分享一些个人博客模板，以及SEO优化等心得。 </p>
    </div>
    <div class="weixin">
      <h2 class="hometitle">微信关注</h2>
      <ul>
        <img src="/home/images/wx.jpg">
      </ul>
    </div>
  </div>
</div>
<footer>
  <p>Design by <a href="http://www.yangqq.com" target="_blank">杨青个人博客</a> <a href="/">蜀ICP备11002373号-1</a></p>
</footer>
<a href="#" class="cd-top">Top</a>
</body>
</html>

