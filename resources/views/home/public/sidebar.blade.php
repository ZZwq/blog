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

                      那一年 我磕长头匍匐在山路 不为觐见 只为贴着你的温暖

                      那一世 我转山转水转佛塔啊 不为修来生 只为途中与你相见

                      那一夜 我听了一宿梵唱 不为参悟 只为寻你的一丝气息

                      那一月 我转过所有经筒 不为超度 只为触摸你的指纹

                      那一年 我磕长头拥抱尘埃 不为朝佛 只为贴着你的温暖

                      那一世 我翻遍十万大山 不为修来世 只为路中能与你相遇

                      那一瞬 我飞升成仙 不为长生 只为佑你喜乐平安</a></p>
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
        @foreach($tagnames_data as $k=>$v)
        <a href="/home/lists/index?tagname_id={{$v->id}}" style="bgackground-color: {{ $v->bgcolor }};">{{ $v->tagname }}</a> 
        @endforeach
      </ul>
    </div>
     <div class="guanzhu" id="follow-us">
      <h2 class="hometitle">关注我 么么哒！</h2>
      <ul>
        <li class="sina"><a href="https://weibo.com/5957454121/profile?rightmod=1&wvr=6&mod=personinfo&is_all=1" target="_blank"><span>新浪微博</span>张伟琦的微博</a></li>
        <li class="tencent"><a href="/" target="_blank"><span>腾讯微博</span>博客</a></li>
        <li class="qq"><a href="/" target="_blank"><span>QQ号</span>1111111</a></li>
        <li class="email"><a href="/" target="_blank"><span>邮箱帐号</span>111111@qq.com</a></li>
        <li class="wxgzh"><a href="/" target="_blank"><span>微信号</span>1111111</a></li>
        <!-- <li class="wx"><img src="/home/images/wx.jpg"></li> -->
      </ul>
    </div>
  </div>