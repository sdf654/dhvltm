<?php include_once '../include/header.php';?>
    <link rel="stylesheet" href="../css/nationality.css">
</head>

<body>
    <div class="wrap">
        <header>
            <div class="title">
                <h1>
                    국적을<br>
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

        <div class="content">
            <div class="link_wrap">
                <div onclick="location.href='../locker/locker.php'">
                    <div>
                        <h2>내국인</h2>
                    </div>
                    <div>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
                <div onclick="location.href='../locker/locker.php'">
                    <div>
                        <h2>외국인</h2>
                    </div>
                    <div>
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
            <div class="content_img">
                <img src="../img/earth.png" alt="지구">
                <div class="big_shadow">
                    <img src="../img/dark_8.svg" alt="그림자1">
                </div>
            </div>
        </div>

        <?php include_once '../include/footer.php';?>