<!DOCTYPE html>
<html lang="zh">

<head>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="viggo" />
  <title>WebStack.cc - 设计师网址导航</title>
  <meta name="keywords"
    content="UI设计,UI设计素材,设计导航,网址导航,设计资源,创意导航,创意网站导航,设计师网址大全,设计素材大全,设计师导航,UI设计资源,优秀UI设计欣赏,设计师导航,设计师网址大全,设计师网址导航,产品经理网址导航,交互设计师网址导航,www.webstack.cc">
  <meta name="description" content="WebStack - 收集国内外优秀设计网站、UI设计资源网站、灵感创意网站、素材资源网站，定时更新分享优质产品设计书签。www.webstack.cc">
  <link rel="shortcut icon" href="/modules/webstack/public/images/favicon.png">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
  <link rel="stylesheet" href="/modules/webstack/public/css/fonts/linecons/css/linecons.css">
  <link rel="stylesheet" href="/modules/webstack/public/css/fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/modules/webstack/public/css/bootstrap.css">
  <link rel="stylesheet" href="/modules/webstack/public/css/xenon-core.css">
  <link rel="stylesheet" href="/modules/webstack/public/css/xenon-components.css">
  <link rel="stylesheet" href="/modules/webstack/public/css/xenon-skins.css">
  <link rel="stylesheet" href="/modules/webstack/public/css/nav.css">
  <script src="/modules/webstack/public/js/jquery-1.11.1.min.js"></script>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- / FB Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:url" content="http://www.webstack.cc/">
  <meta property="og:title" content="WebStack - 收集国内外优秀设计网站、UI设计资源网站、灵感创意网站、素材资源网站，定时更新分享优质产品设计书签。www.webstack.cc">
  <meta property="og:description"
    content="UI设计,UI设计素材,设计导航,网址导航,设计资源,创意导航,创意网站导航,设计师网址大全,设计素材大全,设计师导航,UI设计资源,优秀UI设计欣赏,设计师导航,设计师网址大全,设计师网址导航,产品经理网址导航,交互设计师网址导航,www.webstack.cc">
  <meta property="og:image" content="http://webstack.cc/assets/images/webstack_banner_cn.png">
  <meta property="og:site_name" content="WebStack - 收集国内外优秀设计网站、UI设计资源网站、灵感创意网站、素材资源网站，定时更新分享优质产品设计书签。www.webstack.cc">
  <!-- / Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="WebStack - 收集国内外优秀设计网站、UI设计资源网站、灵感创意网站、素材资源网站，定时更新分享优质产品设计书签。www.webstack.cc">
  <meta name="twitter:description"
    content="UI设计,UI设计素材,设计导航,网址导航,设计资源,创意导航,创意网站导航,设计师网址大全,设计素材大全,设计师导航,UI设计资源,优秀UI设计欣赏,设计师导航,设计师网址大全,设计师网址导航,产品经理网址导航,交互设计师网址导航,www.webstack.cc">
  <meta name="twitter:image" content="http://www.webstack.cc/assets/images/webstack_banner_cn.png">
</head>

<body class="page-body">
  <!-- skin-white -->
  <div class="page-container">
    <div class="sidebar-menu toggle-others fixed">
      <div class="sidebar-menu-inner">
        <header class="logo-env">
          <!-- logo -->
          <div class="logo">
            <a href="/{{$module_config['slug']}}" class="logo-expanded">
              <img src="/modules/webstack/public/images/logo@2x.png" width="100%" alt="" />
            </a>
            <a href="/{{$module_config['slug']}}" class="logo-collapsed">
              <img src="/modules/webstack/public/images/logo-collapsed@2x.png" width="40" alt="" />
            </a>
          </div>
          <div class="mobile-menu-toggle visible-xs">
            <a href="#" data-toggle="user-info-menu">
              <i class="linecons-cog"></i>
            </a>
            <a href="#" data-toggle="mobile-menu">
              <i class="fa-bars"></i>
            </a>
          </div>
        </header>
        <ul id="main-menu" class="main-menu">
          <li>
            <a href="#常用推荐" class="smooth">
              <i class="linecons-star"></i>
              <span class="title">常用推荐</span>
            </a>
          </li>
          <li>
            <a href="#社区资讯" class="smooth">
              <i class="linecons-doc"></i>
              <span class="title">社区资讯</span>
            </a>
          </li>
          <li>
            <a>
              <i class="linecons-lightbulb"></i>
              <span class="title">灵感采集</span>
            </a>
            <ul>
              <li>
                <a href="#发现产品" class="smooth">
                  <span class="title">发现产品</span>
                </a>
              </li>
              <li>
                <a href="#界面灵感" class="smooth">
                  <span class="title">界面灵感</span>
                </a>
              </li>
              <li>
                <a href="#网页灵感" class="smooth">
                  <span class="title">网页灵感</span>
                  <span class="label label-pink pull-right hidden-collapsed">Hot</span>
                </a>
              </li>
              <!-- <li>
                                <a href="#动效设计" class="smooth">
                                    <span class="title">动效设计</span>
                                </a>
                            </li>
                            <li>
                                <a href="#电商平台" class="smooth">
                                    <span class="title">电商平台</span>
                                </a>
                            </li> -->
            </ul>
          </li>
          <li>
            <a>
              <i class="linecons-thumbs-up"></i>
              <span class="title">素材资源</span>
            </a>
            <ul>
              <li>
                <a href="#图标素材" class="smooth">
                  <span class="title">图标素材</span>
                </a>
              </li>
              <li>
                <a href="#LOGO设计" class="smooth">
                  <span class="title">LOGO设计</span>
                </a>
              </li>
              <li>
                <a href="#平面素材" class="smooth">
                  <span class="title">平面素材</span>
                </a>
              </li>
              <li>
                <a href="#UI资源" class="smooth">
                  <span class="title">UI资源</span>
                </a>
              </li>
              <li>
                <a href="#Sketch资源" class="smooth">
                  <span class="title">Sketch资源</span>
                </a>
              </li>
              <li>
                <a href="#字体资源" class="smooth">
                  <span class="title">字体资源</span>
                </a>
              </li>
              <li>
                <a href="#Mockup" class="smooth">
                  <span class="title">Mockup</span>
                </a>
              </li>
              <li>
                <a href="#摄影图库" class="smooth">
                  <span class="title">摄影图库</span>
                </a>
              </li>
              <li>
                <a href="#PPT资源" class="smooth">
                  <span class="title">PPT资源</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a>
              <i class="linecons-diamond"></i>
              <span class="title">常用工具</span>
            </a>
            <ul>
              <li>
                <a href="#图形创意" class="smooth">
                  <span class="title">图形创意</span>
                </a>
              </li>
              <li>
                <a href="#界面设计" class="smooth">
                  <span class="title">界面设计</span>
                </a>
              </li>
              <li>
                <a href="#交互动效" class="smooth">
                  <span class="title">交互动效</span>
                </a>
              </li>
              <li>
                <a href="#在线配色" class="smooth">
                  <span class="title">在线配色</span>
                </a>
              </li>
              <li>
                <a href="#在线工具" class="smooth">
                  <span class="title">在线工具</span>
                </a>
              </li>
              <!-- <li>
                                <a href="#Sketch插件" class="smooth">
                                    <span class="title">Sketch插件</span>
                                </a>
                            </li> -->
              <li>
                <a href="#Chrome插件" class="smooth">
                  <span class="title">Chrome插件</span>
                </a>
              </li>
              <!-- <li>
                                <a href="#H5制作" class="smooth">
                                    <span class="title">H5制作</span>
                                </a>
                            </li> -->
            </ul>
          </li>
          <li>
            <a>
              <i class="linecons-pencil"></i>
              <span class="title">学习教程</span>
            </a>
            <ul>
              <li>
                <a href="#设计规范" class="smooth">
                  <span class="title">设计规范</span>
                </a>
              </li>
              <li>
                <a href="#视频教程" class="smooth">
                  <span class="title">视频教程</span>
                </a>
              </li>
              <li>
                <a href="#设计文章" class="smooth">
                  <span class="title">设计文章</span>
                </a>
              </li>
              <li>
                <a href="#设计电台" class="smooth">
                  <span class="title">设计电台</span>
                </a>
              </li>
              <li>
                <a href="#交互设计" class="smooth">
                  <span class="title">交互设计</span>
                  <span class="label label-pink pull-right hidden-collapsed">Hot</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#UED团队" class="smooth">
              <i class="linecons-user"></i>
              <span class="title">UED团队</span>
            </a>
          </li>
          <li>
            <a href="about.html">
              <i class="linecons-heart"></i>
              <span class="tooltip-blue">关于本站</span>
              <span class="label label-Primary pull-right hidden-collapsed">♥︎</span>
            </a>
          </li>
          <!-- <div class="submit-tag">
                        <a href="about.html">
                            <i class="linecons-heart"></i>
                            <span class="tooltip-blue">关于本站</span>
                            <span class="label label-Primary pull-right hidden-collapsed">♥︎</span>
                        </a>
                    </div> -->
        </ul>
      </div>
    </div>
    <div class="main-content">
      <nav class="navbar user-info-navbar" role="navigation">
        <!-- User Info, Notifications and Menu Bar -->
        <!-- Left links for user info navbar -->
        <ul class="user-info-menu left-links list-inline list-unstyled" >
          <li class="hidden-sm hidden-xs">
            <a href="#" data-toggle="sidebar">
              <i class="fa-bars"></i>
            </a>
          </li>
          <li class="dropdown hover-line language-switcher" style="display: none;">
            <a href="../cn/index.html" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/modules/webstack/public/images/flags/flag-cn.png" alt="flag-cn" /> Chinese
            </a>
            <ul class="dropdown-menu languages">
              <li>
                <a href="../en/index.html">
                  <img src="/modules/webstack/public/images/flags/flag-us.png" alt="flag-us" /> English
                </a>
              </li>
              <li class="active">
                <a href="../cn/index.html">
                  <img src="/modules/webstack/public/images/flags/flag-cn.png" alt="flag-cn" /> Chinese
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="user-info-menu right-links list-inline list-unstyled">
          <li class="hidden-sm hidden-xs">
            <a href="https://github.com/WebStackPage/WebStackPage.github.io" target="_blank">
              <i class="fa-github"></i> GitHub
            </a>
          </li>
        </ul>
        <!-- <a href="https://github.com/WebStackPage/WebStackPage.github.io" target="_blank"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a> -->

      </nav>
      <!-- 常用推荐 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="常用推荐"></i>常用推荐</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://dribbble.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://dribbble.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/dribbble.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Dribbble</strong>
                </a>
                <p class="overflowClip_2">全球UI设计师作品分享平台。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://behance.net/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://behance.net/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/behance.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Behance</strong>
                </a>
                <p class="overflowClip_2">Adobe旗下的设计师交流平台，来自世界各地的设计师在这里分享自己的作品。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('http://www.ui.cn/', '_blank')"
            data-toggle="tooltip" data-placement="bottom" title="" data-original-title="http://www.ui.cn/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/uicn.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>UI中国</strong>
                </a>
                <p class="overflowClip_2">图形交互与界面设计交流、作品展示、学习平台。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.zcool.com.cn/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://www.zcool.com.cn/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/zcool.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>站酷</strong>
                </a>
                <p class="overflowClip_2">中国人气设计师互动平台</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.pinterest.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.pinterest.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/pinterest.png" class="lozad img-circle"
                  width="40">
              </a>
              <span class="label label-info" data-toggle="tooltip" data-placement="left" title=""
                data-original-title="Hello I am a Tooltip"></span>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Pinterest</strong>
                </a>
                <p class="overflowClip_2">全球美图收藏采集站</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://huaban.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://huaban.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/huaban.png" class="lozad img-circle"
                  width="40">
              </a>
              <span class="label label-info" data-toggle="tooltip" data-placement="left" title=""
                data-original-title="Hello I am a Tooltip"></span>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>花瓣</strong>
                </a>
                <p class="overflowClip_2">收集灵感,保存有用的素材</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://medium.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://medium.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/medium.png" class="lozad img-circle"
                  width="40">
              </a>
              <span class="label label-info" data-toggle="tooltip" data-placement="left" title=""
                data-original-title="Hello I am a Tooltip"></span>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Medium</strong>
                </a>
                <p class="overflowClip_2">高质量设计文章</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.uisdc.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://www.uisdc.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/uisdc.png" class="lozad img-circle"
                  width="40">
              </a>
              <span class="label label-info" data-toggle="tooltip" data-placement="left" title=""
                data-original-title="Hello I am a Tooltip"></span>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>优设</strong>
                </a>
                <p class="overflowClip_2">设计师交流学习平台</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.producthunt.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.producthunt.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/producthunt.png" class="lozad img-circle"
                  width="40">
              </a>
              <span class="label label-info" data-toggle="tooltip" data-placement="left" title=""
                data-original-title="Hello I am a Tooltip"></span>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Producthunt</strong>
                </a>
                <p class="overflowClip_2">发现新鲜有趣的产品</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.youtube.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://www.youtube.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/youtube.png" class="lozad img-circle"
                  width="40">
              </a>
              <span class="label label-info" data-toggle="tooltip" data-placement="left" title=""
                data-original-title="Hello I am a Tooltip"></span>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Youtube</strong>
                </a>
                <p class="overflowClip_2">全球最大的学习分享平台</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.google.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://www.google.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/google.png" class="lozad img-circle"
                  width="40">
              </a>
              <span class="label label-info" data-toggle="tooltip" data-placement="left" title=""
                data-original-title="Hello I am a Tooltip"></span>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Google</strong>
                </a>
                <p class="overflowClip_2">全球最大的UI学习分享平台</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!-- END 常用推荐 -->
      <!-- 推荐 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="界面灵感"></i>推荐</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.aliyun.com/minisite/goods?userCode=xtct5egx&share_source=copy_link', '_blank')"
            data-toggle="tooltip" data-placement="bottom" title=""
            data-original-title="https://www.aliyun.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/aliyun.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>阿里云</strong>
                </a>
                <p class="overflowClip_2">点击领取2000元限量云产品优惠券</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.gulusucai.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.gulusucai.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/gulusucai.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>咕噜素材</strong>
                </a>
                <p class="overflowClip_2">质量很高的设计素材网站（推荐）</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://xiyou4you.us/r/?s=13731627', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://xiyou4you.us">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/xiyou.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>西游-科学上网</strong>
                </a>
                <p class="overflowClip_2">优秀的科学上网（略贵，但是贼稳，点击注册领取优惠券）</p>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www.link360.top/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="https://www.link360.top/">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="/modules/webstack/public/images/logos/ss-kexueshangwang.png" class="lozad img-circle" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>SS梯子</strong>
                                </a>
                                <p class="overflowClip_2">SS梯子-科学上网（实惠，但是不太稳）</p>
                            </div>
                        </div>
                    </div>
                </div> -->
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.shejizhoukan.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.shejizhoukan.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/shejizhoukan.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>设计周刊</strong>
                </a>
                <p class="overflowClip_2">最新设计资讯（每天更新）</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.ziticangku.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.ziticangku.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/ziticangku.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>字体仓库</strong>
                </a>
                <p class="overflowClip_2">最全的免费商用字体库</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://eleduck.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://eleduck.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/eleduck.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>电鸭社区</strong>
                </a>
                <p class="overflowClip_2">国内最早的远程工作社区，也是互联网工作者们的聚集地，非常适合设计开发小伙伴关注</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 推荐 -->
      <!-- 社区资讯 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="社区资讯"></i>社区资讯</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.leiphone.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.leiphone.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/leiphone.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>雷锋网</strong>
                </a>
                <p class="overflowClip_2">人工智能和智能硬件领域的互联网科技媒体</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('http://36kr.com/', '_blank')"
            data-toggle="tooltip" data-placement="bottom" title="" data-original-title="http://36kr.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/36kr.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>36kr</strong>
                </a>
                <p class="overflowClip_2">创业资讯、科技新闻</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.digitaling.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.digitaling.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/digitaling.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>数英网</strong>
                </a>
                <p class="overflowClip_2">数字媒体及职业招聘网站</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.lieyunwang.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.lieyunwang.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/lieyunwang.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>猎云网</strong>
                </a>
                <p class="overflowClip_2">互联网创业项目推荐和创业创新资讯</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.woshipm.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://www.woshipm.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/woshipm.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>人人都是产品经理</strong>
                </a>
                <p class="overflowClip_2">产品经理、产品爱好者学习交流平台</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.zaodula.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://www.zaodula.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/zaodula.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>互联网早读课</strong>
                </a>
                <p class="overflowClip_2">互联网行业深度阅读与学习平台</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.chanpin100.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.chanpin100.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/chanpin100.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>产品壹佰</strong>
                </a>
                <p class="overflowClip_2">为产品经理爱好者提供最优质的产品资讯、原创内容和相关视频课程</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.pmcaff.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://www.pmcaff.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/pmcaff.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>PMCAFF</strong>
                </a>
                <p class="overflowClip_2">中国第一产品经理人气组织，专注于研究互联网产品</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.iyunying.org/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://www.iyunying.org/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/iyunying.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>爱运营</strong>
                </a>
                <p class="overflowClip_2">网站运营人员学习交流，专注于网站产品运营管理、淘宝运营。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.niaogebiji.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.niaogebiji.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/niaogebiji.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>鸟哥笔记</strong>
                </a>
                <p class="overflowClip_2">移动互联网第一干货平台</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.gtn9.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://www.gtn9.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/gtn9.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>古田路9号</strong>
                </a>
                <p class="overflowClip_2">国内专业品牌创意平台</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.uigreat.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://www.uigreat.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/uigreat.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>优阁网</strong>
                </a>
                <p class="overflowClip_2">UI设计师学习交流社区</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 社区资讯 -->
      <!-- 发现产品 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="发现产品"></i>发现产品</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.producthunt.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.producthunt.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/producthunt.png" class="lozad img-circle"
                  width="40">
              </a>
              <span class="label label-info" data-toggle="tooltip" data-placement="left" title=""
                data-original-title="Hello I am a Tooltip"></span>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Producthunt</strong>
                </a>
                <p class="overflowClip_2">发现新鲜有趣的产品</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://next.36kr.com/posts', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://next.36kr.com/posts">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/NEXT.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>NEXT</strong>
                </a>
                <p class="overflowClip_2">不错过任何一个新产品</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://sspai.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://sspai.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/sspai.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>少数派</strong>
                </a>
                <p class="overflowClip_2">高品质数字消费指南</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('http://liqi.io/', '_blank')"
            data-toggle="tooltip" data-placement="bottom" title="" data-original-title="http://liqi.io/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/liqi.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>利器</strong>
                </a>
                <p class="overflowClip_2">创造者和他们的工具</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://today.itjuzi.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://today.itjuzi.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/today.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Today</strong>
                </a>
                <p class="overflowClip_2">为身边的新产品喝彩</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://faxian.appinn.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://faxian.appinn.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/appinn.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>小众软件</strong>
                </a>
                <p class="overflowClip_2">在这里发现更多有趣的应用</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 发现产品 -->
      <!-- 界面灵感 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="界面灵感"></i>界面灵感</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.pttrns.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://www.pttrns.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/Pttrns.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Pttrns</strong>
                </a>
                <p class="overflowClip_2">Check out the finest collection of design patterns, resources, mobile apps
                  and inspiration</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://collectui.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://collectui.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/CollectUI.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Collect UI</strong>
                </a>
                <p class="overflowClip_2">Daily inspiration collected from daily ui archive and beyond.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://ui.uigreat.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://ui.uigreat.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/uiuigreat.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>UI uigreat</strong>
                </a>
                <p class="overflowClip_2">APP界面截图参考</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://androidniceties.tumblr.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://androidniceties.tumblr.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/AndroidNiceties.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Android Niceties</strong>
                </a>
                <p class="overflowClip_2">A collection of screenshots encompassing some of the most beautiful looking
                  Android apps.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END 界面灵感 -->
      <br />
      <!-- 网页灵感 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="网页灵感"></i>网页灵感</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.awwwards.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.awwwards.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/awwwards.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Awwwards</strong>
                </a>
                <p class="overflowClip_2">Awwwards are the Website Awards that recognize and promote the talent and
                  effort of the best developers, designers and web agencies in the world.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.cssdesignawards.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.cssdesignawards.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/CSSDesignAwards.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>CSS Design Awards</strong>
                </a>
                <p class="overflowClip_2">Website Awards & Inspiration - CSS Gallery</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://thefwa.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://thefwa.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/fwa.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>The FWA</strong>
                </a>
                <p class="overflowClip_2">FWA - showcasing innovation every day since 2000</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.ecommercefolio.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.ecommercefolio.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/Ecommercefolio.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Ecommercefolio</strong>
                </a>
                <p class="overflowClip_2">Only the Best Ecommerce Design Inspiration</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.lapa.ninja/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.lapa.ninja/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/Lapa.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Lapa</strong>
                </a>
                <p class="overflowClip_2">The best landing page design inspiration from around the web.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://reeoo.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://reeoo.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/reeoo.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Reeoo</strong>
                </a>
                <p class="overflowClip_2">web design inspiration and website gallery</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://designmunk.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://designmunk.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/designmunk.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Designmunk</strong>
                </a>
                <p class="overflowClip_2">Best Homepage Design Inspiration</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://bestwebsite.gallery/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://bestwebsite.gallery/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/BWG.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Best Websites Gallery</strong>
                </a>
                <p class="overflowClip_2">Website Showcase Inspiration | Best Websites Gallery</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.pages.xyz/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://www.pages.xyz/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/pages.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Pages</strong>
                </a>
                <p class="overflowClip_2">Curated directory of the best Pages</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://sitesee.co/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://sitesee.co/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/SiteSee.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>SiteSee</strong>
                </a>
                <p class="overflowClip_2">SiteSee is a curated gallery of beautiful, modern websites collections.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.siteinspire.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.siteinspire.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/siteInspire.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Site Inspire</strong>
                </a>
                <p class="overflowClip_2">A CSS gallery and showcase of the best web design inspiration.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://web.uedna.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://web.uedna.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/WebInspiration.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>WebInspiration</strong>
                </a>
                <p class="overflowClip_2">网页设计欣赏,全球顶级网页设计</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://navnav.co/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://navnav.co/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/navnav.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>navnav</strong>
                </a>
                <p class="overflowClip_2">A ton of CSS, jQuery, and JavaScript responsive navigation examples, demos,
                  and tutorials from all over the web.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.reallygoodux.io/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.reallygoodux.io/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/ReallyGoodUX.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Really Good UX</strong>
                </a>
                <p class="overflowClip_2">A library of screenshots and examples of really good UX. Brought to you by
                  <Appcues class=""></Appcues>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 网页灵感 -->
      <!-- 图标素材 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="图标素材"></i>图标素材</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.iconfinder.com', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.iconfinder.com">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/Iconfinder.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Iconfinder</strong>
                </a>
                <p class="overflowClip_2">2,100,000+ free and premium vector icons.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.iconfont.cn/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.iconfont.cn/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/iconfont.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>iconfont</strong>
                </a>
                <p class="overflowClip_2">阿里巴巴矢量图标库</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://iconmonstr.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://iconmonstr.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/iconmonstr.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>iconmonstr</strong>
                </a>
                <p class="overflowClip_2">Free simple icons for your next project</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.iconarchive.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.iconarchive.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/iconarchive.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Icon Archive</strong>
                </a>
                <p class="overflowClip_2">Search 590,912 free icons</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://findicons.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://findicons.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/FindIcons.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>FindIcons</strong>
                </a>
                <p class="overflowClip_2">Search through 300,000 free icons</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://icomoon.io/app/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://icomoon.io/app/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/IcoMoonApp.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>IcoMoonApp</strong>
                </a>
                <p class="overflowClip_2">Icon Font, SVG, PDF &amp; PNG Generator</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.easyicon.net/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.easyicon.net/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/easyicon.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>easyicon</strong>
                </a>
                <p class="overflowClip_2">PNG、ICO、ICNS格式图标搜索、图标下载服务</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.flaticon.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.flaticon.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/flaticon.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>flaticon</strong>
                </a>
                <p class="overflowClip_2">634,000+ Free vector icons in SVG, PSD, PNG, EPS format or as ICON FONT.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://ui-cloud.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://ui-cloud.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/UICloud.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>UICloud</strong>
                </a>
                <p class="overflowClip_2">The largest user interface design database in the world.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://material.io/icons/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://material.io/icons/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/Materialicons.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Material icons</strong>
                </a>
                <p class="overflowClip_2">Access over 900 material system icons, available in a variety of sizes and
                  densities, and as a web font.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('fontawesomeicon', '_blank')"
            data-toggle="tooltip" data-placement="bottom" title="" data-original-title="fontawesomeicon">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/fontawesomeicon.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Font Awesome Icon</strong>
                </a>
                <p class="overflowClip_2">The complete set of 675 icons in Font Awesome</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://ionicons.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://ionicons.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/ionicons.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>ion icons</strong>
                </a>
                <p class="overflowClip_2">The premium icon font for Ionic Framework.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://simplelineicons.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://simplelineicons.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/simplelineicons.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Simpleline Icons</strong>
                </a>
                <p class="overflowClip_2">Simple line Icons pack</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 图标素材 -->
      <!-- LOGO设计 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="LOGO设计"></i>LOGO设计</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.iconsfeed.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.iconsfeed.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/iconsfeed.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Iconsfeed</strong>
                </a>
                <p class="overflowClip_2">iOS icons gallery</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://iosicongallery.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://iosicongallery.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/iosicongallery.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>iOS Icon Gallery</strong>
                </a>
                <p class="overflowClip_2">Showcasing beautiful icon designs from the iOS App Store</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://worldvectorlogo.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://worldvectorlogo.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/worldvectorlogo.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>World Vector Logo</strong>
                </a>
                <p class="overflowClip_2">Brand logos free to download</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://instantlogosearch.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://instantlogosearch.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/InstantLogoSearch.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Instant Logo Search</strong>
                </a>
                <p class="overflowClip_2">Search & download thousands of logos instantly</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END LOGO设计 -->
      <!-- 平面素材 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="平面素材"></i>平面素材</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.gulusucai.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.gulusucai.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/gulusucai.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>咕噜素材</strong>
                </a>
                <p class="overflowClip_2">质量很高的设计素材网站（良心推荐）</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://wallhalla.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://wallhalla.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/wallhalla.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>wallhalla</strong>
                </a>
                <p class="overflowClip_2">Find awesome high quality wallpapers for desktop and mobile in one place.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://365psd.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://365psd.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/365PSD.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>365PSD</strong>
                </a>
                <p class="overflowClip_2">Free PSD &amp; Graphics, Illustrations</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://medialoot.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://medialoot.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/Medialoot.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Medialoot</strong>
                </a>
                <p class="overflowClip_2">Free &amp; Premium Design Resources &mdash; Medialoot</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.58pic.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://www.58pic.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/qiantu.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>千图网</strong>
                </a>
                <p class="overflowClip_2">专注免费设计素材下载的网站</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://588ku.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://588ku.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/qianku.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>千库网</strong>
                </a>
                <p class="overflowClip_2">免费png图片背景素材下载</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.ooopic.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.ooopic.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/wotu.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>我图网</strong>
                </a>
                <p class="overflowClip_2">我图网,提供图片素材及模板下载,专注正版设计作品交易</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://90sheji.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://90sheji.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/90sheji.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>90设计</strong>
                </a>
                <p class="overflowClip_2">电商设计（淘宝美工）千图免费淘宝素材库</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.nipic.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://www.nipic.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/nipic.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>昵图网</strong>
                </a>
                <p class="overflowClip_2">原创素材共享平台</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.lanrentuku.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.lanrentuku.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/lanrentuku.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>懒人图库</strong>
                </a>
                <p class="overflowClip_2">懒人图库专注于提供网页素材下载</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://so.ui001.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://so.ui001.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/sousucai.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>素材搜索</strong>
                </a>
                <p class="overflowClip_2">设计素材搜索聚合</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://psefan.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://psefan.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/psefan.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>PS饭团网</strong>
                </a>
                <p class="overflowClip_2">不一样的设计素材库！让自己的设计与众不同！</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.sccnn.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://www.sccnn.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/sccnn.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>素材中国</strong>
                </a>
                <p class="overflowClip_2">免费素材共享平台</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.freepik.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.freepik.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/freepik.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>freepik</strong>
                </a>
                <p class="overflowClip_2">More than a million free vectors, PSD, photos and free icons.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 素材图库 -->
      <!-- UI资源 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="UI资源"></i>UI资源</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.gulusucai.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.gulusucai.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/gulusucai.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>咕噜素材</strong>
                </a>
                <p class="overflowClip_2">质量很高的设计素材网站（良心推荐）</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://freebiesbug.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://freebiesbug.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/freebiesbug.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Freebiesbug</strong>
                </a>
                <p class="overflowClip_2">Hand-picked resources for web designer and developers, constantly updated.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://freebiesupply.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://freebiesupply.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/freebiesupply.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Freebie Supply</strong>
                </a>
                <p class="overflowClip_2">Free Resources For Designers</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.yrucd.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.yrucd.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/yrucd.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>云瑞</strong>
                </a>
                <p class="overflowClip_2">优秀设计资源的分享网站</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://xituqu.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://xituqu.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/xituqu.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>稀土区</strong>
                </a>
                <p class="overflowClip_2">优质设计开发资源分享</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://ui8.net/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://ui8.net/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/ui8.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>ui8</strong>
                </a>
                <p class="overflowClip_2">UI Kits, Wireframe Kits, Templates, Icons and More</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.uplabs.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.uplabs.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/uplabs.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>uplabs</strong>
                </a>
                <p class="overflowClip_2">Daily resources for product designers & developers</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.uikit.me/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://www.uikit.me/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/uikitme.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>UIkit.me</strong>
                </a>
                <p class="overflowClip_2">最便捷新鲜的uikit资源下载网站</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.fribbble.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.fribbble.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/Fribbble.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Fribbble</strong>
                </a>
                <p class="overflowClip_2">Free PSD files and other free design resources by Dribbblers.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://principlerepo.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://principlerepo.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/PrincipleRepo.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>PrincipleRepo</strong>
                </a>
                <p class="overflowClip_2">Free, High Quality Principle Resources</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://designmodo.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://designmodo.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/Designmodo.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Designmodo</strong>
                </a>
                <p class="overflowClip_2">Web Design Blog and Shop</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END UI资源 -->
      <!-- Sketch资源 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="Sketch资源"></i>Sketch资源</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://sketchapp.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://sketchapp.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/Sketch.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Sketch</strong>
                </a>
                <p class="overflowClip_2">The digital design toolkit</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://utom.design/measure/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://utom.design/measure/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/SketchMeasure.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Sketch Measure</strong>
                </a>
                <p class="overflowClip_2">Friendly user interface offers you a more intuitive way of making marks.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.sketchappsources.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.sketchappsources.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/sketchappsources.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Sketch App Sources</strong>
                </a>
                <p class="overflowClip_2">Free design resources and plugins - Icons, UI Kits, Wireframes, iOS, Android
                  Templates for Sketch</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.sketch.im/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://www.sketch.im/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/sketchIm.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Sketch.im</strong>
                </a>
                <p class="overflowClip_2">Sketch 相关资源汇聚</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://sketchhunt.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://sketchhunt.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/sketchhunt.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Sketch Hunt</strong>
                </a>
                <p class="overflowClip_2">Sketch Hunt is an independent blog sharing gems in learning, plugins &amp;
                  design tools for fans of Sketch app.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.sketchcn.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.sketchcn.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/sketchcn.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Sketch中文网</strong>
                </a>
                <p class="overflowClip_2">分享最新的Sketch中文手册</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://awesome-sket.ch/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://awesome-sket.ch/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/AwesomeSketchPlugins.png"
                  class="lozad img-circle" width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Awesome Sketch Plugins</strong>
                </a>
                <p class="overflowClip_2">A collection of really useful Sketch plugins.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.sketchcasts.net/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.sketchcasts.net/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/sketchcasts.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Sketchcasts</strong>
                </a>
                <p class="overflowClip_2">Learn Sketch Train your design skills with a weekly video tutorial</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END Sketch资源 -->
      <!-- 字体资源 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="字体资源"></i>字体资源</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.ziticangku.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.ziticangku.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/ziticangku.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>字体仓库</strong>
                </a>
                <p class="overflowClip_2">最全的免费商用字体库</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://fonts.google.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://fonts.google.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/googlefont.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Google Font</strong>
                </a>
                <p class="overflowClip_2">Making the web more beautiful, fast, and open through great typography</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://typekit.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://typekit.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/typekit.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Typekit</strong>
                </a>
                <p class="overflowClip_2">Quality fonts from the world’s best foundries.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.foundertype.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.foundertype.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/Fondertype.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>方正字库</strong>
                </a>
                <p class="overflowClip_2">方正字库官方网站</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://ziticq.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://ziticq.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/ziticq.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>字体传奇网</strong>
                </a>
                <p class="overflowClip_2">中国首个字体品牌设计师交流网</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.fontsquirrel.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.fontsquirrel.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/fontsquirrel.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Fontsquirrel</strong>
                </a>
                <p class="overflowClip_2">FREE fonts for graphic designers</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.urbanfonts.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.urbanfonts.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/UrbanFonts.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Urban Fonts</strong>
                </a>
                <p class="overflowClip_2">Download Free Fonts and Free Dingbats.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.losttype.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.losttype.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/losttype.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Lost Type</strong>
                </a>
                <p class="overflowClip_2">Lost Type is a Collaborative Digital Type Foundry</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://fonts2u.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://fonts2u.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/fonts2u.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>FONTS2U</strong>
                </a>
                <p class="overflowClip_2">Download free fonts for Windows and Macintosh.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.fontex.org/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.fontex.org/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/fontex.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Fontex</strong>
                </a>
                <p class="overflowClip_2">Free Fonts to Download + Premium Typefaces</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://fontm.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://fontm.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/FontM.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>FontM</strong>
                </a>
                <p class="overflowClip_2">Free Fonts</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.myfonts.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.myfonts.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/MyFonts.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>My Fonts</strong>
                </a>
                <p class="overflowClip_2">Fonts for Print, Products & Screens</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.dafont.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.dafont.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/dafont.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Da Font</strong>
                </a>
                <p class="overflowClip_2">Archive of freely downloadable fonts.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.onlinewebfonts.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.onlinewebfonts.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/OnlineWebFonts.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>OnlineWebFonts</strong>
                </a>
                <p class="overflowClip_2">WEB Free Fonts for Windows and Mac / Font free Download</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.abstractfonts.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.abstractfonts.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/abstractfonts.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Abstract Fonts</strong>
                </a>
                <p class="overflowClip_2">Abstract Fonts (13,866 free fonts)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 字体资源 -->
      <!-- Mockup -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="Mockup"></i>Mockup</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://mockup.zone/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://mockup.zone/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/MockupZone.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>MockupZone</strong>
                </a>
                <p class="overflowClip_2">Mockup Zone is an online store where you can find free and premium PSD
                  mockup files to show your designs in a professional way.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://dunnnk.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://dunnnk.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/Dunnnk.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Dunnnk</strong>
                </a>
                <p class="overflowClip_2"> Generate Product Mockups For Free</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.graphberry.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.graphberry.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/graphberry.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Graphberry</strong>
                </a>
                <p class="overflowClip_2">Free design resources, Mockups, PSD web templates, Icons</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://threed.io/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://threed.io/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/threed.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Threed</strong>
                </a>
                <p class="overflowClip_2">Generate 3D Mockups right in your Browser</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://free.lstore.graphics/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://free.lstore.graphics/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/mockupworld.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Mockup World</strong>
                </a>
                <p class="overflowClip_2">The best free Mockups from the Web</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://free.lstore.graphics/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://free.lstore.graphics/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/lstore.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Lstore</strong>
                </a>
                <p class="overflowClip_2">Exclusive mindblowing freebies for designers and developers</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.pixeden.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.pixeden.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/pixeden.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>pixeden</strong>
                </a>
                <p class="overflowClip_2">free web resources and graphic design templates.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://forgraphictm.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://forgraphictm.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/forgraphictm.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>For Graphic TM</strong>
                </a>
                <p class="overflowClip_2">High Quality PSD Mockups for Graphic Designers.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END Mockup -->
      <!-- 摄影图库 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="摄影图库"></i>摄影图库</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://unsplash.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://unsplash.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/unsplash.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Unsplash</strong>
                </a>
                <p class="overflowClip_2">Beautiful, free photos.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://visualhunt.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://visualhunt.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/visualhunt.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>visualhunt</strong>
                </a>
                <p class="overflowClip_2">100% Free High Quality Photos</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://librestock.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://librestock.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/librestock.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>librestock</strong>
                </a>
                <p class="overflowClip_2">65,084 high quality do-what-ever-you-want stock photos</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://pixabay.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://pixabay.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/pixabay.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>pixabay</strong>
                </a>
                <p class="overflowClip_2">可在任何地方使用的免费图片和视频</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.splitshire.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.splitshire.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/SplitShire.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>SplitShire</strong>
                </a>
                <p class="overflowClip_2">Free Stock Photos and Videos for commercial use.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://stocksnap.io/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://stocksnap.io/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/StockSnap.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>StockSnap</strong>
                </a>
                <p class="overflowClip_2">Beautiful free stock photos</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://albumarium.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://albumarium.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/albumarium.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>albumarium</strong>
                </a>
                <p class="overflowClip_2">The best place to find & share beautiful images</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://myphotopack.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://myphotopack.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/myphotopack.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>myphotopack</strong>
                </a>
                <p class="overflowClip_2">A free photo pack just for you. Every month.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://notaselfie.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://notaselfie.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/notaselfie.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Notaselfie</strong>
                </a>
                <p class="overflowClip_2">Photos that happen along the way. You can use the images anyway you like.
                  Have fun!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://papers.co/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://papers.co/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/papers.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>papers</strong>
                </a>
                <p class="overflowClip_2">Wallpapers Every Hour!Hand collected :)</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://stokpic.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://stokpic.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/stokpic.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>stokpic</strong>
                </a>
                <p class="overflowClip_2">Free Stock Photos For Commercial Use</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://55mm.co/visuals', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://55mm.co/visuals">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/55mm.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>55mm</strong>
                </a>
                <p class="overflowClip_2">Use our FREE photos to tell your story! </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://thestocks.im/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://thestocks.im/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/thestocks.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>thestocks</strong>
                </a>
                <p class="overflowClip_2">Use our FREE photos to tell your story! </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://freenaturestock.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://freenaturestock.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/freenaturestock.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>freenaturestock</strong>
                </a>
                <p class="overflowClip_2">Exclusive mindblowing freebies for designers and developers</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://negativespace.co/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://negativespace.co/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/negativespace.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>negativespace</strong>
                </a>
                <p class="overflowClip_2">Beautiful, High-Resolution Free Stock Photos</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://gratisography.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://gratisography.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/gratisography.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>gratisography</strong>
                </a>
                <p class="overflowClip_2">Free high-resolution pictures you can use on your personal and commercial
                  projects, free of copyright restrictions. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://imcreator.com/free', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://imcreator.com/free">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/imcreator.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>imcreator</strong>
                </a>
                <p class="overflowClip_2">A curated collection of free web design resources, all for commercial use.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.lifeofpix.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.lifeofpix.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/lifeofpix.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>lifeofpix</strong>
                </a>
                <p class="overflowClip_2">Free high resolution photography</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://skitterphoto.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://skitterphoto.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/skitterphoto.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>skitterphoto</strong>
                </a>
                <p class="overflowClip_2">Free Stock Photos for Creative Professionals</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://mmtstock.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://mmtstock.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/mmtstock.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>mmtstock</strong>
                </a>
                <p class="overflowClip_2">Free photos for commercial use</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://skitterphoto.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://skitterphoto.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/skitterphoto.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>skitterphoto</strong>
                </a>
                <p class="overflowClip_2">a place to find, show and share public domain photos</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://magdeleine.co/browse/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://magdeleine.co/browse/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/magdeleine.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>magdeleine</strong>
                </a>
                <p class="overflowClip_2">HAND-PICKED FREE PHOTOS FOR YOUR INSPIRATION</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://jeshoots.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://jeshoots.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/jeshoots.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>jeshoots</strong>
                </a>
                <p class="overflowClip_2">New Free Photos & Mockups in to your Inbox!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.hdwallpapers.net', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.hdwallpapers.net">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/hdwallpapers.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>hdwallpapers</strong>
                </a>
                <p class="overflowClip_2">High Definition Wallpapers & Desktop Backgrounds</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://publicdomainarchive.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://publicdomainarchive.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/publicdomainarchive.png"
                  class="lozad img-circle" width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>publicdomainarchive</strong>
                </a>
                <p class="overflowClip_2">New 100% Free Stock Photos. Every. Single. Week.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 摄影图库 -->
      <!-- PPT资源 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="PPT资源"></i>PPT资源</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.officeplus.cn/Template/Home.shtml', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title=""
            data-original-title="http://www.officeplus.cn/Template/Home.shtml">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/officeplus.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>OfficePLUS</strong>
                </a>
                <p class="overflowClip_2">OfficePLUS，微软Office官方在线模板网站！</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.ypppt.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://www.ypppt.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/ypppt.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>优品PPT</strong>
                </a>
                <p class="overflowClip_2">高质量的模版，而且还有PPT图表，PPT背景图等资源</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.pptplus.cn/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.pptplus.cn/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/pptplus.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>PPT+</strong>
                </a>
                <p class="overflowClip_2">PPT加直播、录制和分享—PPT+语音内容分享平台</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.pptmind.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.pptmind.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/pptmind.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>PPTMind</strong>
                </a>
                <p class="overflowClip_2">分享高端ppt模板与keynote模板的数字作品交易平台</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.tretars.com/ppt-templates', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.tretars.com/ppt-templates">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/tretars.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>tretars</strong>
                </a>
                <p class="overflowClip_2">The best free Mockups from the Web</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://ppt.500d.me/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://ppt.500d.me/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/500d.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>5百丁</strong>
                </a>
                <p class="overflowClip_2">中国领先的PPT模板共享平台</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END PPT资源 -->
      <!-- 图形创意 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="图形创意"></i>图形创意</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.adobe.com/cn/products/photoshop.html', '_blank')"
            data-toggle="tooltip" data-placement="bottom" title=""
            data-original-title="https://www.adobe.com/cn/products/photoshop.html">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/photoshop.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>photoshop</strong>
                </a>
                <p class="overflowClip_2">Photoshop不需要解释</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://affinity.serif.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://affinity.serif.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/AffinityDesigner.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Affinity Designer</strong>
                </a>
                <p class="overflowClip_2">专业创意软件</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.adobe.com/cn/products/illustrator/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title=""
            data-original-title="https://www.adobe.com/cn/products/illustrator/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/Illustrator.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Illustrator</strong>
                </a>
                <p class="overflowClip_2">矢量图形和插图。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.adobe.com/cn/products/indesign.html', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title=""
            data-original-title="http://www.adobe.com/cn/products/indesign.html">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/INDESIGN .png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>indesign</strong>
                </a>
                <p class="overflowClip_2">页面设计、布局和出版。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.maxon.net/en/products/cinema-4d/overview/', '_blank')"
            data-toggle="tooltip" data-placement="bottom" title=""
            data-original-title="https://www.maxon.net/en/products/cinema-4d/overview/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/cinema4d.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>cinema-4d</strong>
                </a>
                <p class="overflowClip_2">Cinema 4D is the perfect package for all 3D artists who want to achieve
                  breathtaking results fast and hassle-free.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.autodesk.com/products/3ds-max/overview', '_blank')"
            data-toggle="tooltip" data-placement="bottom" title=""
            data-original-title="https://www.autodesk.com/products/3ds-max/overview">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/3dsmax.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>3ds-max</strong>
                </a>
                <p class="overflowClip_2">3D modeling, animation, and rendering software</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.blender.org/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.blender.org/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/blender.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Blender</strong>
                </a>
                <p class="overflowClip_2">Blender is the free and open source 3D creation suite.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 图形创意 -->
      <!-- 界面设计 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="界面设计"></i>界面设计</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://sketchapp.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://sketchapp.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/sketchapp.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Sketch</strong>
                </a>
                <p class="overflowClip_2">The digital design toolkit</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.adobe.com/products/xd.html', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.adobe.com/products/xd.html">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/ADOBEXDCC.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Adobe XD</strong>
                </a>
                <p class="overflowClip_2">Introducing Adobe XD. Design. Prototype. Experience.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.invisionapp.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.invisionapp.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/invisionapp.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>invisionapp</strong>
                </a>
                <p class="overflowClip_2">Powerful design prototyping tools</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://marvelapp.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://marvelapp.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/marvelapp.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>marvelapp</strong>
                </a>
                <p class="overflowClip_2">Simple design, prototyping and collaboration</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://creative.adobe.com/zh-cn/products/download/muse', '_blank')"
            data-toggle="tooltip" data-placement="bottom" title=""
            data-original-title="https://creative.adobe.com/zh-cn/products/download/muse">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/MuseCC.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Muse CC</strong>
                </a>
                <p class="overflowClip_2">无需利用编码即可进行网站设计。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.figma.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.figma.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/figma.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>figma</strong>
                </a>
                <p class="overflowClip_2">Design, prototype, and gather feedback all in one place with Figma.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 界面设计 -->
      <!-- 交互动效 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="交互动效"></i>交互动效</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.adobe.com/cn/products/aftereffects/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title=""
            data-original-title="https://www.adobe.com/cn/products/aftereffects/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/AdobeAfterEffectsCC.png"
                  class="lozad img-circle" width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Adobe After Effects CC</strong>
                </a>
                <p class="overflowClip_2">电影般的视觉效果和动态图形。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://principleformac.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://principleformac.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/principle.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>principle</strong>
                </a>
                <p class="overflowClip_2">Animate Your Ideas, Design Better Apps</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.flinto.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.flinto.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/flinto.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>flinto</strong>
                </a>
                <p class="overflowClip_2">Flinto is a Mac app used by top designers around the world to create
                  interactive and animated prototypes of their app designs.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://framer.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://framer.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/framer.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>framer</strong>
                </a>
                <p class="overflowClip_2">Design everything from detailed icons to high-fidelity interactions—all in
                  one place.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.protopie.cn/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.protopie.cn/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/protopie.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>ProtoPie</strong>
                </a>
                <p class="overflowClip_2">高保真交互原型设计</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 交互动效 -->
      <!-- 在线配色 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="在线配色"></i>在线配色</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://khroma.co/generator/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://khroma.co/generator/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/khroma.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>khroma</strong>
                </a>
                <p class="overflowClip_2">Khroma is the fastest way to discover, search, and save color combos you'll
                  want to use.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://uigradients.com', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://uigradients.com">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/uigradients.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>uigradients</strong>
                </a>
                <p class="overflowClip_2">Beautiful colored gradients</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://gradients.io/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://gradients.io/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/gradients.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>gradients</strong>
                </a>
                <p class="overflowClip_2">Curated gradients for designers and developers</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://webkul.github.io/coolhue/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://webkul.github.io/coolhue/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/Coolest.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Coolest</strong>
                </a>
                <p class="overflowClip_2">Coolest handpicked Gradient Hues for your next super ⚡ amazing stuff</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://webgradients.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://webgradients.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/webgradients.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>webgradients</strong>
                </a>
                <p class="overflowClip_2">WebGradients is a free collection of 180 linear gradients that you can use
                  as content backdrops in any part of your website. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.grabient.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.grabient.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/grabient.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>grabient</strong>
                </a>
                <p class="overflowClip_2">2017 Grabient by unfold</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.thedayscolor.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.thedayscolor.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/thedayscolor.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>thedayscolor</strong>
                </a>
                <p class="overflowClip_2">The daily color digest</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://flatuicolors.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://flatuicolors.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/flatuicolors.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>flatuicolors</strong>
                </a>
                <p class="overflowClip_2">Copy Paste Color Pallette from Flat UI Theme</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://coolors.co/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://coolors.co/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/coolors.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>coolors</strong>
                </a>
                <p class="overflowClip_2">The super fast color schemes generator!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.colorhunt.co/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.colorhunt.co/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/colorhunt.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>colorhunt</strong>
                </a>
                <p class="overflowClip_2">Beautiful Color Palettes</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://color.adobe.com/zh/create/color-wheel', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title=""
            data-original-title="https://color.adobe.com/zh/create/color-wheel">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/AdobeColorCC.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Adobe Color CC</strong>
                </a>
                <p class="overflowClip_2">Create color schemes with the color wheel or browse thousands of color
                  combinations from the Color community.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.flatuicolorpicker.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.flatuicolorpicker.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/flatuicolorpicker.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>flatuicolorpicker</strong>
                </a>
                <p class="overflowClip_2">Best Flat Colors For UI Design</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://qrohlf.com/trianglify-generator/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://qrohlf.com/trianglify-generator/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/trianglify.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>trianglify</strong>
                </a>
                <p class="overflowClip_2">Trianglify Generator</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://klart.co/colors/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://klart.co/colors/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/klart.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>klart</strong>
                </a>
                <p class="overflowClip_2">Beautiful colors and designs to your inbox every week</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.vanschneider.com/colors', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.vanschneider.com/colors">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/vanschneider.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>vanschneider</strong>
                </a>
                <p class="overflowClip_2">Color Claim was created in 2012 by Tobias van Schneider with the goal to
                  collect & combine unique colors for my future projects.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 在线配色 -->
      <!-- 在线工具 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="在线工具"></i>在线工具</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://tinypng.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://tinypng.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/tinypng.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>tinypng</strong>
                </a>
                <p class="overflowClip_2">Optimize your images with a perfect balance in quality and file size.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('http://goqr.me/', '_blank')"
            data-toggle="tooltip" data-placement="bottom" title="" data-original-title="http://goqr.me/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/goqr.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>goqr</strong>
                </a>
                <p class="overflowClip_2">create QR codes for free (Logo, T-Shirt, vCard, EPS)</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://ezgif.com', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://ezgif.com">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/ezgif.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>ezgif</strong>
                </a>
                <p class="overflowClip_2">simple online GIF maker and toolset for basic animated GIF editing.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://inloop.github.io/shadow4android/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://inloop.github.io/shadow4android/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/Android9patch.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Android 9 patch</strong>
                </a>
                <p class="overflowClip_2">Android 9-patch shadow generator fully customizable shadows</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://screensiz.es/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://screensiz.es/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/screensizes.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>screen sizes</strong>
                </a>
                <p class="overflowClip_2">Viewport Sizes and Pixel Densities for Popular Devices</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://jakearchibald.github.io/svgomg/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://jakearchibald.github.io/svgomg/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/svgomg.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>svgomg</strong>
                </a>
                <p class="overflowClip_2">SVG在线压缩平台</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.gaoding.com', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.gaoding.com">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/gaoding.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>稿定抠图</strong>
                </a>
                <p class="overflowClip_2">免费在线抠图软件,图片快速换背景-抠白底图</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 在线工具 -->
      <!-- Chrome插件 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="Chrome插件"></i>Chrome插件</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.wappalyzer.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.wappalyzer.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/wappalyzer.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>wappalyzer</strong>
                </a>
                <p class="overflowClip_2">Identify technology on websites</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://usepanda.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://usepanda.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/usepanda.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Panda</strong>
                </a>
                <p class="overflowClip_2">A smart news reader built for productivity.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://sizzy.co/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://sizzy.co/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/sizzy.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>sizzy</strong>
                </a>
                <p class="overflowClip_2">A tool for developing responsive websites crazy-fast</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://csspeeper.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://csspeeper.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/csspeeper.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>csspeeper</strong>
                </a>
                <p class="overflowClip_2">Smart CSS viewer tailored for Designers.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://insight.io/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://insight.io/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/insight.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>insight</strong>
                </a>
                <p class="overflowClip_2">IDE-like code search and navigation, on the cloud</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://mustsee.earth/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://mustsee.earth/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/mustsee.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>mustsee</strong>
                </a>
                <p class="overflowClip_2">Discover the world's most beautiful places at every opened tab.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END Chrome插件 -->
      <!-- 设计规范 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="设计规范"></i>设计规范</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://designguidelines.co/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://designguidelines.co/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/designguidelines.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Design Guidelines</strong>
                </a>
                <p class="overflowClip_2">Design Guidelines &mdash; The way products are built.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://github.com/alexpate/awesome-design-systems', '_blank')"
            data-toggle="tooltip" data-placement="bottom" title=""
            data-original-title="https://github.com/alexpate/awesome-design-systems">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/awesome_design_systems.png"
                  class="lozad img-circle" width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Awesome design systems</strong>
                </a>
                <p class="overflowClip_2"> A collection of awesome design systems</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://material.io/guidelines/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://material.io/guidelines/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/Material_Design.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Material Design</strong>
                </a>
                <p class="overflowClip_2">Introduction - Material Design</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://developer.apple.com/ios/human-interface-guidelines', '_blank')"
            data-toggle="tooltip" data-placement="bottom" title=""
            data-original-title="https://developer.apple.com/ios/human-interface-guidelines">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/human_interface_guidelines.png"
                  class="lozad img-circle" width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Human Interface Guidelines</strong>
                </a>
                <p class="overflowClip_2">Human Interface Guidelines iOS</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://viggoz.com/photoshopetiquette/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://viggoz.com/photoshopetiquette/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/photoshopetiquette.png"
                  class="lozad img-circle" width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Photoshop Etiquette</strong>
                </a>
                <p class="overflowClip_2">PS礼仪-WEB设计指南</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 设计规范 -->
      <!-- 视频教程 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="视频教程"></i>视频教程</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.photoshoplady.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.photoshoplady.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/PhotoshopLady.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Photoshop Lady</strong>
                </a>
                <p class="overflowClip_2">Your Favourite Photoshop Tutorials in One Place</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://doyoudo.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://doyoudo.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/doyoudo.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>doyoudo</strong>
                </a>
                <p class="overflowClip_2">创意设计软件学习平台</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.c945.com/web-ui-tutorial/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.c945.com/web-ui-tutorial/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/web_ui_tutorial.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>没位道</strong>
                </a>
                <p class="overflowClip_2">WEB UI免费视频公开课</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.imooc.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.imooc.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/imooc.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>慕课网</strong>
                </a>
                <p class="overflowClip_2">程序员的梦工厂（有UI课程）</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 视频教程 -->
      <!-- 设计文章 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="设计文章"></i>设计文章</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.uisdc.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://www.uisdc.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/uisdc.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>优设网</strong>
                </a>
                <p class="overflowClip_2">设计师交流学习平台</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://webdesignledger.com', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://webdesignledger.com">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/webdesignledger.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Web Design Ledger</strong>
                </a>
                <p class="overflowClip_2">Web Design Blog</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://medium.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://medium.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/medium.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Medium</strong>
                </a>
                <p class="overflowClip_2">Read, write and share stories that matter</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 设计文章 -->
      <!-- 设计电台 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="设计电台"></i>设计电台</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://uxcoffee.co/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://uxcoffee.co/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/uxcoffee.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>UX Coffee</strong>
                </a>
                <p class="overflowClip_2">《UX Coffee 设计咖》是一档关于用户体验的播客节目。我们邀请来自硅谷和国内的学者和职人来聊聊「产品设计」、「用户体验」和「个人成长」。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://anyway.fm/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://anyway.fm/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/anyway.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Anyway.FM</strong>
                </a>
                <p class="overflowClip_2">设计杂谈 • UI 设计师 JJ 和 Leon 主播的设计播客</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.yineng.fm', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://www.yineng.fm">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/yineng.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>异能电台</strong>
                </a>
                <p class="overflowClip_2">将全宇宙设计师的故事讲给你听。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 设计电台 -->
      <!-- 交互设计 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="交互设计"></i>交互设计</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://littlebigdetails.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://littlebigdetails.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/littlebigdetails.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Little Big Details</strong>
                </a>
                <p class="overflowClip_2">Little Big Details is a curated collection of the finer details of design,
                  updated every day. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.smashingmagazine.com/category/user-experience', '_blank')"
            data-toggle="tooltip" data-placement="bottom" title=""
            data-original-title="https://www.smashingmagazine.com/category/user-experience">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/smashingmagazine.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Smashing Magazine</strong>
                </a>
                <p class="overflowClip_2">Below you’ll find the best tips to take not only your UX design process but
                  also the experiences you craft to the next level.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.nngroup.com/articles/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.nngroup.com/articles/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/nngroup.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>nngroup</strong>
                </a>
                <p class="overflowClip_2">Evidence-Based User Experience Research, Training, and Consulting</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://boxesandarrows.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://boxesandarrows.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/boxesandarrows.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Boxes and Arrows</strong>
                </a>
                <p class="overflowClip_2">Boxes and Arrows is devoted to the practice, innovation, and discussion of
                  design; including graphic design, interaction design, information architecture and the design of
                  business. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://uxdesignweekly.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://uxdesignweekly.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/uxdesignweekly.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>UX Design Weekly</strong>
                </a>
                <p class="overflowClip_2"> get a hand picked list of the best user experience design links every week.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://uxren.cn/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://uxren.cn/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/uxren.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>UX Ren</strong>
                </a>
                <p class="overflowClip_2">用户体验人的专业社区</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://www.gulusucai.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://www.gulusucai.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/gulusucai.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>咕噜素材</strong>
                </a>
                <p class="overflowClip_2">质量很高的设计素材网站（良心推荐）</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END 交互设计 -->
      <!-- UED团队 -->
      <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="UED团队"></i>UED团队</h4>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://airbnb.design', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="https://airbnb.design">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/AirbnbDesign.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Airbnb Design</strong>
                </a>
                <p class="overflowClip_2">Airbnb Design</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://facebook.design/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://facebook.design/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/FacebookDesign.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Facebook Design</strong>
                </a>
                <p class="overflowClip_2">Facebook Design</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://design.google/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://design.google/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/GoogleDesign.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Google Design</strong>
                </a>
                <p class="overflowClip_2">Google Design</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://eicodesign.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://eicodesign.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/eico.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>eico design</strong>
                </a>
                <p class="overflowClip_2">数字化咨询与产品专家</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.niceui.cn/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://www.niceui.cn/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/niceui.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>nice design</strong>
                </a>
                <p class="overflowClip_2">nicedesign奈思设计是领先的用户体验设计与互联网品牌建设公司</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://cdc.tencent.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://cdc.tencent.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/cdc.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>腾讯CDC</strong>
                </a>
                <p class="overflowClip_2">腾讯CDC关注于互联网视觉设计、交互设计、用户研究、前端开发。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://tgideas.qq.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://tgideas.qq.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/tgideas.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>TGideas</strong>
                </a>
                <p class="overflowClip_2">TGideas隶属于腾讯公司互动娱乐业务系统的专业推广类设计团队</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('https://isux.tencent.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="https://isux.tencent.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/isux.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>ISUX</strong>
                </a>
                <p class="overflowClip_2">腾讯社交用户体验设计部</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://mxd.tencent.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://mxd.tencent.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/mxd.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>MXD</strong>
                </a>
                <p class="overflowClip_2">腾讯MIG无线互联网事业群设计团队</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.aliued.com/', '_blank')" data-toggle="tooltip"
            data-placement="bottom" title="" data-original-title="http://www.aliued.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/aliued.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>Aliued</strong>
                </a>
                <p class="overflowClip_2">阿里巴巴国际UED团队</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://www.aliued.cn/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://www.aliued.cn/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/aliuedcn.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>U一点</strong>
                </a>
                <p class="overflowClip_2">阿里巴巴（中国站）用户体验设计部博客U一点设计 UED团队</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://uedc.163.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://uedc.163.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/uedc.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>网易uedc</strong>
                </a>
                <p class="overflowClip_2">网易用户体验设计中心（User Experience Design Center）</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://ued.baidu.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://ued.baidu.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/uedbaidu.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>百度用户体验中心</strong>
                </a>
                <p class="overflowClip_2">百度用户体验中心</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://jdc.jd.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://jdc.jd.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/jdc.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>京东设计中心</strong>
                </a>
                <p class="overflowClip_2">京东设计中心</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://eux.baidu.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://eux.baidu.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/euxbaidu.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>百度企业产品用户体验中心</strong>
                </a>
                <p class="overflowClip_2">百度企业产品用户体验中心</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="xe-widget xe-conversations box2 label-info"
            onclick="window.open('http://ued.ctrip.com/', '_blank')" data-toggle="tooltip" data-placement="bottom"
            title="" data-original-title="http://ued.ctrip.com/">
            <div class="xe-comment-entry">
              <a class="xe-user-img">
                <img data-src="/modules/webstack/public/images/logos/ctrip.png" class="lozad img-circle"
                  width="40">
              </a>
              <div class="xe-comment">
                <a href="#" class="xe-user-name overflowClip_1">
                  <strong>携程设计委员会</strong>
                </a>
                <p class="overflowClip_2">携程设计委员会-Ctrip Design Committee</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <!--END UED团队 -->
      <!-- Main Footer -->
      <!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
      <!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
      <!-- Or class "fixed" to  always fix the footer to the end of page -->
      <footer class="main-footer sticky footer-type-1">
        <div class="footer-inner">
          <!-- Add your copyright text here -->
          <div class="footer-text">
            &copy; 2017-2022
            <a
              href="{{ $module_config['slug'] ? '' : '/' . $module_config['slug'] }}/about"><strong>WebStack</strong></a>
            design by <a href="https://www.viggoz.com" target="_blank"><strong>Viggo</strong></a>
            <!--  - Purchase for only <strong>23$</strong> -->
          </div>
          <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
          <div class="go-up">
            <a href="#" rel="go-top">
              <i class="fa-angle-up"></i>
            </a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- 锚点平滑移动 -->
  <script type="text/javascript">
    $(document).ready(function() {
      //img lazy loaded
      const observer = lozad();
      observer.observe();

      $(document).on('click', '.has-sub', function() {
        var _this = $(this)
        if (!$(this).hasClass('expanded')) {
          setTimeout(function() {
            _this.find('ul').attr("style", "")
          }, 300);

        } else {
          $('.has-sub ul').each(function(id, ele) {
            var _that = $(this)
            if (_this.find('ul')[0] != ele) {
              setTimeout(function() {
                _that.attr("style", "")
              }, 300);
            }
          })
        }
      })
      $('.user-info-menu .hidden-sm').click(function() {
        if ($('.sidebar-menu').hasClass('collapsed')) {
          $('.has-sub.expanded > ul').attr("style", "")
        } else {
          $('.has-sub.expanded > ul').show()
        }
      })
      $("#main-menu li ul li").click(function() {
        $(this).siblings('li').removeClass('active'); // 删除其他兄弟元素的样式
        $(this).addClass('active'); // 添加当前元素的样式
      });
      $("a.smooth").click(function(ev) {
        ev.preventDefault();

        public_vars.$mainMenu.add(public_vars.$sidebarProfile).toggleClass('mobile-is-visible');
        ps_destroy();
        $("html, body").animate({
          scrollTop: $($(this).attr("href")).offset().top - 30
        }, {
          duration: 500,
          easing: "swing"
        });
      });
      return false;
    });

    var href = "";
    var pos = 0;
    $("a.smooth").click(function(e) {
      $("#main-menu li").each(function() {
        $(this).removeClass("active");
      });
      $(this).parent("li").addClass("active");
      e.preventDefault();
      href = $(this).attr("href");
      pos = $(href).position().top - 30;
    });
  </script>
  <!-- Bottom Scripts -->
  <script src="/modules/webstack/public/js/bootstrap.min.js"></script>
  <script src="/modules/webstack/public/js/TweenMax.min.js"></script>
  <script src="/modules/webstack/public/js/resizeable.js"></script>
  <script src="/modules/webstack/public/js/joinable.js"></script>
  <script src="/modules/webstack/public/js/xenon-api.js"></script>
  <script src="/modules/webstack/public/js/xenon-toggles.js"></script>
  <!-- JavaScripts initializations and stuff -->
  <script src="/modules/webstack/public/js/xenon-custom.js"></script>
  <script src="/modules/webstack/public/js/lozad.js"></script>
</body>

</html>
