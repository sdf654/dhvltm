<?php include_once '../include/header.php';?>
    <link rel="stylesheet" href="../css/password.css">
</head>
<body>
    <div class="wrap">
        <header>
            <div class="title">
                <h1>
                    장소 및 보관함 비밀번호를<br>
                    입력해주세요
                </h1>
                <h1 class="phone_title">
                    장소 및<br>
                    보관함 비밀번호를<br>
                    입력해주세요
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
            <table>
                <tr>
                    <td>장소</td>
                    <td>
                        <span>종로 오피스텔점</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </td>
                </tr>
                <tr>
                    <td>비밀번호</td>
                    <td class="input_text">
                        <input type="password" placeholder="0000">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <span class="excess_charge">초과 요금 발생시</span>
                        <span class="excess_charge">초과 요금 미발생시</span>
                    </td>
                </tr>
            </table>
            <div class="main_btn" onclick="location.href='../pay/pay.php'">
                <span>완료</span>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </div>

        <div class="content_mobile">
            <div>
                <span>장소</span>
                <div>
                    <span>종로 오피스텔점</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
            </div>
            <div>
                <span>비밀번호</span>
                <input type="password" placeholder="0000" class="input_text">
            </div>
            <div class="point_text">
                <span class="excess_charge">초과 요금 발생시</span>
                <span class="excess_charge">초과 요금 미발생시</span>
            </div>
            <div class="main_btn" onclick="location.href='../pay/pay.php'">
                <span>완료
                    <i class="fa-solid fa-arrow-right"></i>
                </span>
                
            </div>
        </div>

        <?php include_once '../include/footer.php';?>