    function check(form)
    {

        var count = 0;
        if(form.q01.value =="famous")
        {
            count++;
        }
        if(form.q02.value == "visit")
        {
            count++;
        }
        if(form.q03.value == "has won")
        {
            count++;
        }
        if(form.q04.value == "see")
        {
            count++;
        }
       if(form.q05.value == "on")
        {
            count++;
        }
        if(form.q06.value == "took")
        {
            count++;
        }
        if(form.q07.value == "on")
        {
            count++;
        }
        if(form.q08.value == "even though")
        {
            count++;
        }
        if(form.q09.value == "puts on")
        {
            count++;
        }
        if(form.q10.value == "can")
        {
            count++;
        }
        if(form.q11.value == "until")
        {
            count++;
        }
        if(form.q12.value == "to buy")
        {
            count++;
        }
        if(form.q13.value == "could")
        {
            count++;
        }
        if(form.q14.value == "to")
        {
            count++;
        }
        if(form.q15.value == "put on")
        {
            count++;
        }
        if(form.q16.value == "going")
        {
            count++;
        }
        if(form.q17.value == "a lot of")
        {
            count++;
        }
        if(form.q18.value == "a prosperous")
        {
            count++;
        }
        if(form.q19.value == "affet")
        {
            count++;
        }
        if(form.q20.value == "tell")
        {
            count++;
        }
        if(form.q21.value== "to")
        {
            count++;
        }
        if(form.q21.value== "raw")
        {
            count++;
        }
        if(form.q23.value == "down")
        {
            count++;
        }
        if(form.q24.value == "if")
        {
            count++;
        }
        if(form.q25.value == "raving")
        {
            count++;
        }
        
        var comment;
        if (count<13) comment=" Bạn cần phải cải thiện khả năng tiếng anh của mình nhiều hơn";
        else if((count>=13)&&(count<=20)) comment="Bạn có khả năng tiếng Anh khá";
        else comment="Bạn có khả năng tiếng Anh tốt";




        document.getElementById("KetQua").value = count;

        alert("Số câu đúng của bạn là: "+count+"/25"+"\n"+comment+"\n"+"Bạn có thể đăng kí tư vấn với chúng tôi để có được thông tin khóa học phù hợp với trình độ của bạn"
        );
    }// JavaScript source code

 