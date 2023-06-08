<?php include_once '../include/header.php';?>
    <script src="js/locker_find.js"></script>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css"> -->
    <link rel="stylesheet" href="../css/locker_find.css">
</head>
<body>
    <div class="wrap">
        <header>
            <div class="title">
                <h1>
                    찾을 함을<br>
                    선택해주세요
                </h1>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="javascript:window.history.back();">뒤로가기</a>
                    </li>
                    <li>
                        <a href="../main/index.php">처음으로</a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="content_top">
            <div class="select_wrap">
                <div>
                    <span>종로 오피스텔점</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="select_menu">
                    <span>전체 구역</span>
                    <i class="fa-solid fa-chevron-down"></i>
                    <ul>
                        <li onclick="location.href='../locker_find_a/locker_find_a.php'">A 구역</li>
                        <li onclick="location.href='../locker_b/locker_b.php'">B 구역</li>
                        <li onclick="location.href='../locker_c/locker_c.php'">C 구역</li>
                        <li onclick="location.href='../locker_d/locker_d.php'">D 구역</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="main_text">
                <div>
                    <p>선택한 보관함</p>
                    <span class="hide_text"><strong>0</strong> 구역 <strong>00</strong> 번</span>
                </div>
                <div class="color_box">
                    <span>미사용함</span>
                    <span>선택함</span>
                </div>
            </div>
            <div class="main_img">
                <div class="locker_wrap">
                    <ul class="locker_a">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li class="locker_text">
                            <span>A</span>
                        </li>
                        <li></li>
                        <li style="background-color: #dcdcdc;"></li>
                        <li></li>
                        <li></li>
                        <li style="border-bottom: 1px solid black;"></li>
                        <li></li>
                    </ul>
                    <ul class="locker_b">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li class="locker_text">
                            <span>B</span>
                        </li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <ul class="locker_bottom">
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </ul>
                    <ul class="locker_c">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li class="locker_text">
                            <span>C</span>
                        </li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <ul class="locker_d">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li class="locker_text">
                            <span>D</span>
                        </li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
            <div class="main_btn">
                <span>선택</span>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </div>

        <div class="phone_wrap">
            <div class="phone_inner">
                <div class="phone_text">
                    <div>
                        <p>선택한 보관함</p>
                        <span class="hide_text"><strong>0</strong> 구역 <strong>00</strong> 번</span>
                    </div>
                    <div class="color_box">
                        <span>사용중</span>
                        <span>선택중</span>
                    </div>
                </div>
                <div class="phone_btn_gr">
                    <div>
                        <span>선택
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                        
                    </div>
                </div>
            </div>
        </div>

        <?php include_once '../include/footer.php';?>