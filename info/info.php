<?php include_once '../include/header.php';?>
    <script src="js/info.js"></script>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css"> -->
    <link rel="stylesheet" href="../css/info.css">
</head>
<body>
    
    <div class="wrap">
        <header>
            <div class="title">
                <h1>
                    정보를<br>
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
            <div>
                <span>할인정보</span>
                <p>3시간 - 0000원</p>
                <span>시간 초과 시 발생 비용</span>
                <p>1시간 - 000원</p>
            </div>
            <div class="phone_info_top">
                <div>
                    <span>보관함 번호</span>
                    <p>0구역 00번</p>
                </div>
                <div>
                    <span>할인 정보</span>
                    <p>3시간 - 000원</p>
                </div>
            </div>
            <div class="info_wrap">
                <table>
                    <tr>
                        <td>
                            <span>보관함 번호</span>
                        </td>
                        <td>
                            <input type="text" placeholder="0 구역 00번">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>전화번호</span>
                        </td>
                        <td>
                            <input type="tel" placeholder="010 0000 0000">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>이메일</span>
                        </td>
                        <td class="mail_wrap">
                            <input type="email" placeholder="0000">
                            <span>@</span>
                            <div>
                                <span>이메일 선택</span>
                                <i class="fa-solid fa-chevron-down"></i>
                                <ul>
                                    <li>직접입력</li>
                                    <li>gmail.com</li>
                                    <li>naver.com</li>
                                    <li>daum.net</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>비밀번호</span>
                        </td>
                        <td>
                            <input type="password" placeholder="0000">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>비밀번호 확인</span>
                        </td>
                        <td>
                            <input type="password" placeholder="0000">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="phone_info_wrap">
                <div>
                    <span>전화번호</span>
                    <input type="tel" placeholder="010 0000 0000">
                </div>
                <div class="mail_box">
                    <span>이메일</span>
                    <input type="email" placeholder="000000">
                    <strong>@</strong>
                    <div>
                        <span>이메일 선택</span>
                        <i class="fa-solid fa-chevron-down"></i>
                        <ul>
                            <li>직접입력</li>
                            <li>gmail.com</li>
                            <li>naver.com</li>
                            <li>daum.net</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <span>비밀번호</span>
                    <input type="password" placeholder="0000">
                </div>
                <div>
                    <span>비밀번호 재입력</span>
                    <input type="password" placeholder="0000">
                </div>
            </div>
            <div class="main_btn" onclick="location.href='../pay/pay.php'">
                <span>완료
                    <i class="fa-solid fa-arrow-right"></i>
                </span>
                
            </div>
        </div>

        <?php include_once '../include/footer.php';?>