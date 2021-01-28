    function check(form)
    {

        var count = 0;
        if(form.q01.value =="c")
        {
            count++;
        }
        if(form.q02.value == "b")
        {
            count++;
        }
        if(form.q03.value == "b")
        {
            count++;
        }
        if(form.q04.value == "a")
        {
            count++;
        }
       if(form.q05.value == "d")
        {
            count++;
        }
        if(form.q06.value == "b")
        {
            count++;
        }
        if(form.q07.value == "b")
        {
            count++;
        }
        if(form.q08.value == "c")
        {
            count++;
        }
        if(form.q09.value == "c")
        {
            count++;
        }
        if(form.q10.value == "b")
        {
            count++;
        }
        if(form.q11.value == "a")
        {
            count++;
        }
        if(form.q12.value == "a")
        {
            count++;
        }
        if(form.q13.value == "a")
        {
            count++;
        }
        if(form.q14.value == "b")
        {
            count++;
        }
        if(form.q15.value == "a")
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
        if(form.q18.value == "d")
        {
            count++;
        }
        if(form.q19.value == "c")
        {
            count++;
        }
        if(form.q20.value == "c")
        {
            count++;
        }
        if(form.q21.value == "b")
        {
            count++;
        }
        var comment;
        if (count<=10) comment=" Bạn cần phải cải thiện kỹ năng Listening của mình nhiều hơn";
        else if((count>10)&&(count<=16)) comment="Kỹ năng Listening của bạn khá tốt";
        else comment="Kỹ năng Listening của bạn rất tốt";





        document.getElementById("KetQua").value = count;
        alert("Số câu đúng của bạn là: "+count+"/21"+"\n"+comment+"\n"+"Bạn có thể đăng kí tư vấn với chúng tôi để có được thông tin khóa học phù hợp với trình độ của bạn"
        );
    }// JavaScript source code

