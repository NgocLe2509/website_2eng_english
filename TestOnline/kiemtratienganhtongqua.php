<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra Tiếng Anh tổng quát</title>
    <script src="./js/kiemtratienganhtongquat.js" type="text/javascript"></script>
    <link rel="stylesheet" href="./css/kiemtratienganhtongquat.css">

    <link rel="stylesheet" href="../css/header_footer.css">

    <script src='../js/header_footer.js'></script>
    <script src='../js/NutTop.js'></script>	

</head>
<body>

<?php include("../Header_Footer/header_footer.php"); ?>

        <div id="Lin_Kt">
            <h1> Test kiểm tra trình độ Tiếng Anh tổng quát</h1>
            <form  method="post">
                <b>Questions 1-10.</b>In this section you must type the word which best fits each space in the texts.<br />
                <p align="center"><b>THE SYDNEY OPERA HOUSE</b></p>
                <p>
                    The Sydney Opera House is a very beautiful and important building in Australia. It is one of the
                    most (1) <input class="khunginput" type="text" name="q01" />  places in the country and millions of people (2) <input class="khunginput" type="text" name="q02" />
                    the opera house each year. Since it opened in 1973, it (3) <input class="khunginput" type="text" name="q03" />  many prizes for its design. It is amazing to (4) <input class="khunginput" type="text" name="q04" />
                    its bright white walls above the blue water of Sydney Harbour. Many people think it shows how clever and creative Australians can be.
                    <br />
                    <b>THEN AND NOW</b>
                    The construction of the Sydney Opera House was not quick. Building started (5) <input class="khunginput" type="text" name="q05" /> 2 March 1959 and it (6) <input class="khunginput" type="text" name="q06" />
                    many years to finish. Engineers spent over 4 years (7) <input class="khunginput" type="text" name="q07" />  the roof, but it was (8) <input class="khunginput" type="text" name="q08" /> finally complete in 1973. many Australians were upset by the cost and delays of the project, they were extremely happy about the final design.Today the Sydney Opera House
                    (9) <input class="khunginput" type="text" name="q09" /> thousands of shows every year. It is a cultural centre where people (10) <input type="text" class="khunginput" name="q10" /> enjoy concerts, plays, ballet and of course, the opera. Even people who do not enjoy the performing arts, love to come and admire its unique design.
                </p> <br /><br />
                <b>Questions 11-25.</b>In this section you must type the word or phrase which best completes each sentence.<br />
                <p>
                            11. To get to the hospital, go straight on class="khunginput" <input type="text" name="q11" />
                            the end of the street and then turn right.<br />
                            12. My father intends <input class="khunginput" type="text" name="q12" />
                              a new car this year.<br />
                            13. I’m not sure, but it <input class="khunginput" type="text" name="q13" />
                             rain later.<br />
                            14. Mary looks up <input type="text" class="khunginput" name="q14" />
                             her sister because her sister is so kind.<br />
                            15. Sometimes it is difficult for children to <input class="khunginput" type="text" name="q15" />
                             their shoes, so their parents need to help them before they go out.<br />
                            16. Let’s consider <input class="khunginput" type="text" name="q16" />
                             swimming for the next social event.<br />
                            17. In Vietnam, you can read <input class="khunginput" type="text" name="q17" />
                             news about the national football team.<br />
                            18. The new laws should help families save money so that all citizens have <input class="khunginput" type="text" name="q18" /> 
                            future.<br />
                            19. We must be careful to reduce pollution, or it will <input class="khunginput" type="text" name="q19" />
                            our environment dramatically.<br />
                            20. You should never <input class="khunginput" type="text" name="q20" />
                            a lie to your mother.<br />
                            21. Exhibits in the museum have items which date <input class="khunginput" type="text" name="q21" /> 
                             more than 500 years.<br />
                            22. I don’t think Lucy was treated fairly. It seems like she really got a <input class="khunginput" type="text" name="q22" />
                             deal.<br />
                            23. You can listen to the radio, but please turn it <input class="khunginput" type="text" name="q23" />
                             so I can study.<br />
                            24. The weather will probably be fine tomorrow, but even <input class="khunginput" type="text" name="q24" />
                             it rains, we can still have a picnic.<br />
                            25. Jim is always ranting and <input class="khunginput" type="text" name="q25" />
                             about things which bother him.<br />
                </p><br /><br />               
                <br><p><input class="button" type="submit" name="submit" value="submit" onclick="check(this.form)"></p></br>
                <p><input class="back" type="submit" name="back" value="Quay về"></p>
                <input type="hidden" name="KetQua" id="KetQua" value="">
            </form>
        </div>

    <?php 
        if(isset($_POST['submit'])){
            if(isset($_SESSION['UserID'])){
                $TenBaiTest = "Kiểm tra kĩ năng tiếng Anh tổng quát";
                $TongSoCau = 25;
                $SoCauDung = $_POST['KetQua'];
                $timestamp = time();
                $ThoiGianTest = date("F d, Y h:i:s", $timestamp);
                addBaiTest($user_login, $TenBaiTest, $TongSoCau, $SoCauDung, $ThoiGianTest);
            }
        }
    ?>
</body>
</html>