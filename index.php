<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>跳蚤市场</title>
    <link href="css/index.css" rel="stylesheet">
    <link href="http://at.alicdn.com/t/font_1524886_uvkjm364bi.css" rel="stylesheet">
    <link href="css/public.css" rel="stylesheet">
    <link href="css/swiper.min.css" rel="stylesheet">
    <script src="js/jquery-3.4.1.js"></script>
</head>

<body>


    <!-- 顶部 -->
    <header class="header">
        <!-- 中间 -->
        <div class="wrap">
            <!-- 左边 -->
            <ul class="header-left">
                <li class="header-left-nav">
                    <div class="header-tit">网站导航<span class="header-ico-sele">></span></div>
                    <div class="header-left-hid">
                        <ul>
                            <li><a href="shop.html">特色购物</a></li>
                            <li><a href="shop.html">主体频道</a></li>
                            <li><a href="shop.html">生活助手</a></li>
                            <li><a href="shop.html">会员服务</a></li>
                            <li><a href="shop.html">更多热点</a></li>
                        </ul>
                    </div>
                </li>
                <li class="header-left-nav">
                    <div class="header-tit">商家入驻<span class="header-ico-sele">></span></div>
                    <div class="header-left-hid">
                        <ul>
                            <li><a href="shop.html">合作招商</a></li>
                            <li><a href="shop.html">服务市场</a></li>
                            <li><a href="shop.html">金融中心</a></li>
                            <li><a href="shop.html">培训中心</a></li>
                            <li><a href="shop.html">规则中心</a></li>
                        </ul>
                    </div>
                </li>
                <li class="header-left-nav">
                    <div class="header-tit">客户服务<span class="header-ico-sele">></span></div>
                    <div class="header-left-hid">
                        <ul>
                            <li><a href="shop.html">帮助中心</a></li>
                            <li><a href="shop.html">查找门店</a></li>
                            <li><a href="shop.html">退换/维修</a></li>
                            <li><a href="shop.html">意见反馈</a></li>
                            <li><a href="shop.html">在线咨询</a></li>
                        </ul>
                    </div>
                </li>
                <li class="header-left-nav">
                    <div class="header-tit"><span class="loca iconfont icon-dizhitianchong-"></span><b id="header-loca-di">成都</b></div>
                    <div class="header-left-hid" id="header-locat">
                        <select id="province" onclick="provic()">
                            <!-- <option value="">-请选择省-</option> -->
                        </select>
                        <select id="city" onclick="cityclick()">
                            <option value="">-请选择市-</option>
                        </select>
                        <select id="district" onclick="dis()">
                            <option value="">-请选区-</option>
                        </select>
                    </div>

                </li>
            </ul>
            <!-- 右边 -->
            <ul class="header-right">
                <?php
                require_once ('./include/online.php');
                // 如果没有登陆
                if(!online()){
                    ?>

                <li class="header-right-tit">
                    <a href="login.html" id="header-user">请登录</a>
                </li>
                <li class="header-right-tit">
                    <a href="sigin.html">注册有礼</a>
                </li>
                <?php
                }else{
                    ?>
                <li class="header-right-tit">
                    <a href="shop.html">我的信息</a>
                </li>
                <li class="header-right-tit">
                    <a href="shop.html">我的发布</a>
                <?php
                }
                ?>

                </li>

            </ul>
        </div>
    </header>
    <div class="right">
        <ul class="wrap1">
            <li><a href="myinfo.html"><span class="iconfont icon-ren-copy"></span></a></li>
            <li><a href="cart.html"><span class="iconfont icon-gouwuche2"></span><span>购物车<b
                            class="numc">0</b></span></a></li>
            <li><a href="shop.html"><span class="iconfont icon-shouhou1"></span><span>售后服务</span></a></li>
        </ul>
    </div>

    <!-- logo 搜索 -->
    <section class="section1 wrap">
        <div class="logo">
            <a href="index.php"><img src="images/logo.png"></a>
        </div>
        <div class="search">
            <input class="search-input" autofocus=" autofocus" type="text" placeholder="请输入你想要搜索的内容" value=""><button
                id="search-sea">搜索</button>
            <ul class="search-result"></ul>
        </div>
    </section>


    <!-- 商品分类 -->
    <section class="section2">
        <div class="nav wrap">
            <a href="shop.html"><span class="nav-li iconfont icon-tubiao1-copy"></span>全部商品分类</a>
            <a href="shop.html">今日烟大</a>
            <a href="shop.html">拼车</a>
            <a href="shop.html">表白墙</a>
            <a href="shop.html">出票</a>
            <a href="shop.html">活动组团</a>
            <a href="shop.html">拼多多砍一刀</a>
        </div>
        <div class="section2-center">
            <div class="wrap navleft">
                <ul class="left">
                    <li class="left-sub">
                        <a href="shop.html"> 手机 |</a>
                        <a href="shop.html"> 运营商 |</a>
                        <a href="shop.html"> 智能数码 </a>
                        <ul class="left-sub-hid">
                            <div>
                                <li><a href="shop.html"> 手机频道</a></li>
                                <li><a href="shop.html"> 智能数码</a></li>
                                <li><a href="shop.html"> 以旧换新</a></li>
                                <li><a href="shop.html"> 网上营业厅</a></li>
                                <li><a href="shop.html"> 企业采购</a></li>
                                <li><a href="shop.html"> 跳蚤市场国际</a></li>
                                <li><a href="shop.html"> 二手优品</a></li>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机通讯</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【爆款手机￥11.11起】</a></li>
                                    <li><a href="shop.html"> 全部手机</a></li>
                                    <li><a href="shop.html"> 5G手机</a></li>
                                    <li><a href="shop.html"> iPhone</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                    <li><a href="shop.html"> 荣耀</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> realme</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 魅族</a></li>
                                    <li><a href="shop.html"> 诺基亚</a></li>
                                    <li><a href="shop.html"> 努比亚</a></li>
                                    <li><a href="shop.html"> 联想</a></li>
                                    <li><a href="shop.html"> 守护宝</a></li>
                                    <li><a href="shop.html"> 飞利浦</a></li>
                                    <li><a href="shop.html">正品好货</a></li>
                                    <li><a href="shop.html"> 以旧换新</a></li>
                                    <li><a href="shop.html"> 手机维修</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机配件</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【配件精选会场，全场9.9元起】</a></li>
                                    <li><a href="shop.html"> 手机壳</a></li>
                                    <li><a href="shop.html"> 手机耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙音箱</a></li>
                                    <li><a href="shop.html"> 手机贴膜</a></li>
                                    <li><a href="shop.html"> 手机存储卡</a></li>
                                    <li><a href="shop.html"> 数据线</a></li>
                                    <li><a href="shop.html"> 充电器</a></li>
                                    <li><a href="shop.html"> 无线充电器</a></li>
                                    <li><a href="shop.html"> 手机电池</a></li>
                                    <li><a href="shop.html"> 苹果周边</a></li>
                                    <li><a href="shop.html"> 移动电源</a></li>
                                    <li><a href="shop.html"> 自拍杆</a></li>
                                    <li><a href="shop.html"> 手机支架</a></li>
                                    <li><a href="shop.html"> 手机U盘</a></li>
                                    <li><a href="shop.html"> 车载配件</a></li>
                                    <li><a href="shop.html"> 手机饰品</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>智能设备</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【嗨爆双十一领券满999减100】</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 智能门锁</a></li>
                                    <li><a href="shop.html"> 平衡车</a></li>
                                    <li><a href="shop.html"> 无人机</a></li>
                                    <li><a href="shop.html"> 智能摄像头</a></li>
                                    <li><a href="shop.html"> 智能机器人</a></li>
                                    <li><a href="shop.html"> 智能手环</a></li>
                                    <li><a href="shop.html"> 智能手表</a></li>
                                    <li><a href="shop.html"> VR眼镜</a></li>
                                    <li><a href="shop.html"> 智能家居</a></li>
                                    <li><a href="shop.html"> 智能健康监测</a></li>
                                    <li><a href="shop.html"> 智能翻译机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>影音电子</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 音箱</a></li>
                                    <li><a href="shop.html"> 耳机/耳麦</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 运动耳机</a></li>
                                    <li><a href="shop.html"> MP3/MP4</a></li>
                                    <li><a href="shop.html"> 收音/收音机</a></li>
                                    <li><a href="shop.html"> 录音笔</a></li>
                                    <li><a href="shop.html"> 无线耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>电子教育</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 儿童手表</a></li>
                                    <li><a href="shop.html"> 学生电脑/学习机</a></li>
                                    <li><a href="shop.html"> 故事机</a></li>
                                    <li><a href="shop.html"> 翻译机</a></li>
                                    <li><a href="shop.html"> 步步高点读机</a></li>
                                    <li><a href="shop.html"> 小天才儿童手表</a></li>
                                    <li><a href="shop.html"> 点读机/笔</a></li>
                                    <li><a href="shop.html"> 电子书</a></li>
                                    <li><a href="shop.html"> 电子词典</a></li>
                                    <li><a href="shop.html"> 复读机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>二手优品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> iPhone 7</a></li>
                                    <li><a href="shop.html"> iPhone 8</a></li>
                                    <li><a href="shop.html"> iPhone X</a></li>
                                    <li><a href="shop.html"> iPhone 8P</a></li>
                                    <li><a href="shop.html"> iPhone 7P</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>跳蚤市场互联</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 尾号888靓号</a></li>
                                    <li><a href="shop.html"> 0月租号卡</a></li>
                                    <li><a href="shop.html"> 2元流量畅享</a></li>
                                    <li><a href="shop.html"> 20GB大流量</a></li>
                                    <li><a href="shop.html"> 超级靓号</a></li>
                                    <li><a href="shop.html"> 立即选号</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>营业厅</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【1元1GB腾讯APP免流】</a></li>
                                    <li><a href="shop.html"> 手机卡</a></li>
                                    <li><a href="shop.html"> 大流量卡</a></li>
                                    <li><a href="shop.html"> 宽带</a></li>
                                    <li><a href="shop.html"> 办套餐</a></li>
                                    <li><a href="shop.html"> 充话费/流量</a></li>
                                    <li><a href="shop.html"> 中国移动</a></li>
                                    <li><a href="shop.html"> 中国电信</a></li>
                                    <li><a href="shop.html"> 中国联通</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>数码服务产品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 数码综合服务馆：数码服务三十六计</a></li>
                                </ul>
                            </div>
                        </ul>
                    </li>
                    <li class="left-sub">
                        <a href="shop.html"> 空调 |</a>
                        <a href="shop.html"> 电视 |</a>
                        <a href="shop.html"> 冰箱 |</a>
                        <a href="shop.html"> 洗衣机</a>
                        <ul class="left-sub-hid">
                            <div>
                                <li><a href="shop.html"> 手机频道</a></li>
                                <li><a href="shop.html"> 智能数码</a></li>
                                <li><a href="shop.html"> 以旧换新</a></li>
                                <li><a href="shop.html"> 网上营业厅</a></li>
                                <li><a href="shop.html"> 企业采购</a></li>
                                <li><a href="shop.html"> 跳蚤市场国际</a></li>
                                <li><a href="shop.html"> 二手优品</a></li>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机通讯</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【爆款手机￥11.11起】</a></li>
                                    <li><a href="shop.html"> 全部手机</a></li>
                                    <li><a href="shop.html"> 5G手机</a></li>
                                    <li><a href="shop.html"> iPhone</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                    <li><a href="shop.html"> 荣耀</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> realme</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 魅族</a></li>
                                    <li><a href="shop.html"> 诺基亚</a></li>
                                    <li><a href="shop.html"> 努比亚</a></li>
                                    <li><a href="shop.html"> 联想</a></li>
                                    <li><a href="shop.html"> 守护宝</a></li>
                                    <li><a href="shop.html"> 飞利浦</a></li>
                                    <li><a href="shop.html">正品好货</a></li>
                                    <li><a href="shop.html"> 以旧换新</a></li>
                                    <li><a href="shop.html"> 手机维修</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机配件</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【配件精选会场，全场9.9元起】</a></li>
                                    <li><a href="shop.html"> 手机壳</a></li>
                                    <li><a href="shop.html"> 手机耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙音箱</a></li>
                                    <li><a href="shop.html"> 手机贴膜</a></li>
                                    <li><a href="shop.html"> 手机存储卡</a></li>
                                    <li><a href="shop.html"> 数据线</a></li>
                                    <li><a href="shop.html"> 充电器</a></li>
                                    <li><a href="shop.html"> 无线充电器</a></li>
                                    <li><a href="shop.html"> 手机电池</a></li>
                                    <li><a href="shop.html"> 苹果周边</a></li>
                                    <li><a href="shop.html"> 移动电源</a></li>
                                    <li><a href="shop.html"> 自拍杆</a></li>
                                    <li><a href="shop.html"> 手机支架</a></li>
                                    <li><a href="shop.html"> 手机U盘</a></li>
                                    <li><a href="shop.html"> 车载配件</a></li>
                                    <li><a href="shop.html"> 手机饰品</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>智能设备</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【嗨爆双十一领券满999减100】</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 智能门锁</a></li>
                                    <li><a href="shop.html"> 平衡车</a></li>
                                    <li><a href="shop.html"> 无人机</a></li>
                                    <li><a href="shop.html"> 智能摄像头</a></li>
                                    <li><a href="shop.html"> 智能机器人</a></li>
                                    <li><a href="shop.html"> 智能手环</a></li>
                                    <li><a href="shop.html"> 智能手表</a></li>
                                    <li><a href="shop.html"> VR眼镜</a></li>
                                    <li><a href="shop.html"> 智能家居</a></li>
                                    <li><a href="shop.html"> 智能健康监测</a></li>
                                    <li><a href="shop.html"> 智能翻译机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>影音电子</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 音箱</a></li>
                                    <li><a href="shop.html"> 耳机/耳麦</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 运动耳机</a></li>
                                    <li><a href="shop.html"> MP3/MP4</a></li>
                                    <li><a href="shop.html"> 收音/收音机</a></li>
                                    <li><a href="shop.html"> 录音笔</a></li>
                                    <li><a href="shop.html"> 无线耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>电子教育</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 儿童手表</a></li>
                                    <li><a href="shop.html"> 学生电脑/学习机</a></li>
                                    <li><a href="shop.html"> 故事机</a></li>
                                    <li><a href="shop.html"> 翻译机</a></li>
                                    <li><a href="shop.html"> 步步高点读机</a></li>
                                    <li><a href="shop.html"> 小天才儿童手表</a></li>
                                    <li><a href="shop.html"> 点读机/笔</a></li>
                                    <li><a href="shop.html"> 电子书</a></li>
                                    <li><a href="shop.html"> 电子词典</a></li>
                                    <li><a href="shop.html"> 复读机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>二手优品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> iPhone 7</a></li>
                                    <li><a href="shop.html"> iPhone 8</a></li>
                                    <li><a href="shop.html"> iPhone X</a></li>
                                    <li><a href="shop.html"> iPhone 8P</a></li>
                                    <li><a href="shop.html"> iPhone 7P</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>跳蚤市场互联</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 尾号888靓号</a></li>
                                    <li><a href="shop.html"> 0月租号卡</a></li>
                                    <li><a href="shop.html"> 2元流量畅享</a></li>
                                    <li><a href="shop.html"> 20GB大流量</a></li>
                                    <li><a href="shop.html"> 超级靓号</a></li>
                                    <li><a href="shop.html"> 立即选号</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>营业厅</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【1元1GB腾讯APP免流】</a></li>
                                    <li><a href="shop.html"> 手机卡</a></li>
                                    <li><a href="shop.html"> 大流量卡</a></li>
                                    <li><a href="shop.html"> 宽带</a></li>
                                    <li><a href="shop.html"> 办套餐</a></li>
                                    <li><a href="shop.html"> 充话费/流量</a></li>
                                    <li><a href="shop.html"> 中国移动</a></li>
                                    <li><a href="shop.html"> 中国电信</a></li>
                                    <li><a href="shop.html"> 中国联通</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>数码服务产品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 数码综合服务馆：数码服务三十六计</a></li>
                                </ul>
                            </div>
                        </ul>
                    </li>
                    <li class="left-sub">
                        <a href="shop.html"> 厨卫大电 |</a>
                        <a href="shop.html"> 生活家电 |</a>
                        <a href="shop.html"> 厨具 </a>
                        <ul class="left-sub-hid">
                            <div>
                                <li><a href="shop.html"> 手机频道</a></li>
                                <li><a href="shop.html"> 智能数码</a></li>
                                <li><a href="shop.html"> 以旧换新</a></li>
                                <li><a href="shop.html"> 网上营业厅</a></li>
                                <li><a href="shop.html"> 企业采购</a></li>
                                <li><a href="shop.html"> 跳蚤市场国际</a></li>
                                <li><a href="shop.html"> 二手优品</a></li>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机通讯</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【爆款手机￥11.11起】</a></li>
                                    <li><a href="shop.html"> 全部手机</a></li>
                                    <li><a href="shop.html"> 5G手机</a></li>
                                    <li><a href="shop.html"> iPhone</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                    <li><a href="shop.html"> 荣耀</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> realme</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 魅族</a></li>
                                    <li><a href="shop.html"> 诺基亚</a></li>
                                    <li><a href="shop.html"> 努比亚</a></li>
                                    <li><a href="shop.html"> 联想</a></li>
                                    <li><a href="shop.html"> 守护宝</a></li>
                                    <li><a href="shop.html"> 飞利浦</a></li>
                                    <li><a href="shop.html">正品好货</a></li>
                                    <li><a href="shop.html"> 以旧换新</a></li>
                                    <li><a href="shop.html"> 手机维修</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机配件</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【配件精选会场，全场9.9元起】</a></li>
                                    <li><a href="shop.html"> 手机壳</a></li>
                                    <li><a href="shop.html"> 手机耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙音箱</a></li>
                                    <li><a href="shop.html"> 手机贴膜</a></li>
                                    <li><a href="shop.html"> 手机存储卡</a></li>
                                    <li><a href="shop.html"> 数据线</a></li>
                                    <li><a href="shop.html"> 充电器</a></li>
                                    <li><a href="shop.html"> 无线充电器</a></li>
                                    <li><a href="shop.html"> 手机电池</a></li>
                                    <li><a href="shop.html"> 苹果周边</a></li>
                                    <li><a href="shop.html"> 移动电源</a></li>
                                    <li><a href="shop.html"> 自拍杆</a></li>
                                    <li><a href="shop.html"> 手机支架</a></li>
                                    <li><a href="shop.html"> 手机U盘</a></li>
                                    <li><a href="shop.html"> 车载配件</a></li>
                                    <li><a href="shop.html"> 手机饰品</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>智能设备</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【嗨爆双十一领券满999减100】</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 智能门锁</a></li>
                                    <li><a href="shop.html"> 平衡车</a></li>
                                    <li><a href="shop.html"> 无人机</a></li>
                                    <li><a href="shop.html"> 智能摄像头</a></li>
                                    <li><a href="shop.html"> 智能机器人</a></li>
                                    <li><a href="shop.html"> 智能手环</a></li>
                                    <li><a href="shop.html"> 智能手表</a></li>
                                    <li><a href="shop.html"> VR眼镜</a></li>
                                    <li><a href="shop.html"> 智能家居</a></li>
                                    <li><a href="shop.html"> 智能健康监测</a></li>
                                    <li><a href="shop.html"> 智能翻译机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>影音电子</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 音箱</a></li>
                                    <li><a href="shop.html"> 耳机/耳麦</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 运动耳机</a></li>
                                    <li><a href="shop.html"> MP3/MP4</a></li>
                                    <li><a href="shop.html"> 收音/收音机</a></li>
                                    <li><a href="shop.html"> 录音笔</a></li>
                                    <li><a href="shop.html"> 无线耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>电子教育</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 儿童手表</a></li>
                                    <li><a href="shop.html"> 学生电脑/学习机</a></li>
                                    <li><a href="shop.html"> 故事机</a></li>
                                    <li><a href="shop.html"> 翻译机</a></li>
                                    <li><a href="shop.html"> 步步高点读机</a></li>
                                    <li><a href="shop.html"> 小天才儿童手表</a></li>
                                    <li><a href="shop.html"> 点读机/笔</a></li>
                                    <li><a href="shop.html"> 电子书</a></li>
                                    <li><a href="shop.html"> 电子词典</a></li>
                                    <li><a href="shop.html"> 复读机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>二手优品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> iPhone 7</a></li>
                                    <li><a href="shop.html"> iPhone 8</a></li>
                                    <li><a href="shop.html"> iPhone X</a></li>
                                    <li><a href="shop.html"> iPhone 8P</a></li>
                                    <li><a href="shop.html"> iPhone 7P</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>跳蚤市场互联</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 尾号888靓号</a></li>
                                    <li><a href="shop.html"> 0月租号卡</a></li>
                                    <li><a href="shop.html"> 2元流量畅享</a></li>
                                    <li><a href="shop.html"> 20GB大流量</a></li>
                                    <li><a href="shop.html"> 超级靓号</a></li>
                                    <li><a href="shop.html"> 立即选号</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>营业厅</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【1元1GB腾讯APP免流】</a></li>
                                    <li><a href="shop.html"> 手机卡</a></li>
                                    <li><a href="shop.html"> 大流量卡</a></li>
                                    <li><a href="shop.html"> 宽带</a></li>
                                    <li><a href="shop.html"> 办套餐</a></li>
                                    <li><a href="shop.html"> 充话费/流量</a></li>
                                    <li><a href="shop.html"> 中国移动</a></li>
                                    <li><a href="shop.html"> 中国电信</a></li>
                                    <li><a href="shop.html"> 中国联通</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>数码服务产品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 数码综合服务馆：数码服务三十六计</a></li>
                                </ul>
                            </div>
                        </ul>
                    </li>
                    <li class="left-sub">
                        <a href="shop.html"> 家居 |</a>
                        <a href="shop.html"> 家具 |</a>
                        <a href="shop.html"> 家装 |</a>
                        <a href="shop.html"> 家纺</a>
                        <ul class="left-sub-hid">
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机通讯</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【爆款手机￥11.11起】</a></li>
                                    <li><a href="shop.html"> 全部手机</a></li>
                                    <li><a href="shop.html"> 5G手机</a></li>
                                    <li><a href="shop.html"> iPhone</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                    <li><a href="shop.html"> 荣耀</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> realme</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 魅族</a></li>
                                    <li><a href="shop.html"> 诺基亚</a></li>
                                    <li><a href="shop.html"> 努比亚</a></li>
                                    <li><a href="shop.html"> 联想</a></li>
                                    <li><a href="shop.html"> 守护宝</a></li>
                                    <li><a href="shop.html"> 飞利浦</a></li>
                                    <li><a href="shop.html">正品好货</a></li>
                                    <li><a href="shop.html"> 以旧换新</a></li>
                                    <li><a href="shop.html"> 手机维修</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机配件</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【配件精选会场，全场9.9元起】</a></li>
                                    <li><a href="shop.html"> 手机壳</a></li>
                                    <li><a href="shop.html"> 手机耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙音箱</a></li>
                                    <li><a href="shop.html"> 手机贴膜</a></li>
                                    <li><a href="shop.html"> 手机存储卡</a></li>
                                    <li><a href="shop.html"> 数据线</a></li>
                                    <li><a href="shop.html"> 充电器</a></li>
                                    <li><a href="shop.html"> 无线充电器</a></li>
                                    <li><a href="shop.html"> 手机电池</a></li>
                                    <li><a href="shop.html"> 苹果周边</a></li>
                                    <li><a href="shop.html"> 移动电源</a></li>
                                    <li><a href="shop.html"> 自拍杆</a></li>
                                    <li><a href="shop.html"> 手机支架</a></li>
                                    <li><a href="shop.html"> 手机U盘</a></li>
                                    <li><a href="shop.html"> 车载配件</a></li>
                                    <li><a href="shop.html"> 手机饰品</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>智能设备</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【嗨爆双十一领券满999减100】</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 智能门锁</a></li>
                                    <li><a href="shop.html"> 平衡车</a></li>
                                    <li><a href="shop.html"> 无人机</a></li>
                                    <li><a href="shop.html"> 智能摄像头</a></li>
                                    <li><a href="shop.html"> 智能机器人</a></li>
                                    <li><a href="shop.html"> 智能手环</a></li>
                                    <li><a href="shop.html"> 智能手表</a></li>
                                    <li><a href="shop.html"> VR眼镜</a></li>
                                    <li><a href="shop.html"> 智能家居</a></li>
                                    <li><a href="shop.html"> 智能健康监测</a></li>
                                    <li><a href="shop.html"> 智能翻译机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>影音电子</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 音箱</a></li>
                                    <li><a href="shop.html"> 耳机/耳麦</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 运动耳机</a></li>
                                    <li><a href="shop.html"> MP3/MP4</a></li>
                                    <li><a href="shop.html"> 收音/收音机</a></li>
                                    <li><a href="shop.html"> 录音笔</a></li>
                                    <li><a href="shop.html"> 无线耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>电子教育</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 儿童手表</a></li>
                                    <li><a href="shop.html"> 学生电脑/学习机</a></li>
                                    <li><a href="shop.html"> 故事机</a></li>
                                    <li><a href="shop.html"> 翻译机</a></li>
                                    <li><a href="shop.html"> 步步高点读机</a></li>
                                    <li><a href="shop.html"> 小天才儿童手表</a></li>
                                    <li><a href="shop.html"> 点读机/笔</a></li>
                                    <li><a href="shop.html"> 电子书</a></li>
                                    <li><a href="shop.html"> 电子词典</a></li>
                                    <li><a href="shop.html"> 复读机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>二手优品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> iPhone 7</a></li>
                                    <li><a href="shop.html"> iPhone 8</a></li>
                                    <li><a href="shop.html"> iPhone X</a></li>
                                    <li><a href="shop.html"> iPhone 8P</a></li>
                                    <li><a href="shop.html"> iPhone 7P</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>跳蚤市场互联</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 尾号888靓号</a></li>
                                    <li><a href="shop.html"> 0月租号卡</a></li>
                                    <li><a href="shop.html"> 2元流量畅享</a></li>
                                    <li><a href="shop.html"> 20GB大流量</a></li>
                                    <li><a href="shop.html"> 超级靓号</a></li>
                                    <li><a href="shop.html"> 立即选号</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>营业厅</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【1元1GB腾讯APP免流】</a></li>
                                    <li><a href="shop.html"> 手机卡</a></li>
                                    <li><a href="shop.html"> 大流量卡</a></li>
                                    <li><a href="shop.html"> 宽带</a></li>
                                    <li><a href="shop.html"> 办套餐</a></li>
                                    <li><a href="shop.html"> 充话费/流量</a></li>
                                    <li><a href="shop.html"> 中国移动</a></li>
                                    <li><a href="shop.html"> 中国电信</a></li>
                                    <li><a href="shop.html"> 中国联通</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>数码服务产品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 数码综合服务馆：数码服务三十六计</a></li>
                                </ul>
                            </div>
                        </ul>
                    </li>
                    <li class="left-sub">
                        <a href="shop.html"> 食品 |</a>
                        <a href="shop.html"> 酒水 |</a>
                        <a href="shop.html"> 生鲜 | </a>
                        <a href="shop.html"> 特产</a>
                        <ul class="left-sub-hid">
                            <div>
                                <li><a href="shop.html"> 手机频道</a></li>
                                <li><a href="shop.html"> 智能数码</a></li>
                                <li><a href="shop.html"> 以旧换新</a></li>
                                <li><a href="shop.html"> 网上营业厅</a></li>
                                <li><a href="shop.html"> 企业采购</a></li>
                                <li><a href="shop.html"> 跳蚤市场国际</a></li>
                                <li><a href="shop.html"> 二手优品</a></li>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机通讯</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【爆款手机￥11.11起】</a></li>
                                    <li><a href="shop.html"> 全部手机</a></li>
                                    <li><a href="shop.html"> 5G手机</a></li>
                                    <li><a href="shop.html"> iPhone</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                    <li><a href="shop.html"> 荣耀</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> realme</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 魅族</a></li>
                                    <li><a href="shop.html"> 诺基亚</a></li>
                                    <li><a href="shop.html"> 努比亚</a></li>
                                    <li><a href="shop.html"> 联想</a></li>
                                    <li><a href="shop.html"> 守护宝</a></li>
                                    <li><a href="shop.html"> 飞利浦</a></li>
                                    <li><a href="shop.html">正品好货</a></li>
                                    <li><a href="shop.html"> 以旧换新</a></li>
                                    <li><a href="shop.html"> 手机维修</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机配件</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【配件精选会场，全场9.9元起】</a></li>
                                    <li><a href="shop.html"> 手机壳</a></li>
                                    <li><a href="shop.html"> 手机耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙音箱</a></li>
                                    <li><a href="shop.html"> 手机贴膜</a></li>
                                    <li><a href="shop.html"> 手机存储卡</a></li>
                                    <li><a href="shop.html"> 数据线</a></li>
                                    <li><a href="shop.html"> 充电器</a></li>
                                    <li><a href="shop.html"> 无线充电器</a></li>
                                    <li><a href="shop.html"> 手机电池</a></li>
                                    <li><a href="shop.html"> 苹果周边</a></li>
                                    <li><a href="shop.html"> 移动电源</a></li>
                                    <li><a href="shop.html"> 自拍杆</a></li>
                                    <li><a href="shop.html"> 手机支架</a></li>
                                    <li><a href="shop.html"> 手机U盘</a></li>
                                    <li><a href="shop.html"> 车载配件</a></li>
                                    <li><a href="shop.html"> 手机饰品</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>智能设备</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【嗨爆双十一领券满999减100】</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 智能门锁</a></li>
                                    <li><a href="shop.html"> 平衡车</a></li>
                                    <li><a href="shop.html"> 无人机</a></li>
                                    <li><a href="shop.html"> 智能摄像头</a></li>
                                    <li><a href="shop.html"> 智能机器人</a></li>
                                    <li><a href="shop.html"> 智能手环</a></li>
                                    <li><a href="shop.html"> 智能手表</a></li>
                                    <li><a href="shop.html"> VR眼镜</a></li>
                                    <li><a href="shop.html"> 智能家居</a></li>
                                    <li><a href="shop.html"> 智能健康监测</a></li>
                                    <li><a href="shop.html"> 智能翻译机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>影音电子</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 音箱</a></li>
                                    <li><a href="shop.html"> 耳机/耳麦</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 运动耳机</a></li>
                                    <li><a href="shop.html"> MP3/MP4</a></li>
                                    <li><a href="shop.html"> 收音/收音机</a></li>
                                    <li><a href="shop.html"> 录音笔</a></li>
                                    <li><a href="shop.html"> 无线耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>电子教育</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 儿童手表</a></li>
                                    <li><a href="shop.html"> 学生电脑/学习机</a></li>
                                    <li><a href="shop.html"> 故事机</a></li>
                                    <li><a href="shop.html"> 翻译机</a></li>
                                    <li><a href="shop.html"> 步步高点读机</a></li>
                                    <li><a href="shop.html"> 小天才儿童手表</a></li>
                                    <li><a href="shop.html"> 点读机/笔</a></li>
                                    <li><a href="shop.html"> 电子书</a></li>
                                    <li><a href="shop.html"> 电子词典</a></li>
                                    <li><a href="shop.html"> 复读机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>二手优品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> iPhone 7</a></li>
                                    <li><a href="shop.html"> iPhone 8</a></li>
                                    <li><a href="shop.html"> iPhone X</a></li>
                                    <li><a href="shop.html"> iPhone 8P</a></li>
                                    <li><a href="shop.html"> iPhone 7P</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>跳蚤市场互联</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 尾号888靓号</a></li>
                                    <li><a href="shop.html"> 0月租号卡</a></li>
                                    <li><a href="shop.html"> 2元流量畅享</a></li>
                                    <li><a href="shop.html"> 20GB大流量</a></li>
                                    <li><a href="shop.html"> 超级靓号</a></li>
                                    <li><a href="shop.html"> 立即选号</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>营业厅</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【1元1GB腾讯APP免流】</a></li>
                                    <li><a href="shop.html"> 手机卡</a></li>
                                    <li><a href="shop.html"> 大流量卡</a></li>
                                    <li><a href="shop.html"> 宽带</a></li>
                                    <li><a href="shop.html"> 办套餐</a></li>
                                    <li><a href="shop.html"> 充话费/流量</a></li>
                                    <li><a href="shop.html"> 中国移动</a></li>
                                    <li><a href="shop.html"> 中国电信</a></li>
                                    <li><a href="shop.html"> 中国联通</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>数码服务产品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 数码综合服务馆：数码服务三十六计</a></li>
                                </ul>
                            </div>
                        </ul>
                    </li>
                    <li class="left-sub">
                        <a href="shop.html"> 美妆 |</a>
                        <a href="shop.html"> 个护 |</a>
                        <a href="shop.html"> 清洁 | </a>
                        <a href="shop.html"> 宠物</a>
                        <ul class="left-sub-hid">
                            <div>
                                <li><a href="shop.html"> 手机频道</a></li>
                                <li><a href="shop.html"> 智能数码</a></li>
                                <li><a href="shop.html"> 以旧换新</a></li>
                                <li><a href="shop.html"> 网上营业厅</a></li>
                                <li><a href="shop.html"> 企业采购</a></li>
                                <li><a href="shop.html"> 跳蚤市场国际</a></li>
                                <li><a href="shop.html"> 二手优品</a></li>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机通讯</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【爆款手机￥11.11起】</a></li>
                                    <li><a href="shop.html"> 全部手机</a></li>
                                    <li><a href="shop.html"> 5G手机</a></li>
                                    <li><a href="shop.html"> iPhone</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                    <li><a href="shop.html"> 荣耀</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> realme</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 魅族</a></li>
                                    <li><a href="shop.html"> 诺基亚</a></li>
                                    <li><a href="shop.html"> 努比亚</a></li>
                                    <li><a href="shop.html"> 联想</a></li>
                                    <li><a href="shop.html"> 守护宝</a></li>
                                    <li><a href="shop.html"> 飞利浦</a></li>
                                    <li><a href="shop.html">正品好货</a></li>
                                    <li><a href="shop.html"> 以旧换新</a></li>
                                    <li><a href="shop.html"> 手机维修</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机配件</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【配件精选会场，全场9.9元起】</a></li>
                                    <li><a href="shop.html"> 手机壳</a></li>
                                    <li><a href="shop.html"> 手机耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙音箱</a></li>
                                    <li><a href="shop.html"> 手机贴膜</a></li>
                                    <li><a href="shop.html"> 手机存储卡</a></li>
                                    <li><a href="shop.html"> 数据线</a></li>
                                    <li><a href="shop.html"> 充电器</a></li>
                                    <li><a href="shop.html"> 无线充电器</a></li>
                                    <li><a href="shop.html"> 手机电池</a></li>
                                    <li><a href="shop.html"> 苹果周边</a></li>
                                    <li><a href="shop.html"> 移动电源</a></li>
                                    <li><a href="shop.html"> 自拍杆</a></li>
                                    <li><a href="shop.html"> 手机支架</a></li>
                                    <li><a href="shop.html"> 手机U盘</a></li>
                                    <li><a href="shop.html"> 车载配件</a></li>
                                    <li><a href="shop.html"> 手机饰品</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>智能设备</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【嗨爆双十一领券满999减100】</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 智能门锁</a></li>
                                    <li><a href="shop.html"> 平衡车</a></li>
                                    <li><a href="shop.html"> 无人机</a></li>
                                    <li><a href="shop.html"> 智能摄像头</a></li>
                                    <li><a href="shop.html"> 智能机器人</a></li>
                                    <li><a href="shop.html"> 智能手环</a></li>
                                    <li><a href="shop.html"> 智能手表</a></li>
                                    <li><a href="shop.html"> VR眼镜</a></li>
                                    <li><a href="shop.html"> 智能家居</a></li>
                                    <li><a href="shop.html"> 智能健康监测</a></li>
                                    <li><a href="shop.html"> 智能翻译机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>影音电子</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 音箱</a></li>
                                    <li><a href="shop.html"> 耳机/耳麦</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 运动耳机</a></li>
                                    <li><a href="shop.html"> MP3/MP4</a></li>
                                    <li><a href="shop.html"> 收音/收音机</a></li>
                                    <li><a href="shop.html"> 录音笔</a></li>
                                    <li><a href="shop.html"> 无线耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>电子教育</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 儿童手表</a></li>
                                    <li><a href="shop.html"> 学生电脑/学习机</a></li>
                                    <li><a href="shop.html"> 故事机</a></li>
                                    <li><a href="shop.html"> 翻译机</a></li>
                                    <li><a href="shop.html"> 步步高点读机</a></li>
                                    <li><a href="shop.html"> 小天才儿童手表</a></li>
                                    <li><a href="shop.html"> 点读机/笔</a></li>
                                    <li><a href="shop.html"> 电子书</a></li>
                                    <li><a href="shop.html"> 电子词典</a></li>
                                    <li><a href="shop.html"> 复读机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>二手优品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> iPhone 7</a></li>
                                    <li><a href="shop.html"> iPhone 8</a></li>
                                    <li><a href="shop.html"> iPhone X</a></li>
                                    <li><a href="shop.html"> iPhone 8P</a></li>
                                    <li><a href="shop.html"> iPhone 7P</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>跳蚤市场互联</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 尾号888靓号</a></li>
                                    <li><a href="shop.html"> 0月租号卡</a></li>
                                    <li><a href="shop.html"> 2元流量畅享</a></li>
                                    <li><a href="shop.html"> 20GB大流量</a></li>
                                    <li><a href="shop.html"> 超级靓号</a></li>
                                    <li><a href="shop.html"> 立即选号</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>营业厅</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【1元1GB腾讯APP免流】</a></li>
                                    <li><a href="shop.html"> 手机卡</a></li>
                                    <li><a href="shop.html"> 大流量卡</a></li>
                                    <li><a href="shop.html"> 宽带</a></li>
                                    <li><a href="shop.html"> 办套餐</a></li>
                                    <li><a href="shop.html"> 充话费/流量</a></li>
                                    <li><a href="shop.html"> 中国移动</a></li>
                                    <li><a href="shop.html"> 中国电信</a></li>
                                    <li><a href="shop.html"> 中国联通</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>数码服务产品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 数码综合服务馆：数码服务三十六计</a></li>
                                </ul>
                            </div>
                        </ul>
                    </li>
                    <li class="left-sub">
                        <a href="shop.html"> 母婴 |</a>
                        <a href="shop.html"> 玩具 |</a>
                        <a href="shop.html"> 车床 |</a>
                        <a href="shop.html"> 童装 </a>
                        <ul class="left-sub-hid">
                            <div>
                                <li><a href="shop.html"> 手机频道</a></li>
                                <li><a href="shop.html"> 智能数码</a></li>
                                <li><a href="shop.html"> 以旧换新</a></li>
                                <li><a href="shop.html"> 网上营业厅</a></li>
                                <li><a href="shop.html"> 企业采购</a></li>
                                <li><a href="shop.html"> 跳蚤市场国际</a></li>
                                <li><a href="shop.html"> 二手优品</a></li>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机通讯</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【爆款手机￥11.11起】</a></li>
                                    <li><a href="shop.html"> 全部手机</a></li>
                                    <li><a href="shop.html"> 5G手机</a></li>
                                    <li><a href="shop.html"> iPhone</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                    <li><a href="shop.html"> 荣耀</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> realme</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 魅族</a></li>
                                    <li><a href="shop.html"> 诺基亚</a></li>
                                    <li><a href="shop.html"> 努比亚</a></li>
                                    <li><a href="shop.html"> 联想</a></li>
                                    <li><a href="shop.html"> 守护宝</a></li>
                                    <li><a href="shop.html"> 飞利浦</a></li>
                                    <li><a href="shop.html">正品好货</a></li>
                                    <li><a href="shop.html"> 以旧换新</a></li>
                                    <li><a href="shop.html"> 手机维修</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机配件</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【配件精选会场，全场9.9元起】</a></li>
                                    <li><a href="shop.html"> 手机壳</a></li>
                                    <li><a href="shop.html"> 手机耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙音箱</a></li>
                                    <li><a href="shop.html"> 手机贴膜</a></li>
                                    <li><a href="shop.html"> 手机存储卡</a></li>
                                    <li><a href="shop.html"> 数据线</a></li>
                                    <li><a href="shop.html"> 充电器</a></li>
                                    <li><a href="shop.html"> 无线充电器</a></li>
                                    <li><a href="shop.html"> 手机电池</a></li>
                                    <li><a href="shop.html"> 苹果周边</a></li>
                                    <li><a href="shop.html"> 移动电源</a></li>
                                    <li><a href="shop.html"> 自拍杆</a></li>
                                    <li><a href="shop.html"> 手机支架</a></li>
                                    <li><a href="shop.html"> 手机U盘</a></li>
                                    <li><a href="shop.html"> 车载配件</a></li>
                                    <li><a href="shop.html"> 手机饰品</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>智能设备</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【嗨爆双十一领券满999减100】</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 智能门锁</a></li>
                                    <li><a href="shop.html"> 平衡车</a></li>
                                    <li><a href="shop.html"> 无人机</a></li>
                                    <li><a href="shop.html"> 智能摄像头</a></li>
                                    <li><a href="shop.html"> 智能机器人</a></li>
                                    <li><a href="shop.html"> 智能手环</a></li>
                                    <li><a href="shop.html"> 智能手表</a></li>
                                    <li><a href="shop.html"> VR眼镜</a></li>
                                    <li><a href="shop.html"> 智能家居</a></li>
                                    <li><a href="shop.html"> 智能健康监测</a></li>
                                    <li><a href="shop.html"> 智能翻译机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>影音电子</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 音箱</a></li>
                                    <li><a href="shop.html"> 耳机/耳麦</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 运动耳机</a></li>
                                    <li><a href="shop.html"> MP3/MP4</a></li>
                                    <li><a href="shop.html"> 收音/收音机</a></li>
                                    <li><a href="shop.html"> 录音笔</a></li>
                                    <li><a href="shop.html"> 无线耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>电子教育</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 儿童手表</a></li>
                                    <li><a href="shop.html"> 学生电脑/学习机</a></li>
                                    <li><a href="shop.html"> 故事机</a></li>
                                    <li><a href="shop.html"> 翻译机</a></li>
                                    <li><a href="shop.html"> 步步高点读机</a></li>
                                    <li><a href="shop.html"> 小天才儿童手表</a></li>
                                    <li><a href="shop.html"> 点读机/笔</a></li>
                                    <li><a href="shop.html"> 电子书</a></li>
                                    <li><a href="shop.html"> 电子词典</a></li>
                                    <li><a href="shop.html"> 复读机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>二手优品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> iPhone 7</a></li>
                                    <li><a href="shop.html"> iPhone 8</a></li>
                                    <li><a href="shop.html"> iPhone X</a></li>
                                    <li><a href="shop.html"> iPhone 8P</a></li>
                                    <li><a href="shop.html"> iPhone 7P</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>跳蚤市场互联</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 尾号888靓号</a></li>
                                    <li><a href="shop.html"> 0月租号卡</a></li>
                                    <li><a href="shop.html"> 2元流量畅享</a></li>
                                    <li><a href="shop.html"> 20GB大流量</a></li>
                                    <li><a href="shop.html"> 超级靓号</a></li>
                                    <li><a href="shop.html"> 立即选号</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>营业厅</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【1元1GB腾讯APP免流】</a></li>
                                    <li><a href="shop.html"> 手机卡</a></li>
                                    <li><a href="shop.html"> 大流量卡</a></li>
                                    <li><a href="shop.html"> 宽带</a></li>
                                    <li><a href="shop.html"> 办套餐</a></li>
                                    <li><a href="shop.html"> 充话费/流量</a></li>
                                    <li><a href="shop.html"> 中国移动</a></li>
                                    <li><a href="shop.html"> 中国电信</a></li>
                                    <li><a href="shop.html"> 中国联通</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>数码服务产品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 数码综合服务馆：数码服务三十六计</a></li>
                                </ul>
                            </div>
                        </ul>
                    </li>
                    <li class="left-sub">
                        <a href="shop.html"> 运动 |</a>
                        <a href="shop.html"> 户外 |</a>
                        <a href="shop.html"> 足球 |</a>
                        <a href="shop.html"> 跑步机 </a>
                        <ul class="left-sub-hid">
                            <div>
                                <li><a href="shop.html"> 手机频道</a></li>
                                <li><a href="shop.html"> 智能数码</a></li>
                                <li><a href="shop.html"> 以旧换新</a></li>
                                <li><a href="shop.html"> 网上营业厅</a></li>
                                <li><a href="shop.html"> 企业采购</a></li>
                                <li><a href="shop.html"> 跳蚤市场国际</a></li>
                                <li><a href="shop.html"> 二手优品</a></li>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机通讯</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【爆款手机￥11.11起】</a></li>
                                    <li><a href="shop.html"> 全部手机</a></li>
                                    <li><a href="shop.html"> 5G手机</a></li>
                                    <li><a href="shop.html"> iPhone</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                    <li><a href="shop.html"> 荣耀</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> realme</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 魅族</a></li>
                                    <li><a href="shop.html"> 诺基亚</a></li>
                                    <li><a href="shop.html"> 努比亚</a></li>
                                    <li><a href="shop.html"> 联想</a></li>
                                    <li><a href="shop.html"> 守护宝</a></li>
                                    <li><a href="shop.html"> 飞利浦</a></li>
                                    <li><a href="shop.html">正品好货</a></li>
                                    <li><a href="shop.html"> 以旧换新</a></li>
                                    <li><a href="shop.html"> 手机维修</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机配件</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【配件精选会场，全场9.9元起】</a></li>
                                    <li><a href="shop.html"> 手机壳</a></li>
                                    <li><a href="shop.html"> 手机耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙音箱</a></li>
                                    <li><a href="shop.html"> 手机贴膜</a></li>
                                    <li><a href="shop.html"> 手机存储卡</a></li>
                                    <li><a href="shop.html"> 数据线</a></li>
                                    <li><a href="shop.html"> 充电器</a></li>
                                    <li><a href="shop.html"> 无线充电器</a></li>
                                    <li><a href="shop.html"> 手机电池</a></li>
                                    <li><a href="shop.html"> 苹果周边</a></li>
                                    <li><a href="shop.html"> 移动电源</a></li>
                                    <li><a href="shop.html"> 自拍杆</a></li>
                                    <li><a href="shop.html"> 手机支架</a></li>
                                    <li><a href="shop.html"> 手机U盘</a></li>
                                    <li><a href="shop.html"> 车载配件</a></li>
                                    <li><a href="shop.html"> 手机饰品</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>智能设备</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【嗨爆双十一领券满999减100】</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 智能门锁</a></li>
                                    <li><a href="shop.html"> 平衡车</a></li>
                                    <li><a href="shop.html"> 无人机</a></li>
                                    <li><a href="shop.html"> 智能摄像头</a></li>
                                    <li><a href="shop.html"> 智能机器人</a></li>
                                    <li><a href="shop.html"> 智能手环</a></li>
                                    <li><a href="shop.html"> 智能手表</a></li>
                                    <li><a href="shop.html"> VR眼镜</a></li>
                                    <li><a href="shop.html"> 智能家居</a></li>
                                    <li><a href="shop.html"> 智能健康监测</a></li>
                                    <li><a href="shop.html"> 智能翻译机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>影音电子</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 音箱</a></li>
                                    <li><a href="shop.html"> 耳机/耳麦</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 运动耳机</a></li>
                                    <li><a href="shop.html"> MP3/MP4</a></li>
                                    <li><a href="shop.html"> 收音/收音机</a></li>
                                    <li><a href="shop.html"> 录音笔</a></li>
                                    <li><a href="shop.html"> 无线耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>电子教育</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 儿童手表</a></li>
                                    <li><a href="shop.html"> 学生电脑/学习机</a></li>
                                    <li><a href="shop.html"> 故事机</a></li>
                                    <li><a href="shop.html"> 翻译机</a></li>
                                    <li><a href="shop.html"> 步步高点读机</a></li>
                                    <li><a href="shop.html"> 小天才儿童手表</a></li>
                                    <li><a href="shop.html"> 点读机/笔</a></li>
                                    <li><a href="shop.html"> 电子书</a></li>
                                    <li><a href="shop.html"> 电子词典</a></li>
                                    <li><a href="shop.html"> 复读机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>二手优品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> iPhone 7</a></li>
                                    <li><a href="shop.html"> iPhone 8</a></li>
                                    <li><a href="shop.html"> iPhone X</a></li>
                                    <li><a href="shop.html"> iPhone 8P</a></li>
                                    <li><a href="shop.html"> iPhone 7P</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>跳蚤市场互联</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 尾号888靓号</a></li>
                                    <li><a href="shop.html"> 0月租号卡</a></li>
                                    <li><a href="shop.html"> 2元流量畅享</a></li>
                                    <li><a href="shop.html"> 20GB大流量</a></li>
                                    <li><a href="shop.html"> 超级靓号</a></li>
                                    <li><a href="shop.html"> 立即选号</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>营业厅</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【1元1GB腾讯APP免流】</a></li>
                                    <li><a href="shop.html"> 手机卡</a></li>
                                    <li><a href="shop.html"> 大流量卡</a></li>
                                    <li><a href="shop.html"> 宽带</a></li>
                                    <li><a href="shop.html"> 办套餐</a></li>
                                    <li><a href="shop.html"> 充话费/流量</a></li>
                                    <li><a href="shop.html"> 中国移动</a></li>
                                    <li><a href="shop.html"> 中国电信</a></li>
                                    <li><a href="shop.html"> 中国联通</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>数码服务产品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 数码综合服务馆：数码服务三十六计</a></li>
                                </ul>
                            </div>
                        </ul>
                    </li>
                    <li class="left-sub">
                        <a href="shop.html"> 男装 |</a>
                        <a href="shop.html"> 女装 |</a>
                        <a href="shop.html"> 内衣 |</a>
                        <a href="shop.html"> 鞋靴 </a>
                        <ul class="left-sub-hid">
                            <div>
                                <li><a href="shop.html"> 手机频道</a></li>
                                <li><a href="shop.html"> 智能数码</a></li>
                                <li><a href="shop.html"> 以旧换新</a></li>
                                <li><a href="shop.html"> 网上营业厅</a></li>
                                <li><a href="shop.html"> 企业采购</a></li>
                                <li><a href="shop.html"> 跳蚤市场国际</a></li>
                                <li><a href="shop.html"> 二手优品</a></li>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机通讯</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【爆款手机￥11.11起】</a></li>
                                    <li><a href="shop.html"> 全部手机</a></li>
                                    <li><a href="shop.html"> 5G手机</a></li>
                                    <li><a href="shop.html"> iPhone</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                    <li><a href="shop.html"> 荣耀</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> realme</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 魅族</a></li>
                                    <li><a href="shop.html"> 诺基亚</a></li>
                                    <li><a href="shop.html"> 努比亚</a></li>
                                    <li><a href="shop.html"> 联想</a></li>
                                    <li><a href="shop.html"> 守护宝</a></li>
                                    <li><a href="shop.html"> 飞利浦</a></li>
                                    <li><a href="shop.html">正品好货</a></li>
                                    <li><a href="shop.html"> 以旧换新</a></li>
                                    <li><a href="shop.html"> 手机维修</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机配件</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【配件精选会场，全场9.9元起】</a></li>
                                    <li><a href="shop.html"> 手机壳</a></li>
                                    <li><a href="shop.html"> 手机耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙音箱</a></li>
                                    <li><a href="shop.html"> 手机贴膜</a></li>
                                    <li><a href="shop.html"> 手机存储卡</a></li>
                                    <li><a href="shop.html"> 数据线</a></li>
                                    <li><a href="shop.html"> 充电器</a></li>
                                    <li><a href="shop.html"> 无线充电器</a></li>
                                    <li><a href="shop.html"> 手机电池</a></li>
                                    <li><a href="shop.html"> 苹果周边</a></li>
                                    <li><a href="shop.html"> 移动电源</a></li>
                                    <li><a href="shop.html"> 自拍杆</a></li>
                                    <li><a href="shop.html"> 手机支架</a></li>
                                    <li><a href="shop.html"> 手机U盘</a></li>
                                    <li><a href="shop.html"> 车载配件</a></li>
                                    <li><a href="shop.html"> 手机饰品</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>智能设备</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【嗨爆双十一领券满999减100】</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 智能门锁</a></li>
                                    <li><a href="shop.html"> 平衡车</a></li>
                                    <li><a href="shop.html"> 无人机</a></li>
                                    <li><a href="shop.html"> 智能摄像头</a></li>
                                    <li><a href="shop.html"> 智能机器人</a></li>
                                    <li><a href="shop.html"> 智能手环</a></li>
                                    <li><a href="shop.html"> 智能手表</a></li>
                                    <li><a href="shop.html"> VR眼镜</a></li>
                                    <li><a href="shop.html"> 智能家居</a></li>
                                    <li><a href="shop.html"> 智能健康监测</a></li>
                                    <li><a href="shop.html"> 智能翻译机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>影音电子</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 音箱</a></li>
                                    <li><a href="shop.html"> 耳机/耳麦</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 运动耳机</a></li>
                                    <li><a href="shop.html"> MP3/MP4</a></li>
                                    <li><a href="shop.html"> 收音/收音机</a></li>
                                    <li><a href="shop.html"> 录音笔</a></li>
                                    <li><a href="shop.html"> 无线耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>电子教育</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 儿童手表</a></li>
                                    <li><a href="shop.html"> 学生电脑/学习机</a></li>
                                    <li><a href="shop.html"> 故事机</a></li>
                                    <li><a href="shop.html"> 翻译机</a></li>
                                    <li><a href="shop.html"> 步步高点读机</a></li>
                                    <li><a href="shop.html"> 小天才儿童手表</a></li>
                                    <li><a href="shop.html"> 点读机/笔</a></li>
                                    <li><a href="shop.html"> 电子书</a></li>
                                    <li><a href="shop.html"> 电子词典</a></li>
                                    <li><a href="shop.html"> 复读机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>二手优品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> iPhone 7</a></li>
                                    <li><a href="shop.html"> iPhone 8</a></li>
                                    <li><a href="shop.html"> iPhone X</a></li>
                                    <li><a href="shop.html"> iPhone 8P</a></li>
                                    <li><a href="shop.html"> iPhone 7P</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>跳蚤市场互联</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 尾号888靓号</a></li>
                                    <li><a href="shop.html"> 0月租号卡</a></li>
                                    <li><a href="shop.html"> 2元流量畅享</a></li>
                                    <li><a href="shop.html"> 20GB大流量</a></li>
                                    <li><a href="shop.html"> 超级靓号</a></li>
                                    <li><a href="shop.html"> 立即选号</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>营业厅</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【1元1GB腾讯APP免流】</a></li>
                                    <li><a href="shop.html"> 手机卡</a></li>
                                    <li><a href="shop.html"> 大流量卡</a></li>
                                    <li><a href="shop.html"> 宽带</a></li>
                                    <li><a href="shop.html"> 办套餐</a></li>
                                    <li><a href="shop.html"> 充话费/流量</a></li>
                                    <li><a href="shop.html"> 中国移动</a></li>
                                    <li><a href="shop.html"> 中国电信</a></li>
                                    <li><a href="shop.html"> 中国联通</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>数码服务产品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 数码综合服务馆：数码服务三十六计</a></li>
                                </ul>
                            </div>
                        </ul>
                    </li>
                    <li class="left-sub">
                        <a href="shop.html"> 箱包 |</a>
                        <a href="shop.html"> 钟表 |</a>
                        <a href="shop.html"> 珠宝 |</a>
                        <a href="shop.html"> 艺术 </a>
                        <ul class="left-sub-hid">
                            <div>
                                <li><a href="shop.html"> 手机频道</a></li>
                                <li><a href="shop.html"> 智能数码</a></li>
                                <li><a href="shop.html"> 以旧换新</a></li>
                                <li><a href="shop.html"> 网上营业厅</a></li>
                                <li><a href="shop.html"> 企业采购</a></li>
                                <li><a href="shop.html"> 跳蚤市场国际</a></li>
                                <li><a href="shop.html"> 二手优品</a></li>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机通讯</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【爆款手机￥11.11起】</a></li>
                                    <li><a href="shop.html"> 全部手机</a></li>
                                    <li><a href="shop.html"> 5G手机</a></li>
                                    <li><a href="shop.html"> iPhone</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                    <li><a href="shop.html"> 荣耀</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> realme</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 魅族</a></li>
                                    <li><a href="shop.html"> 诺基亚</a></li>
                                    <li><a href="shop.html"> 努比亚</a></li>
                                    <li><a href="shop.html"> 联想</a></li>
                                    <li><a href="shop.html"> 守护宝</a></li>
                                    <li><a href="shop.html"> 飞利浦</a></li>
                                    <li><a href="shop.html">正品好货</a></li>
                                    <li><a href="shop.html"> 以旧换新</a></li>
                                    <li><a href="shop.html"> 手机维修</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机配件</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【配件精选会场，全场9.9元起】</a></li>
                                    <li><a href="shop.html"> 手机壳</a></li>
                                    <li><a href="shop.html"> 手机耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙音箱</a></li>
                                    <li><a href="shop.html"> 手机贴膜</a></li>
                                    <li><a href="shop.html"> 手机存储卡</a></li>
                                    <li><a href="shop.html"> 数据线</a></li>
                                    <li><a href="shop.html"> 充电器</a></li>
                                    <li><a href="shop.html"> 无线充电器</a></li>
                                    <li><a href="shop.html"> 手机电池</a></li>
                                    <li><a href="shop.html"> 苹果周边</a></li>
                                    <li><a href="shop.html"> 移动电源</a></li>
                                    <li><a href="shop.html"> 自拍杆</a></li>
                                    <li><a href="shop.html"> 手机支架</a></li>
                                    <li><a href="shop.html"> 手机U盘</a></li>
                                    <li><a href="shop.html"> 车载配件</a></li>
                                    <li><a href="shop.html"> 手机饰品</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>智能设备</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【嗨爆双十一领券满999减100】</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 智能门锁</a></li>
                                    <li><a href="shop.html"> 平衡车</a></li>
                                    <li><a href="shop.html"> 无人机</a></li>
                                    <li><a href="shop.html"> 智能摄像头</a></li>
                                    <li><a href="shop.html"> 智能机器人</a></li>
                                    <li><a href="shop.html"> 智能手环</a></li>
                                    <li><a href="shop.html"> 智能手表</a></li>
                                    <li><a href="shop.html"> VR眼镜</a></li>
                                    <li><a href="shop.html"> 智能家居</a></li>
                                    <li><a href="shop.html"> 智能健康监测</a></li>
                                    <li><a href="shop.html"> 智能翻译机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>影音电子</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 音箱</a></li>
                                    <li><a href="shop.html"> 耳机/耳麦</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 运动耳机</a></li>
                                    <li><a href="shop.html"> MP3/MP4</a></li>
                                    <li><a href="shop.html"> 收音/收音机</a></li>
                                    <li><a href="shop.html"> 录音笔</a></li>
                                    <li><a href="shop.html"> 无线耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>电子教育</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 儿童手表</a></li>
                                    <li><a href="shop.html"> 学生电脑/学习机</a></li>
                                    <li><a href="shop.html"> 故事机</a></li>
                                    <li><a href="shop.html"> 翻译机</a></li>
                                    <li><a href="shop.html"> 步步高点读机</a></li>
                                    <li><a href="shop.html"> 小天才儿童手表</a></li>
                                    <li><a href="shop.html"> 点读机/笔</a></li>
                                    <li><a href="shop.html"> 电子书</a></li>
                                    <li><a href="shop.html"> 电子词典</a></li>
                                    <li><a href="shop.html"> 复读机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>二手优品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> iPhone 7</a></li>
                                    <li><a href="shop.html"> iPhone 8</a></li>
                                    <li><a href="shop.html"> iPhone X</a></li>
                                    <li><a href="shop.html"> iPhone 8P</a></li>
                                    <li><a href="shop.html"> iPhone 7P</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>跳蚤市场互联</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 尾号888靓号</a></li>
                                    <li><a href="shop.html"> 0月租号卡</a></li>
                                    <li><a href="shop.html"> 2元流量畅享</a></li>
                                    <li><a href="shop.html"> 20GB大流量</a></li>
                                    <li><a href="shop.html"> 超级靓号</a></li>
                                    <li><a href="shop.html"> 立即选号</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>营业厅</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【1元1GB腾讯APP免流】</a></li>
                                    <li><a href="shop.html"> 手机卡</a></li>
                                    <li><a href="shop.html"> 大流量卡</a></li>
                                    <li><a href="shop.html"> 宽带</a></li>
                                    <li><a href="shop.html"> 办套餐</a></li>
                                    <li><a href="shop.html"> 充话费/流量</a></li>
                                    <li><a href="shop.html"> 中国移动</a></li>
                                    <li><a href="shop.html"> 中国电信</a></li>
                                    <li><a href="shop.html"> 中国联通</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>数码服务产品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 数码综合服务馆：数码服务三十六计</a></li>
                                </ul>
                            </div>
                        </ul>
                    </li>
                    <li class="left-sub">
                        <a href="shop.html"> 汽车 |</a>
                        <a href="shop.html"> 汽摩 |</a>
                        <a href="shop.html"> 二手车 |</a>
                        <a href="shop.html"> 车品 </a>
                        <ul class="left-sub-hid">
                            <div>
                                <li><a href="shop.html"> 手机频道</a></li>
                                <li><a href="shop.html"> 智能数码</a></li>
                                <li><a href="shop.html"> 以旧换新</a></li>
                                <li><a href="shop.html"> 网上营业厅</a></li>
                                <li><a href="shop.html"> 企业采购</a></li>
                                <li><a href="shop.html"> 跳蚤市场国际</a></li>
                                <li><a href="shop.html"> 二手优品</a></li>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机通讯</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【爆款手机￥11.11起】</a></li>
                                    <li><a href="shop.html"> 全部手机</a></li>
                                    <li><a href="shop.html"> 5G手机</a></li>
                                    <li><a href="shop.html"> iPhone</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                    <li><a href="shop.html"> 荣耀</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> realme</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 魅族</a></li>
                                    <li><a href="shop.html"> 诺基亚</a></li>
                                    <li><a href="shop.html"> 努比亚</a></li>
                                    <li><a href="shop.html"> 联想</a></li>
                                    <li><a href="shop.html"> 守护宝</a></li>
                                    <li><a href="shop.html"> 飞利浦</a></li>
                                    <li><a href="shop.html">正品好货</a></li>
                                    <li><a href="shop.html"> 以旧换新</a></li>
                                    <li><a href="shop.html"> 手机维修</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机配件</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【配件精选会场，全场9.9元起】</a></li>
                                    <li><a href="shop.html"> 手机壳</a></li>
                                    <li><a href="shop.html"> 手机耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙音箱</a></li>
                                    <li><a href="shop.html"> 手机贴膜</a></li>
                                    <li><a href="shop.html"> 手机存储卡</a></li>
                                    <li><a href="shop.html"> 数据线</a></li>
                                    <li><a href="shop.html"> 充电器</a></li>
                                    <li><a href="shop.html"> 无线充电器</a></li>
                                    <li><a href="shop.html"> 手机电池</a></li>
                                    <li><a href="shop.html"> 苹果周边</a></li>
                                    <li><a href="shop.html"> 移动电源</a></li>
                                    <li><a href="shop.html"> 自拍杆</a></li>
                                    <li><a href="shop.html"> 手机支架</a></li>
                                    <li><a href="shop.html"> 手机U盘</a></li>
                                    <li><a href="shop.html"> 车载配件</a></li>
                                    <li><a href="shop.html"> 手机饰品</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>智能设备</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【嗨爆双十一领券满999减100】</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 智能门锁</a></li>
                                    <li><a href="shop.html"> 平衡车</a></li>
                                    <li><a href="shop.html"> 无人机</a></li>
                                    <li><a href="shop.html"> 智能摄像头</a></li>
                                    <li><a href="shop.html"> 智能机器人</a></li>
                                    <li><a href="shop.html"> 智能手环</a></li>
                                    <li><a href="shop.html"> 智能手表</a></li>
                                    <li><a href="shop.html"> VR眼镜</a></li>
                                    <li><a href="shop.html"> 智能家居</a></li>
                                    <li><a href="shop.html"> 智能健康监测</a></li>
                                    <li><a href="shop.html"> 智能翻译机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>影音电子</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 音箱</a></li>
                                    <li><a href="shop.html"> 耳机/耳麦</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 运动耳机</a></li>
                                    <li><a href="shop.html"> MP3/MP4</a></li>
                                    <li><a href="shop.html"> 收音/收音机</a></li>
                                    <li><a href="shop.html"> 录音笔</a></li>
                                    <li><a href="shop.html"> 无线耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>电子教育</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 儿童手表</a></li>
                                    <li><a href="shop.html"> 学生电脑/学习机</a></li>
                                    <li><a href="shop.html"> 故事机</a></li>
                                    <li><a href="shop.html"> 翻译机</a></li>
                                    <li><a href="shop.html"> 步步高点读机</a></li>
                                    <li><a href="shop.html"> 小天才儿童手表</a></li>
                                    <li><a href="shop.html"> 点读机/笔</a></li>
                                    <li><a href="shop.html"> 电子书</a></li>
                                    <li><a href="shop.html"> 电子词典</a></li>
                                    <li><a href="shop.html"> 复读机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>二手优品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> iPhone 7</a></li>
                                    <li><a href="shop.html"> iPhone 8</a></li>
                                    <li><a href="shop.html"> iPhone X</a></li>
                                    <li><a href="shop.html"> iPhone 8P</a></li>
                                    <li><a href="shop.html"> iPhone 7P</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>跳蚤市场互联</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 尾号888靓号</a></li>
                                    <li><a href="shop.html"> 0月租号卡</a></li>
                                    <li><a href="shop.html"> 2元流量畅享</a></li>
                                    <li><a href="shop.html"> 20GB大流量</a></li>
                                    <li><a href="shop.html"> 超级靓号</a></li>
                                    <li><a href="shop.html"> 立即选号</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>营业厅</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【1元1GB腾讯APP免流】</a></li>
                                    <li><a href="shop.html"> 手机卡</a></li>
                                    <li><a href="shop.html"> 大流量卡</a></li>
                                    <li><a href="shop.html"> 宽带</a></li>
                                    <li><a href="shop.html"> 办套餐</a></li>
                                    <li><a href="shop.html"> 充话费/流量</a></li>
                                    <li><a href="shop.html"> 中国移动</a></li>
                                    <li><a href="shop.html"> 中国电信</a></li>
                                    <li><a href="shop.html"> 中国联通</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>数码服务产品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 数码综合服务馆：数码服务三十六计</a></li>
                                </ul>
                            </div>
                        </ul>
                    </li>
                    <li class="left-sub">
                        <a href="shop.html"> 图书 |</a>
                        <a href="shop.html"> 艺术 |</a>
                        <a href="shop.html"> 原版 | </a>
                        <a href="shop.html"> 文学 </a>
                        <ul class="left-sub-hid">
                            <div>
                                <li><a href="shop.html"> 手机频道</a></li>
                                <li><a href="shop.html"> 智能数码</a></li>
                                <li><a href="shop.html"> 以旧换新</a></li>
                                <li><a href="shop.html"> 网上营业厅</a></li>
                                <li><a href="shop.html"> 企业采购</a></li>
                                <li><a href="shop.html"> 跳蚤市场国际</a></li>
                                <li><a href="shop.html"> 二手优品</a></li>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机通讯</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【爆款手机￥11.11起】</a></li>
                                    <li><a href="shop.html"> 全部手机</a></li>
                                    <li><a href="shop.html"> 5G手机</a></li>
                                    <li><a href="shop.html"> iPhone</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                    <li><a href="shop.html"> 荣耀</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> realme</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 魅族</a></li>
                                    <li><a href="shop.html"> 诺基亚</a></li>
                                    <li><a href="shop.html"> 努比亚</a></li>
                                    <li><a href="shop.html"> 联想</a></li>
                                    <li><a href="shop.html"> 守护宝</a></li>
                                    <li><a href="shop.html"> 飞利浦</a></li>
                                    <li><a href="shop.html">正品好货</a></li>
                                    <li><a href="shop.html"> 以旧换新</a></li>
                                    <li><a href="shop.html"> 手机维修</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机配件</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【配件精选会场，全场9.9元起】</a></li>
                                    <li><a href="shop.html"> 手机壳</a></li>
                                    <li><a href="shop.html"> 手机耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙音箱</a></li>
                                    <li><a href="shop.html"> 手机贴膜</a></li>
                                    <li><a href="shop.html"> 手机存储卡</a></li>
                                    <li><a href="shop.html"> 数据线</a></li>
                                    <li><a href="shop.html"> 充电器</a></li>
                                    <li><a href="shop.html"> 无线充电器</a></li>
                                    <li><a href="shop.html"> 手机电池</a></li>
                                    <li><a href="shop.html"> 苹果周边</a></li>
                                    <li><a href="shop.html"> 移动电源</a></li>
                                    <li><a href="shop.html"> 自拍杆</a></li>
                                    <li><a href="shop.html"> 手机支架</a></li>
                                    <li><a href="shop.html"> 手机U盘</a></li>
                                    <li><a href="shop.html"> 车载配件</a></li>
                                    <li><a href="shop.html"> 手机饰品</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>智能设备</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【嗨爆双十一领券满999减100】</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 智能门锁</a></li>
                                    <li><a href="shop.html"> 平衡车</a></li>
                                    <li><a href="shop.html"> 无人机</a></li>
                                    <li><a href="shop.html"> 智能摄像头</a></li>
                                    <li><a href="shop.html"> 智能机器人</a></li>
                                    <li><a href="shop.html"> 智能手环</a></li>
                                    <li><a href="shop.html"> 智能手表</a></li>
                                    <li><a href="shop.html"> VR眼镜</a></li>
                                    <li><a href="shop.html"> 智能家居</a></li>
                                    <li><a href="shop.html"> 智能健康监测</a></li>
                                    <li><a href="shop.html"> 智能翻译机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>影音电子</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 音箱</a></li>
                                    <li><a href="shop.html"> 耳机/耳麦</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 运动耳机</a></li>
                                    <li><a href="shop.html"> MP3/MP4</a></li>
                                    <li><a href="shop.html"> 收音/收音机</a></li>
                                    <li><a href="shop.html"> 录音笔</a></li>
                                    <li><a href="shop.html"> 无线耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>电子教育</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 儿童手表</a></li>
                                    <li><a href="shop.html"> 学生电脑/学习机</a></li>
                                    <li><a href="shop.html"> 故事机</a></li>
                                    <li><a href="shop.html"> 翻译机</a></li>
                                    <li><a href="shop.html"> 步步高点读机</a></li>
                                    <li><a href="shop.html"> 小天才儿童手表</a></li>
                                    <li><a href="shop.html"> 点读机/笔</a></li>
                                    <li><a href="shop.html"> 电子书</a></li>
                                    <li><a href="shop.html"> 电子词典</a></li>
                                    <li><a href="shop.html"> 复读机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>二手优品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> iPhone 7</a></li>
                                    <li><a href="shop.html"> iPhone 8</a></li>
                                    <li><a href="shop.html"> iPhone X</a></li>
                                    <li><a href="shop.html"> iPhone 8P</a></li>
                                    <li><a href="shop.html"> iPhone 7P</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>跳蚤市场互联</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 尾号888靓号</a></li>
                                    <li><a href="shop.html"> 0月租号卡</a></li>
                                    <li><a href="shop.html"> 2元流量畅享</a></li>
                                    <li><a href="shop.html"> 20GB大流量</a></li>
                                    <li><a href="shop.html"> 超级靓号</a></li>
                                    <li><a href="shop.html"> 立即选号</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>营业厅</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【1元1GB腾讯APP免流】</a></li>
                                    <li><a href="shop.html"> 手机卡</a></li>
                                    <li><a href="shop.html"> 大流量卡</a></li>
                                    <li><a href="shop.html"> 宽带</a></li>
                                    <li><a href="shop.html"> 办套餐</a></li>
                                    <li><a href="shop.html"> 充话费/流量</a></li>
                                    <li><a href="shop.html"> 中国移动</a></li>
                                    <li><a href="shop.html"> 中国电信</a></li>
                                    <li><a href="shop.html"> 中国联通</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>数码服务产品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 数码综合服务馆：数码服务三十六计</a></li>
                                </ul>
                            </div>
                        </ul>
                    </li>
                    <li class="left-sub">
                        <a href="shop.html"> 医药健康 |</a>
                        <a href="shop.html"> 计生情趣 </a>
                        <ul class="left-sub-hid">
                            <div>
                                <li><a href="shop.html"> 手机频道</a></li>
                                <li><a href="shop.html"> 智能数码</a></li>
                                <li><a href="shop.html"> 以旧换新</a></li>
                                <li><a href="shop.html"> 网上营业厅</a></li>
                                <li><a href="shop.html"> 企业采购</a></li>
                                <li><a href="shop.html"> 跳蚤市场国际</a></li>
                                <li><a href="shop.html"> 二手优品</a></li>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机通讯</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【爆款手机￥11.11起】</a></li>
                                    <li><a href="shop.html"> 全部手机</a></li>
                                    <li><a href="shop.html"> 5G手机</a></li>
                                    <li><a href="shop.html"> iPhone</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                    <li><a href="shop.html"> 荣耀</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> realme</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 魅族</a></li>
                                    <li><a href="shop.html"> 诺基亚</a></li>
                                    <li><a href="shop.html"> 努比亚</a></li>
                                    <li><a href="shop.html"> 联想</a></li>
                                    <li><a href="shop.html"> 守护宝</a></li>
                                    <li><a href="shop.html"> 飞利浦</a></li>
                                    <li><a href="shop.html">正品好货</a></li>
                                    <li><a href="shop.html"> 以旧换新</a></li>
                                    <li><a href="shop.html"> 手机维修</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机配件</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【配件精选会场，全场9.9元起】</a></li>
                                    <li><a href="shop.html"> 手机壳</a></li>
                                    <li><a href="shop.html"> 手机耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙音箱</a></li>
                                    <li><a href="shop.html"> 手机贴膜</a></li>
                                    <li><a href="shop.html"> 手机存储卡</a></li>
                                    <li><a href="shop.html"> 数据线</a></li>
                                    <li><a href="shop.html"> 充电器</a></li>
                                    <li><a href="shop.html"> 无线充电器</a></li>
                                    <li><a href="shop.html"> 手机电池</a></li>
                                    <li><a href="shop.html"> 苹果周边</a></li>
                                    <li><a href="shop.html"> 移动电源</a></li>
                                    <li><a href="shop.html"> 自拍杆</a></li>
                                    <li><a href="shop.html"> 手机支架</a></li>
                                    <li><a href="shop.html"> 手机U盘</a></li>
                                    <li><a href="shop.html"> 车载配件</a></li>
                                    <li><a href="shop.html"> 手机饰品</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>智能设备</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【嗨爆双十一领券满999减100】</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 智能门锁</a></li>
                                    <li><a href="shop.html"> 平衡车</a></li>
                                    <li><a href="shop.html"> 无人机</a></li>
                                    <li><a href="shop.html"> 智能摄像头</a></li>
                                    <li><a href="shop.html"> 智能机器人</a></li>
                                    <li><a href="shop.html"> 智能手环</a></li>
                                    <li><a href="shop.html"> 智能手表</a></li>
                                    <li><a href="shop.html"> VR眼镜</a></li>
                                    <li><a href="shop.html"> 智能家居</a></li>
                                    <li><a href="shop.html"> 智能健康监测</a></li>
                                    <li><a href="shop.html"> 智能翻译机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>影音电子</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 音箱</a></li>
                                    <li><a href="shop.html"> 耳机/耳麦</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 运动耳机</a></li>
                                    <li><a href="shop.html"> MP3/MP4</a></li>
                                    <li><a href="shop.html"> 收音/收音机</a></li>
                                    <li><a href="shop.html"> 录音笔</a></li>
                                    <li><a href="shop.html"> 无线耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>电子教育</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 儿童手表</a></li>
                                    <li><a href="shop.html"> 学生电脑/学习机</a></li>
                                    <li><a href="shop.html"> 故事机</a></li>
                                    <li><a href="shop.html"> 翻译机</a></li>
                                    <li><a href="shop.html"> 步步高点读机</a></li>
                                    <li><a href="shop.html"> 小天才儿童手表</a></li>
                                    <li><a href="shop.html"> 点读机/笔</a></li>
                                    <li><a href="shop.html"> 电子书</a></li>
                                    <li><a href="shop.html"> 电子词典</a></li>
                                    <li><a href="shop.html"> 复读机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>二手优品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> iPhone 7</a></li>
                                    <li><a href="shop.html"> iPhone 8</a></li>
                                    <li><a href="shop.html"> iPhone X</a></li>
                                    <li><a href="shop.html"> iPhone 8P</a></li>
                                    <li><a href="shop.html"> iPhone 7P</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>跳蚤市场互联</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 尾号888靓号</a></li>
                                    <li><a href="shop.html"> 0月租号卡</a></li>
                                    <li><a href="shop.html"> 2元流量畅享</a></li>
                                    <li><a href="shop.html"> 20GB大流量</a></li>
                                    <li><a href="shop.html"> 超级靓号</a></li>
                                    <li><a href="shop.html"> 立即选号</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>营业厅</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【1元1GB腾讯APP免流】</a></li>
                                    <li><a href="shop.html"> 手机卡</a></li>
                                    <li><a href="shop.html"> 大流量卡</a></li>
                                    <li><a href="shop.html"> 宽带</a></li>
                                    <li><a href="shop.html"> 办套餐</a></li>
                                    <li><a href="shop.html"> 充话费/流量</a></li>
                                    <li><a href="shop.html"> 中国移动</a></li>
                                    <li><a href="shop.html"> 中国电信</a></li>
                                    <li><a href="shop.html"> 中国联通</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>数码服务产品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 数码综合服务馆：数码服务三十六计</a></li>
                                </ul>
                            </div>
                        </ul>
                    </li>
                    <li class="left-sub">
                        <a href="shop.html"> 理财 |</a>
                        <a href="shop.html"> 分期 |</a>
                        <a href="shop.html"> 保险 </a>
                        <ul class="left-sub-hid">
                            <div>
                                <li><a href="shop.html"> 手机频道</a></li>
                                <li><a href="shop.html"> 智能数码</a></li>
                                <li><a href="shop.html"> 以旧换新</a></li>
                                <li><a href="shop.html"> 网上营业厅</a></li>
                                <li><a href="shop.html"> 企业采购</a></li>
                                <li><a href="shop.html"> 跳蚤市场国际</a></li>
                                <li><a href="shop.html"> 二手优品</a></li>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机通讯</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【爆款手机￥11.11起】</a></li>
                                    <li><a href="shop.html"> 全部手机</a></li>
                                    <li><a href="shop.html"> 5G手机</a></li>
                                    <li><a href="shop.html"> iPhone</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                    <li><a href="shop.html"> 荣耀</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> realme</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 魅族</a></li>
                                    <li><a href="shop.html"> 诺基亚</a></li>
                                    <li><a href="shop.html"> 努比亚</a></li>
                                    <li><a href="shop.html"> 联想</a></li>
                                    <li><a href="shop.html"> 守护宝</a></li>
                                    <li><a href="shop.html"> 飞利浦</a></li>
                                    <li><a href="shop.html">正品好货</a></li>
                                    <li><a href="shop.html"> 以旧换新</a></li>
                                    <li><a href="shop.html"> 手机维修</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>手机配件</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【配件精选会场，全场9.9元起】</a></li>
                                    <li><a href="shop.html"> 手机壳</a></li>
                                    <li><a href="shop.html"> 手机耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙音箱</a></li>
                                    <li><a href="shop.html"> 手机贴膜</a></li>
                                    <li><a href="shop.html"> 手机存储卡</a></li>
                                    <li><a href="shop.html"> 数据线</a></li>
                                    <li><a href="shop.html"> 充电器</a></li>
                                    <li><a href="shop.html"> 无线充电器</a></li>
                                    <li><a href="shop.html"> 手机电池</a></li>
                                    <li><a href="shop.html"> 苹果周边</a></li>
                                    <li><a href="shop.html"> 移动电源</a></li>
                                    <li><a href="shop.html"> 自拍杆</a></li>
                                    <li><a href="shop.html"> 手机支架</a></li>
                                    <li><a href="shop.html"> 手机U盘</a></li>
                                    <li><a href="shop.html"> 车载配件</a></li>
                                    <li><a href="shop.html"> 手机饰品</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>智能设备</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【嗨爆双十一领券满999减100】</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 智能门锁</a></li>
                                    <li><a href="shop.html"> 平衡车</a></li>
                                    <li><a href="shop.html"> 无人机</a></li>
                                    <li><a href="shop.html"> 智能摄像头</a></li>
                                    <li><a href="shop.html"> 智能机器人</a></li>
                                    <li><a href="shop.html"> 智能手环</a></li>
                                    <li><a href="shop.html"> 智能手表</a></li>
                                    <li><a href="shop.html"> VR眼镜</a></li>
                                    <li><a href="shop.html"> 智能家居</a></li>
                                    <li><a href="shop.html"> 智能健康监测</a></li>
                                    <li><a href="shop.html"> 智能翻译机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>影音电子</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 音箱</a></li>
                                    <li><a href="shop.html"> 耳机/耳麦</a></li>
                                    <li><a href="shop.html"> 智能音箱</a></li>
                                    <li><a href="shop.html"> 运动耳机</a></li>
                                    <li><a href="shop.html"> MP3/MP4</a></li>
                                    <li><a href="shop.html"> 收音/收音机</a></li>
                                    <li><a href="shop.html"> 录音笔</a></li>
                                    <li><a href="shop.html"> 无线耳机</a></li>
                                    <li><a href="shop.html"> 蓝牙耳机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>电子教育</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 儿童手表</a></li>
                                    <li><a href="shop.html"> 学生电脑/学习机</a></li>
                                    <li><a href="shop.html"> 故事机</a></li>
                                    <li><a href="shop.html"> 翻译机</a></li>
                                    <li><a href="shop.html"> 步步高点读机</a></li>
                                    <li><a href="shop.html"> 小天才儿童手表</a></li>
                                    <li><a href="shop.html"> 点读机/笔</a></li>
                                    <li><a href="shop.html"> 电子书</a></li>
                                    <li><a href="shop.html"> 电子词典</a></li>
                                    <li><a href="shop.html"> 复读机</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>二手优品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> iPhone 7</a></li>
                                    <li><a href="shop.html"> iPhone 8</a></li>
                                    <li><a href="shop.html"> iPhone X</a></li>
                                    <li><a href="shop.html"> iPhone 8P</a></li>
                                    <li><a href="shop.html"> iPhone 7P</a></li>
                                    <li><a href="shop.html"> OPPO</a></li>
                                    <li><a href="shop.html"> vivo</a></li>
                                    <li><a href="shop.html"> 三星</a></li>
                                    <li><a href="shop.html"> 华为</a></li>
                                    <li><a href="shop.html"> 小米</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>跳蚤市场互联</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 尾号888靓号</a></li>
                                    <li><a href="shop.html"> 0月租号卡</a></li>
                                    <li><a href="shop.html"> 2元流量畅享</a></li>
                                    <li><a href="shop.html"> 20GB大流量</a></li>
                                    <li><a href="shop.html"> 超级靓号</a></li>
                                    <li><a href="shop.html"> 立即选号</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>营业厅</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 【1元1GB腾讯APP免流】</a></li>
                                    <li><a href="shop.html"> 手机卡</a></li>
                                    <li><a href="shop.html"> 大流量卡</a></li>
                                    <li><a href="shop.html"> 宽带</a></li>
                                    <li><a href="shop.html"> 办套餐</a></li>
                                    <li><a href="shop.html"> 充话费/流量</a></li>
                                    <li><a href="shop.html"> 中国移动</a></li>
                                    <li><a href="shop.html"> 中国电信</a></li>
                                    <li><a href="shop.html"> 中国联通</a></li>
                                </ul>
                            </div>
                            <div class="left-hid-s">
                                <p><a href="shop.html"><b>数码服务产品</b></a></p>
                                <ul class="hid-box">
                                    <li><a href="shop.html"> 数码综合服务馆：数码服务三十六计</a></li>
                                </ul>
                            </div>
                        </ul>
                    </li>

                </ul>
            </div>


            <!-- Swiper -->
            <div class="swiper-container-bannerlun">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="shop.html"><img src="images/banner-bj_(1).jpg"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="shop.html"><img src="images/banner-bj_(2).jpg"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="shop.html"><img src="images/banner-bj_(3).jpg"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="shop.html"><img src="images/banner-bj_(4).jpg"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="shop.html"><img src="images/banner-bj_(5).jpg"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="shop.html"><img src="images/banner-bj_(6).jpg"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="shop.html"><img src="images/banner-bj_(7).jpg"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="shop.html"><img src="images/banner-bj_(8).jpg"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="shop.html"><img src="images/banner-bj_(9).jpg"></a>
                    </div>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination" id="points"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next btn-right"></div>
                <div class="swiper-button-prev btn-left"></div>
            </div>

        </div>
    </section>


    <!-- 抢购列表一 -->
    <div class="main-tit">—— <b>抢购列表一</b>——</div>
    <section class="section3">
        <ul class="rush-list">
            <li class="rush-item">
                <div class="shadow">
                    <div class="sec3-img">
                        <img src="./images/1.png">
                        <div class="get-time" data-timenow="2019-11-30,10:00:00">距离抢购开始还有<br>1小时5分10秒</div>
                    </div>
                    <div class="info">
                        <h3 title="小米小爱蓝牙音箱随身版 白色">小米小爱蓝牙音箱随身版 白色</h3>
                        <p>小巧便携，一键唤醒小爱</p>
                        <p><span>24.50元</span><del>49元</del></p>
                        <button>即将开始</button>
                    </div>
                </div>
            </li>
            <li class="rush-item">
                <div class="shadow">
                    <div class="sec3-img"><img src="./images/2.png">
                        <div class="get-time" data-timenow="2019-11-30,12:00:00">距离抢购开始还有<br>1小时5分10秒</div>
                    </div>
                    <div class="info">
                        <h3 title="贝医生0+防蛀健齿牙膏 100克">贝医生0+防蛀健齿牙膏 100克</h3>
                        <p>强健牙釉质，牙齿更坚固</p>
                        <p><span>1.00元</span><del>12.9元</del></p>
                        <button>即将开始</button>
                    </div>
                </div>
            </li>
            <li class="rush-item">
                <div class="shadow">
                    <div class="sec3-img"><img src="./images/3.jpg">
                        <div class="get-time" data-timenow="2019-11-30,14:00:00">距离抢购开始还有<br>1小时5分10秒</div>
                    </div>
                    <div class="info">
                        <h3 title="小米路由器4C 白色">小米路由器4C 白色</h3>
                        <p>小巧便携，一键唤醒小爱</p>
                        <p><span>24.50元</span><del>49元</del></p>
                        <button>即将开始</button>
                    </div>
                </div>
            </li>
            <li class="rush-item">
                <div class="shadow">
                    <div class="sec3-img"><img src="./images/4.jpg">
                        <div class="get-time" data-timenow="2019-12-30,16:00:00">距离抢购开始还有<br>1小时5分10秒</div>
                    </div>
                    <div class="info">
                        <h3 title="小米旅行箱 青春款 20英寸 黄色 20寸">小米旅行箱 青春款 20英寸 黄色 20寸</h3>
                        <p>环保材料，轻便重量</p>
                        <p><span>199.00元</span><del>249元</del></p>
                        <button>即将开始</button>
                    </div>
                </div>
            </li>
            <li class="rush-item">
                <div class="shadow">
                    <div class="sec3-img"><img src="./images/5.jpg">
                        <div class="get-time" data-timenow="2019-12-30,18:00:00">距离抢购开始还有<br>1小时5分10秒</div>
                    </div>
                    <div class="info">
                        <h3 title="米家直流变频落地扇 白色">米家直流变频落地扇 白色</h3>
                        <p>用科技创造自然风</p>
                        <p><span>279.00元</span><del>349元</del></p>
                        <button>即将开始</button>
                    </div>
                </div>
            </li>
            <li class="rush-item">
                <div class="shadow">
                    <div class="sec3-img"><img src="./images/6.jpg">
                        <div class="get-time" data-timenow="2019-12-30,20:00:00">距离抢购开始还有<br>1小时5分10秒</div>
                    </div>
                    <div class="info">
                        <h3 title="烟灶套装（天然气）">烟灶套装（天然气）</h3>
                        <p>点火排烟，风随火动</p>
                        <p><span>1999.00元</span><del>2298元</del></p>
                        <button>即将开始</button>
                    </div>
                </div>
            </li>
        </ul>
    </section>



    <div class="main-tit">—— <b>抢购列表二</b>——</div>
    <div class="wrap purch">
        <ul>
            <li class="box">
                <div class="times">距离抢购<b class="end">开始</b>还有<div class="times-sub"></div>
                </div><a href="shop.html"><img src="images/buy_(1).jpg">
                </a>
                <div class="box-right"><a href="shop.html"><b> 美的（Midea）</b>NPS10-15B小太阳电取暖器气家用电热扇烤火炉立式多功能节能办公室神器 NPS10-15B
                    </a>
                    <p><b class="redprice">299.00元</b><s>329.00元</s></p>
                    <div class="click">等待中...</div>
                </div>
            </li>
            <li class="box">
                <div class="times">距离抢购<b class="end">开始</b>还有<div class="times-sub"></div>
                </div><a href="shop.html"><img src="images/buy_(2).jpg"></a>
                <div class="box-right"><a href="shop.html"> 科沃斯(Ecovacs)扫地机器人DL33家用<b>全自动</b>超薄智能洗擦拖地宝一体机吸尘 </a>
                    <p><b class="redprice">3399.00元</b><s>4099.00元</s></p>
                    <div class="click">等待中...</div>
                </div>
            </li>
            <li class="box">
                <div class="times">距离抢购<b class="end">开始</b>还有<div class="times-sub"></div>
                </div><a href="shop.html"><img src="images/buy_(3).jpg"></a>
                <div class="box-right"><a href="shop.html"> 小米(MI)<b>智能</b>床头灯<b>智能台灯</b>家居简约彩色灯泡卧室灯 </a>
                    <p><b class="redprice">199.00元</b><s>236.00元</s></p>
                    <div class="click">等待中...</div>
                </div>
            </li>
            <li class="box">
                <div class="times">距离抢购<b class="end">开始</b>还有<div class="times-sub"></div>
                </div><a href="shop.html"><img src="images/buy_(4).jpg"></a>
                <div class="box-right"><a href="shop.html"> <b> 九阳（Joyoung）</b>豆浆机不用手洗立体加热智能预约破壁豆浆机 DJ06R-Kmini白 </a>
                    <p><b class="redprice">399.00元</b><s>499.00元</s></p>
                    <div class="click">等待中...</div>
                </div>
            </li>
            <li class="box">
                <div class="times">距离抢购<b class="end">开始</b>还有<div class="times-sub"></div>
                </div><a href="shop.html"><img src="images/buy_(5).jpg"></a>
                <div class="box-right"><a href="shop.html"><b> 小度智能音箱 </b>百度智能音响 WiFi/蓝牙音箱 、智能机器人、AI生活助手、2600+技能、带娃神器故事机 </a>
                    <p><b class="redprice">199.00元</b><s>299.00元</s></p>
                    <div class="click">等待中...</div>
                </div>
            </li>
            <li class="box">
                <div class="times">距离抢购<b class="end">开始</b>还有<div class="times-sub"></div>
                </div><a href="shop.html"><img src="images/buy_(6).jpg"></a>
                <div class="box-right"> <a href="shop.html"><b> Apple 苹果 </b>iPhone 11Pro 手机 暗夜绿色 全网通 256GB </a>
                    <p><b class="redprice">9488.00元</b><s>9999.00元</s></p>
                    <div class="click">等待中...</div>
                </div>
            </li>
            <li class="box" data-start="2019-12:11 17:24:00" data-start="2019-12:11 17:54:00">
                <div class="times">距离抢购<b class="end">开始</b>还有<div class="times-sub"></div>
                </div><a href="shop.html"><img src="images/buy_(7).jpg"></a>
                <div class="box-right"><a href="shop.html"> <b> 佳能（Canon）</b>EOS 800D 单反相机 单反机身 单反套机 （EF-S 18-55mm f/4-5.6 IS STM
                        单反镜头）</a>
                    <p><b class="redprice">4999.00元</b><s>5299.00元</s></p>
                    <div class="click">等待中...</div>
                </div>
            </li>
            <li class="box" data-time="{start:'2019-12-11 17:24:00', end:'2019-12-11 17:54:09'}">
                <div class="times">距离抢购<b class="end">开始</b>还有<div class="times-sub"></div>
                </div><a href="shop.html"><img src="images/buy_(8).jpg"></a>
                <div class="box-right"><a href="shop.html"> <b> 凤禧珠宝</b>玉手镯满绿色翡翠玉镯子玉石玉器圆镯女款送妈妈女友生日礼物中码 </a>
                    <p><b class="redprice">1599.00元</b><s>1999.00元</s></p>
                    <div class="click">等待中...</div>
                </div>
            </li>
            <li class="box">
                <div class="times">距离抢购<b class="end">开始</b>还有<div class="times-sub"></div>
                </div><a href="shop.html"><img src="images/buy_(5).jpg"></a>
                <div class="box-right"><a href="shop.html"><b> 小度智能音箱 </b>百度智能音响 WiFi/蓝牙音箱 、智能机器人、AI生活助手、2600+技能、带娃神器故事机 </a>
                    <p><b class="redprice">199.00元</b><s>299.00元</s></p>
                    <div class="click">等待中...</div>
                </div>
            </li>
            <li class="box">
                <div class="times">距离抢购<b class="end">开始</b>还有<div class="times-sub"></div>
                </div><a href="shop.html"><img src="images/buy_(6).jpg"></a>
                <div class="box-right"> <a href="shop.html"><b> Apple 苹果 </b>iPhone 11Pro 手机 暗夜绿色 全网通 256GB </a>
                    <p><b class="redprice">9488.00元</b><s>9999.00元</s></p>
                    <div class="click">等待中...</div>
                </div>
            </li>
            <li class="box" data-start="2019-12:11 17:24:00" data-start="2019-12:11 17:54:00">
                <div class="times">距离抢购<b class="end">开始</b>还有<div class="times-sub"></div>
                </div><a href="shop.html"><img src="images/buy_(7).jpg"></a>
                <div class="box-right"><a href="shop.html"> <b> 佳能（Canon）</b>EOS 800D 单反相机 单反机身 单反套机 （EF-S 18-55mm f/4-5.6 IS STM
                        单反镜头）</a>
                    <p><b class="redprice">4999.00元</b><s>5299.00元</s></p>
                    <div class="click">等待中...</div>
                </div>
            </li>
           
            <li class="box" data-time="{start:'2019-12-11 17:24:00', end:'2019-12-11 17:54:09'}">
                <div class="times">距离抢购<b class="end">开始</b>还有<div class="times-sub"></div>
                </div><a href="shop.html"><img src="images/buy_(8).jpg"></a>
                <div class="box-right"><a href="shop.html"> <b> 凤禧珠宝</b>玉手镯满绿色翡翠玉镯子玉石玉器圆镯女款送妈妈女友生日礼物中码 </a>
                    <p><b class="redprice">1599.00元</b><s>1999.00元</s></p>
                    <div class="click">等待中...</div>
                </div>
            </li>
        </ul>
    </div>



    <!-- 商品列表 -->
    <div>
        <div class="main-tit">—— <b>商品列表</b>——</div>
        <ul class="wrap shopwrap">
            <li class="main">
                <a href="shop.html"><img src="images/phone1.jpg"></a>
                <div class="main-detail">
                    <div class="detail-title">【超级爆品】一加 OnePlus 7 Pro 2K+90Hz 流体屏 骁龙855旗舰 4800万超广角三摄 8GB+256GB
                        星雾蓝全面屏拍照游戏手机</div>
                    <div class="detail-price"><b class="price">￥3899.00</b class="price">
                        <div class="detail-car">加入购物车</div>
                    </div>
                </div>
            </li>
            <li class="main"><a href="shop.html"><img src="images/phone2.jpg"></a>
                <div class="main-detail">
                    <div class="detail-title">荣耀V20 游戏手机 麒麟980芯片 魅眼全视屏 4800万深感相机 6GB+128GB 魅丽红 移动联通电信4G全面屏手机</div>
                    <div class="detail-price"><b class="price">¥1899.00</b class="price">
                        <div class="detail-car">加入购物车</div>
                    </div>
                </div>
            </li>
            <li class="main"><a href="shop.html"><img src="images/phone3.jpg"></a>
                <div class="main-detail">
                    <div class="detail-title">【Apple iPhone 11 (A2223) 128GB 黑色 移动联通电信4G手机 双卡双待</div>
                    <div class="detail-price"><b class="price">¥5999.00</b>
                        <div class="detail-car">加入购物车</div>
                    </div>
                </div>
            </li>
            <li class="main"><a href="shop.html"><img src="images/phone4.jpg"></a>
                <div class="main-detail">
                    <div class="detail-title">荣耀10青春版 幻彩渐变 2400万AI自拍 全网通版6GB+64GB 铃兰白 移动联通电信4G全面屏手机 双卡双待</div>
                    <div class="detail-price"><b class="price">¥899.00</b class="price">
                        <div class="detail-car">加入购物车</div>
                    </div>
                </div>
            </li>
            <li class="main"><a href="shop.html"><img src="images/phone5.jpg"></a>
                <div class="main-detail">
                    <div class="detail-title">荣耀9X 麒麟810 4000mAh续航 4800万超清夜拍 6.59英寸升降全面屏 全网通6GB+64GB 魅海蓝</div>
                    <div class="detail-price"><b class="price">¥1299.00</b class="price">
                        <div class="detail-car">加入购物车</div>
                    </div>
                </div>
            </li>
            <li class="main"><a href="shop.html"><img src="images/phone6.jpg"></a>
                <div class="main-detail">
                    <div class="detail-title"> 荣耀20 李现同款 4800万超广角AI四摄 3200W美颜自拍 麒麟Kirin980全网通版8GB+128GB 幻夜黑 全面屏手机
                    </div>
                    <div class="detail-price"><b class="price">¥2099.00</b>
                        <div class="detail-car">加入购物车</div>
                    </div>
                </div>
            </li>
            <li class="main"><a href="shop.html"><img src="images/phone7.jpg"></a>
                <div class="main-detail">
                    <div class="detail-title">华为 HUAWEI Mate 30 5G 麒麟990 4000万超感光徕卡影像双超级快充8GB+256GB亮黑色5G全网通手机</div>
                    <div class="detail-price"><b class="price">¥5499.00</b>
                        <div class="detail-car">加入购物车</div>
                    </div>
                </div>
            </li>
            <li class="main"><a href="shop.html"><img src="images/phone8.jpg"></a>
                <div class="main-detail">
                    <div class="detail-title">华为 HUAWEI Mate 30 Pro 5G 麒麟990 OLED环幕屏双4000万徕卡电影四摄8GB+256GB青山黛5G全网通手机
                    </div>
                    <div class="detail-price"><b class="price">¥6899.00</b class="price">
                        <div class="detail-car">加入购物车</div>
                    </div>
                </div>
            </li>
            <li class="main"><a href="shop.html"><img src="images/phone9.jpg"></a>
                <div class="main-detail">
                    <div class="detail-title">【新品抢购】Redmi 8A 5000mAh大电量 大字体大音量大内存 骁龙八核处理器 AI人脸解锁 莱茵护眼全面屏 4GB+64GB耀夜黑
                        游戏智能老人手机 小米 红米</div>
                    <div class="detail-price"><b class="price">¥699.00</b class="price">
                        <div class="detail-car">加入购物车</div>
                    </div>
                </div>
            </li>
            <li class="main"><a href="shop.html"><img src="images/phone10.jpg"></a>
                <div class="main-detail">
                    <div class="detail-title">小米CC9e 索尼4800万旗舰相机 3200万美颜自拍 4030mAh 屏幕指纹 白色恋人 6GB+64GB 游戏智能拍照手机</div>
                    <div class="detail-price"><b class="price">¥1001.00</b>
                        <div class="detail-car">加入购物车</div>
                    </div>
                </div>
            </li>
        </ul>
    </div>


    <!-- 页脚 -->
    <div class="main-tit">—— <b>END </b>——</div>
    <footer>

        <ul class="footer-top">
            <li>
                <div class="iconfont icon-wuyoushouhou"></div>
                <div class="footer-top-tit">
                    <div><a href="shop.html">正品保障</a></div>
                    <div>正品保障、提供发票</div>
                </div>
            </li>
            <li>
                <div class="iconfont icon-yunliankeji_gongyinglianfuben"></div>
                <div class="footer-top-tit">
                    <div><a href="shop.html">急速物流</a></div>
                    <div>如约送货、送货入户</div>
                </div>
            </li>
            <li>
                <div class="iconfont icon-shouhouwuyou"></div>
                <div class="footer-top-tit">
                    <div><a href="shop.html">售后无忧</a></div>
                    <div>30天包退、365天包换</div>
                </div>
            </li>
            <li>
                <div class="iconfont icon-tesefuwu"></div>
                <div class="footer-top-tit">
                    <div><a href="shop.html">特色服务</a></div>
                    <div>私人订制家电套餐</div>
                </div>
            </li>
            <li>
                <div class="iconfont icon-bangzhuzhongxin1"></div>
                <div class="footer-top-tit">
                    <div><a href="shop.html">帮助中心</a></div>
                    <div>你的购物指南</div>
                </div>
            </li>
        </ul>
        <ul class="footer-bottom">
            <li>
                <div class="footer-bottom-tit">购物指南</div>
                <ul>
                    <li><a href="shop.html">保障范围</a></li>
                    <li><a href="shop.html">购物流程</a></li>
                    <li><a href="shop.html">会员介绍</a></li>
                    <li><a href="shop.html">生活旅行</a></li>
                    <li><a href="shop.html">常见问题</a></li>
                    <li><a href="shop.html">联系客服购物指南</a></li>
                </ul>
            </li>
            <li>
                <div class="footer-bottom-tit">特色服务</div>
                <ul>
                    <li><a href="shop.html">保障范围</a></li>
                    <li><a href="shop.html">购物流程</a></li>
                    <li><a href="shop.html">会员介绍</a></li>
                    <li><a href="shop.html">生活旅行</a></li>
                    <li><a href="shop.html">常见问题</a></li>
                    <li><a href="shop.html">联系客服购物指南</a></li>
                </ul>
            </li>
            <li>
                <div class="footer-bottom-tit">帮助中心</div>
                <ul>
                    <li><a href="shop.html">保障范围</a></li>
                    <li><a href="shop.html">购物流程</a></li>
                    <li><a href="shop.html">会员介绍</a></li>
                    <li><a href="shop.html">生活旅行</a></li>
                    <li><a href="shop.html">常见问题</a></li>
                    <li><a href="shop.html">联系客服购物指南</a></li>
                </ul>
            </li>
            <li>
                <div class="footer-bottom-tit">新手指导</div>
                <ul>
                    <li><a href="shop.html">保障范围</a></li>
                    <li><a href="shop.html">购物流程</a></li>
                    <li><a href="shop.html">会员介绍</a></li>
                    <li><a href="shop.html">生活旅行</a></li>
                    <li><a href="shop.html">常见问题</a></li>
                    <li><a href="shop.html">联系客服购物指南</a></li>
                </ul>
            </li>
        </ul>
        <div class="footer-copy">
            Copyright ©2020 版权所有@跳蚤市场商城 蜀ICP备00000000<br>
            本网站直接或间接向消费者推销商品或者服务的商业宣传均属于“广告” （包装及参数、售后保障等商品信息除外）<br>
            流量统计
        </div>
    </footer>
    <script src="js/swiper.min.js"></script>
    <script src="js/index.js"></script>
</body>
