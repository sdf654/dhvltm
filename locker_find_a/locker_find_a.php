<?php include_once '../include/header.php';?>
    <script src="js/locker_find_a.js"></script>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css"> -->
    <link rel="stylesheet" href="../css/locker_find_a.css">
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
                    <span>A 구역</span>
                    <i class="fa-solid fa-chevron-down"></i>
                    <ul>
                        <li onclick="location.href='../locker/locker.php'">전체 구역</li>
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
                <div class="locker_left locker_wrap">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="locker_right locker_wrap">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <ul class="locker_middle">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <ul class="locker_middle_img">
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <ul class="locker_middle">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li style="background-color: #E7F7FE;" class="select_locker"></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <ul>
                        <li></li>
                        <li style="background-color: #E7F7FE;" class="select_locker"></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <ul>
                        <li></li>
                        <li></li>
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

        <?php include_once '../include/footer.php';?>