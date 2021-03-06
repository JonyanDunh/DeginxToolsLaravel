<!DOCTYPE html>
<html>
 <head> 
  <title>DEGINX TOOLS - ( ゜- ゜)つロ 乾杯~</title> 
  <link rel="shortcut icon" href="https://static.hdslb.com/images/favicon.ico" /> 
  <meta charset="UTF-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
  <meta http-equiv="X-UA-Compatible" content="ie=edge" /> 
  <meta name="referrer" content="no-referrer" /> 
  <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.js">
		</script> 
  <link rel="stylesheet" href="assets/semantic.min.css" /> 
 </head> 
 <body class="body" align="center"> 
  <!-- 头部菜单--> 
  <div class="ui nav top fixed stackable compact  menu"> 
   <a class="ui logo item medium header" style="pointer-events: none;"> DEGINX </a> 
   <a class="nav item active"> 主页 </a> 
   <a class="nav item"> 新闻 </a> 
   <a class="nav item"> 工具 </a> 
   <a class="nav item"> 社区 </a> 
   <div class="ui nav simple dropdown item">
     更多 
    <i class="dropdown icon"> </i> 
    <div class="menu"> 
     <a class="item"> 作者哔哩哔哩 </a> 
     <a class="item"> 友情链接 </a> 
    </div> 
   </div> 
   <div class="nav item search"> 
    <div class="ui fluid category search"> 
     <div class="ui icon input"> 
      <input class="prompt" type="text" placeholder="你感兴趣的内容..." /> 
      <i class="search icon"> </i> 
     </div> 
     <div class="results"> 
     </div> 
    </div> 
   </div> 
   <div onclick="$('.ui.modal')
  .modal('show')
;" class="ui nav item simple dropdown right avatar"> 
    <img class="ui avatar image nav" src="https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=1693649115,3629040882&amp;fm=26&amp;gp=0.jpg" /> 
    <span> 登录 </span> 
    <div class="menu"> 
     <a class="item"> 注册 </a> 
     <a class="item"> 用户主页</a> 
    </div> 
   </div> 
  </div> 
  <!-- 简介--> 
  <div id="home-page-title"> 
   <div class="ui container"> 
    <div style="padding-top:20%; font-size: 4.074em;color:#fff;font-weight: NORMAL;" class="ui huge header">
      DEGINX TOOLS 
    </div> 
    <div style="padding-top:15%;font-size: 2.574em;color:#fff;font-weight: NORMAL;text-align:left" class="ui header">
      DEGINX工具箱 
    </div> 
    <div style="padding-top:0em;font-size: 1.574em;color:#fff;font-weight: NORMAL;text-align:left;" class="ui medium header">
      本站是一个集成多个第三方工具的站点。集成了包括但不限于哔哩哔哩、ACFUN、网易云音乐、腾讯视频、QQ音乐等应用的第三方工具。还集成了图片放大、图片转换、壁纸站、短链接转换、钓鱼链接生成、哔哩哔哩BUG社区。本站点开放扩展和API支持，第三方作者可凭借接口实现与本站对接。 
    </div> 
    <div style="margin-top:10%;" class="ui  compact  stackable menu"> 
     <a class="item">哔哩哔哩</a> 
     <a class="item">ACFUN</a> 
     <a class="item">网易云音乐</a> 
    </div> 
   </div> 
  </div> 
  <!--时间线--> 
  <div style="margin-top:11.5%;" id="home-page-timeline"> 
   <div class="ui container"> 
    <div style="font-size: 2.574em;color:#fff;font-weight: NORMAL;text-align:left" class="ui header">
      更新历史 
    </div> 
    <div style="margin-top:4.5%;" class="ui feed"> 
     <div class="event"> 
      <div class="label feedimg indexfeed"> 
       <img src="https://i2.hdslb.com/bfs/face/dfc20ec4a6e62d1604d55be06ce4ff6977a6e8dc.png" /> 
      </div> 
      <div class="content"> 
       <div class="date">
         2020-04-10 
       </div> 
       <div class="summary"> 
        <a>哔哩哔哩</a> 动态封面上传 
       </div> 
       <div class="extra images"> 
        <a><img src="https://i2.hdslb.com/bfs/face/dfc20ec4a6e62d1604d55be06ce4ff6977a6e8dc.png" /></a> 
        <a><img src="https://i2.hdslb.com/bfs/face/dfc20ec4a6e62d1604d55be06ce4ff6977a6e8dc.png" /></a> 
       </div> 
      </div> 
     </div> 
     <div class="event"> 
      <div class="label feedimg indexfeed"> 
       <img src="https://i2.hdslb.com/bfs/face/dfc20ec4a6e62d1604d55be06ce4ff6977a6e8dc.png" /> 
      </div> 
      <div class="content"> 
       <div class="date">
         2020-04-06 
       </div> 
       <div class="summary"> 
        <a>哔哩哔哩</a> 动态头像上传 
       </div> 
       <div class="extra text">
         Have you seen what's going on in Israel? Can you believe it. 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!--登录注册--> 
  <div style="height:40%;width:30%;border-radius: 5px;" class="ui login  modal"> 
   <div style="padding:5%   10% 10% 10%"> 
    <h1 style="font-size: 2.574em;">登录</h1> 
    <form style="padding:5% 0% 0% 0%" class="ui form"> 
     <div class="field"> 
      <label>DEGINX账号</label> 
      <input type="text" name="deginx-account" placeholder="DEGINX账号" /> 
     </div> 
     <div class="field"> 
      <label>密码</label> 
      <input type="password" name="deginx-password" placeholder="密码" /> 
     </div> 
     <div class="field"> 
      <div class="ui checkbox"> 
       <input type="checkbox" tabindex="0" class="hidden" /> 
       <label>我同意条款和条件</label> 
      </div> 
     </div> 
     <button class="ui button" type="submit">提交</button> 
    </form> 
    <div class="ui three item menu"> 
     <a class="item">
      <svg t="1614944473894" class="icon" viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1753" width="22" height="22">
       <path d="M306.005333 117.632L444.330667 256h135.296l138.368-138.325333a42.666667 42.666667 0 0 1 60.373333 60.373333L700.330667 256H789.333333A149.333333 149.333333 0 0 1 938.666667 405.333333v341.333334a149.333333 149.333333 0 0 1-149.333334 149.333333h-554.666666A149.333333 149.333333 0 0 1 85.333333 746.666667v-341.333334A149.333333 149.333333 0 0 1 234.666667 256h88.96L245.632 177.962667a42.666667 42.666667 0 0 1 60.373333-60.373334zM789.333333 341.333333h-554.666666a64 64 0 0 0-63.701334 57.856L170.666667 405.333333v341.333334a64 64 0 0 0 57.856 63.701333L234.666667 810.666667h554.666666a64 64 0 0 0 63.701334-57.856L853.333333 746.666667v-341.333334A64 64 0 0 0 789.333333 341.333333zM341.333333 469.333333a42.666667 42.666667 0 0 1 42.666667 42.666667v85.333333a42.666667 42.666667 0 0 1-85.333333 0v-85.333333a42.666667 42.666667 0 0 1 42.666666-42.666667z m341.333334 0a42.666667 42.666667 0 0 1 42.666666 42.666667v85.333333a42.666667 42.666667 0 0 1-85.333333 0v-85.333333a42.666667 42.666667 0 0 1 42.666667-42.666667z" p-id="1754" fill="#fb7299"></path>
      </svg></a> 
     <a class="item">回顾</a> 
     <a class="item">活动预告</a> 
    </div> 
   </div> 
  </div> 
  <script src="assets/semantic.min.js">
	</script>  
 </body>
</html>