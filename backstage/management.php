<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="../nprogress.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .loading {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-color: rgba(0, 0, 0, .6);
            font-size: 30px;
        }
        .fanHui{

            position: relative;
            display: block;
            padding: 0.75rem 1.25rem;
            margin-bottom: -1px;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.125);
        }
        a {
            text-decoration: none;
        }

        a:link {
            color: black;
            text-decoration: none;
        } /* 未被访问的链接 */
        a:visited {
            color: black;
        } /* 已被访问的链接 */
        a:hover {
            text-decoration: underline;
            color: #67ADF2;
        } /* 鼠标指针移动到链接上 */
        a:active {
            color: black;
            text-decoration: underline;
        }
    </style>
    <script src="../nprogress.js">
        //style="background-color: #dbe0e4"
    </script>
</head>
<body style="background-image: url('https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=695304989,2451570367&fm=26&gp=0.jpg')">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="../index.php">首页</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../allPosts.php">帖子</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../edition.php">板块</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../helped.php">帮助</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container pt-4">
    <div><h2>后台管理</h2></div>
<hr>
    <div class="row">
        <aside class="col-md-3">
            <div class="list-group">
                <a class="list-group-item list-group-item-action" href="management.php">论坛宗旨</a>
                <a class="list-group-item list-group-item-action" href="user.php">用户管理</a>
                <a class="list-group-item list-group-item-action" href="card.php">帖子管理</a>
                <a class="list-group-item list-group-item-action" href="notice.php">公告管理</a>
                <a class="list-group-item-action fanHui" href="../index.php">返回首页</a>
            </div>
        </aside>
        <main id="main" class="col-md-9" >
            <h2>论坛宗旨</h2>
            <div align="left"><strong><font face="微软雅黑"><font size="4">一　用户相关规章条款</font></font></strong></div>
            <br>
            <div align="left">
                <font face="微软雅黑">
                    <font size="3">用户使用本论坛时，不得利用用户个人信息设置，发表以下内容：</font>
                </font>
            </div>
            <br>
            <div align="left">
                <div align="left">
                    <font face="微软雅黑">
                        <font size="3">1. 包含任何违反国家有关法律法规的内容。</font>
                    </font>
                </div>
                <br>
                <div align="left">
                    <font face="微软雅黑">
                        <font size="3">2. 带有恶意的、不文明的、易产生歧义与误解的字词符号。</font>
                    </font>
                </div>
                <br>
                <div align="left">
                    <font face="微软雅黑">
                        <font size="3">3. 使用高仿用户名、恶意模仿其他用户、组织或官方工作人员。</font>
                    </font>
                </div>
                <br>
                <div align="left">
                    <font face="微软雅黑">
                        <font size="3">4. 直接或间接地宣传一切涉及广告、商业性质的对象。</font>
                    </font>
                </div>
                <br>
                <div align="left">
                    <font face="微软雅黑">
                        <font size="3">5. 含有性相关或强烈性暗示、影响用户体验（超长头像头衔）的内容。</font>
                    </font>
                </div>
            </div>
            <br>
            <div align="left"><strong><font face="微软雅黑"><font size="4">二　其它行为规范</font></font></strong></div>
            <br>
            <div align="left">
                <font face="微软雅黑">
                    <font size="3">1. 友好礼貌尊重他人</font>
                </font>
            </div>
            <div align="left">
                <font size="3">
                    <font face="微软雅黑">　　论坛里的每位用户都应当得到相同的尊重。如果你对别人的观点持不同意见，我们鼓励你参与讨论，与作者辩论，但是请不要采取漫骂诋毁等形式进行人身攻击。尊重他人的同时也是在尊重你自己。</font>
                </font>
            </div>
            <br>
            <div align="left">
                <font face="微软雅黑">
                    <font size="3">2. 正确归类帖子主题</font>
                </font>
            </div>
            <div align="left">
                <font face="微软雅黑">
                    <font size="3">　　为了方便用户更好地找到自己所需的内容，论坛开启了帖子分类的功能。用户在发表主题时应正确归类帖子，根据主题的内容性质选择恰当的主题分类，若实在不清楚确切的分类可选择与内容最为接近的分类，并在有必要的情况下联系论坛管理团队做适当的迁移。</font>
                </font>
            </div>
            <br>
            <div align="left">
                <font face="微软雅黑">
                    <font size="3">3. 继续话题善用搜索</font>
                </font>
            </div>
            <div align="left">
                <font face="微软雅黑">
                    <font size="3">　　请善用搜索。在打算发新帖前，如果发现已有相同或类似的帖子正在进行讨论时，请尽量在已有的帖子中继续相关的话题，避免出现重复的内容。</font>
                </font>
            </div>
            <br>
            <div align="left">
                <font face="微软雅黑">
                    <font size="3">4. 积极参与监督举报</font>
                </font>
            </div>
            <div align="left">
                <font size="3">
                    <font face="微软雅黑">　　为了更好地维护论坛，保持良性发展，本论坛施行全民监督举报政策。若发现他人违反论坛规章守则、发表不恰当内容之时，可向管理团队举报并说明情况。</font>
                </font>
            </div>
            <br>
            <div align="left">
                <font face="微软雅黑">
                    <font size="3">5. 遵守游戏厂商条款</font>
                </font>
            </div>
            <div align="left">
                <font face="微软雅黑">
                    <font size="3">　　《我的世界》（Minecraft）是 Microsoft 旗下 Mojang 开发的 3D 沙盒游戏，该游戏覆盖多个平台且不同版本由不同厂商进行开发与/或发行，每个版本都有其对应的用户条款。本论坛的用户如在进行相关平台与/或版本游戏的讨论时，应当同时了解、遵守其对应的条款，包括 Mojang EULA，Microsoft ToS、Sony PlayStation ToS、iTunes Store ToS 及 Google Play ToS。</font>
                </font>
            </div>

            <hr>
        </main>
        <hr>
    </div>
</div>

<nav class=" bg-dark navbar-dark ">
    <div style="text-align: center; ">
        <h3 class="text-white" style="margin-bottom: -3px">欢迎来到本网站</h3>
    </div>
</nav>

<div class="loading">正在玩命加载中...</div>
<script src="../jquery.js"></script>
<script>
    $(function ($) {
        // $(document)
        //   .ajaxStart(function () {
        //     // 只要有 ajax 请求发生 就会执行
        //     $('.loading').fadeIn()
        //     // 显示加载提示
        //     console.log('注意即将要开始请求了')
        //   })
        //   .ajaxStop(function () {
        //     // 只要有 ajax 请求结束 就会执行
        //     $('.loading').fadeOut()
        //     // 结束提示
        //     console.log('请求结束了')
        //   })

        $(document)
            .ajaxStart(function () {
                NProgress.start()
            })
            .ajaxStop(function () {
                NProgress.done()
            })

        // 有一个独立的作用域，顺便确保页面加载完成执行
        $('.list-group-item').on('click', function () {
            var url = $(this).attr('href')
            $('#main').load(url + ' #main > *')
            return false
        })
    })
</script>
</body>
</html>