    function check(form)
    {
        var qt01 = form.q01.value;
        var qt02 = form.q02.value;
        var qt03 = form.q03.value;
        var qt04 = form.q04.value;
        var qt05 = form.q05.value;
        var qt06 = form.q06.value;
        var qt07 = form.q07.value;
        var qt08 = form.q08.value;
        var qt09 = form.q09.value;
        var qt10 = form.q10.value;
        var qt11 = form.q11.value;
        var qt12 = form.q12.value;
        var qt13 = form.q13.value;
        var qt14 = form.q14.value;
        var qt15 = form.q15.value;
        var qt16 = form.q16.value;
        var qt17 = form.q17.value;
        var qt18 = form.q18.value;
        var qt19 = form.q19.value;
        var qt20 = form.q20.value;
        var qt21 = form.q21.value;
        var qt22 = form.q22.value;
        var qt23 = form.q23.value;
        var qt24 = form.q24.value;
        var qt25 = form.q25.value;
        var qt26 = form.q26.value;
        var qt27 = form.q27.value;
        var qt28 = form.q28.value;
        var qt29 = form.q29.value;
        var qt30 = form.q30.value;




        var count = 0;
        if(form.q01.value =="b")
        {
            count++;
        }
        if(form.q02.value == "a")
        {
            count++;
        }
        if(form.q03.value == "d")
        {
            count++;
        }
        if(form.q04.value == "a")
        {
            count++;
        }
       if(form.q05.value == "b")
        {
            count++;
        }
        if(form.q06.value == "c")
        {
            count++;
        }
        if(form.q07.value == "a")
        {
            count++;
        }
        if(form.q08.value == "b")
        {
            count++;
        }
        if(form.q09.value == "a")
        {
            count++;
        }
        if(form.q10.value == "d")
        {
            count++;
        }
        if(form.q11.value == "c")
        {
            count++;
        }
        if(form.q12.value == "a")
        {
            count++;
        }
        if(form.q13.value == "b")
        {
            count++;
        }
        if(form.q14.value == "b")
        {
            count++;
        }
        if(form.q15.value == "d")
        {
            count++;
        }
        if(form.q16.value == "a")
        {
            count++;
        }
        if(form.q17.value == "c")
        {
            count++;
        }
        if(form.q18.value == "c")
        {
            count++;
        }
        if(form.q19.value == "b")
        {
            count++;
        }
        if(form.q20.value == "c")
        {
            count++;
        }
        if(form.q21.value == "a")
        {
            count++;
        }
        if(form.q22.value== "a")
        {
            count++;
        }
        if(form.q23.value== "c")
        {
            count++;
        }
        if(form.q24.value == "d")
        {
            count++;
        }
        if(form.q25.value == "b")
        {
            count++;
        }
        if(form.q26.value == "d")
        {
            count++;
        }
        if(form.q27.value == "a")
        {
            count++;
        }
        if(form.q28.value == "b")
        {
            count++;
        }
        if(form.q29.value == "b")
        {
            count++;
        }
        if(form.q30.value == "a")
        {
            count++;
        }
        var comment;
        if (count<15) comment=" Bạn cần phải cải thiện kỹ năng tiếng Anh của mình nhiều hơn";
        else if((count>15)&&(count<=25)) comment="Bạn có nền tảng tiếng Anh khá tốt";
        else comment="Nền tảng tiếng Anh của bạn rất tốt";

        document.getElementById("KetQua").value = count;
        alert("Số câu đúng của bạn là: "+count+"/30"+"\n"+comment+"\n"+"Bạn có thể đăng kí tư vấn với chúng tôi để có được thông tin khóa học phù hợp với trình độ của bạn"
        );

    }// JavaScript source code
