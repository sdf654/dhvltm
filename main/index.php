<?php include_once '../include/header.php';?>
    <link rel="stylesheet" href="../css/index.css">
    
</head>
<body>
    <div class="wrap">
        <header>
            <div class="title">
                <h1>
                    사용하실 메뉴를<br>
                    선택해주세요
                </h1>
            </div>
            <nav class="lang">
                <ul>
                    <li>
                        <a href="#">한국어</a>
                    </li>
                    <li>
                        <a href="#">English</a>
                    </li>
                    <li>
                        <a href="#">中國語</a>
                    </li>
                    <li>
                        <a href="#">日本語</a>
                    </li>
                </ul>
            </nav>
        </header>
    
        <div class="content">
            <div class="link_wrap">
                <div onclick="location.href='../nationality/nationality.php'">
                    <div>
                        <h2>보관함 예약</h2>
                        <span>물품 보관을 위해 함을 예약합니다.</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
                <div>
                    <div>
                        <h2>보관함 열기</h2>
                        <span>보관중인 함을 열고 닫습니다.</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
                <div>
                    <div>
                        <h2>물품 찾기</h2>
                        <span>보관중인 물품을 꺼냅니다.</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
            <div class="content_img">
                <img src="../img/shutterstock_1755741122.png" alt="캐리어">
                <div class="big_shadow">
                    <img src="../img/dark_8.svg" alt="그림자1">
                </div>
                <div class="small_shadow">
                    <img src="../img/dark_14.svg" alt="그림자2">
                </div>
                <div class="small_shadow2">
                    <img src="../img/dark_14.svg" alt="그림자3">
                </div>
            </div>
            <div class="side_text">
                <span>무인 물품 보관함</span>
            </div>
        </div>

        <nav class="footer_lang">
            <ul>
                <li>
                    <a href="#">한국어</a>
                </li>
                <li>
                    <a href="#">English</a>
                </li>
                <li>
                    <a href="#">中國語</a>
                </li>
                <li>
                    <a href="#">日本語</a>
                </li>
            </ul>
        </nav>

        <?php include_once '../include/footer.php';?>