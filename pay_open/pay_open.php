<?php include_once '../include/header.php';?>
    <link rel="stylesheet" href="../css/pay_open.css">
</head>
<body>

    <div class="wrap">
        <header>
            <div class="title">
                <h1>
                    결제 수단을<br>
                    입력해주세요
                </h1>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="javascript:window.history.back();">뒤로가기</a>
                    </li>
                    <li>
                        <a href="../main/index.html">처음으로</a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="content">
            <div class="info_text">
                <span>해당 정보를 휴대폰으로<br> 촬영 및 입력 해주세요</span>
            </div>
            <div class="phone_img">
                <img src="../img/phone.png" alt="핸드폰">
                <div class="phone_text_wrap">
                    <div class="phone_text">
                        <table>
                            <tr>
                                <td>보관함 번호</td>
                                <td>
                                    <input type="text" placeholder="0 구역 00번">
                                </td>
                            </tr>
                            <tr>
                                <td>전화번호</td>
                                <td>
                                    <input type="tel" placeholder="010 0000 0000">
                                </td>
                            </tr>
                            <tr>
                                <td>이메일</td>
                                <td>
                                    <input type="email" placeholder="0000@naver.com">
                                </td>
                            </tr>
                            <tr>
                                <td>비밀번호</td>
                                <td>
                                    <input type="password" placeholder="0000">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="phone_text2">
                        <table>
                            <tr>
                                <td>보관 기간</td>
                                <td>
                                    <span>2023 - 05 - 12</span><span class="point_text">12:12</span><br>
                                    <span>2023 - 05 - 12</span><span class="point_text">15:12</span>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td>초과 금액</td>
                                <td>
                                    <span class="point_text">0000원</span>
                                </td>
                            </tr> -->
                        </table>
                    </div>
                </div>
            </div>

            <div class="pay_menu">
                <div>
                    <span>열기</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            
        </div>

        <?php include_once '../include/footer.php';?>