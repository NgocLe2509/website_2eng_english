    function check(form)
    {

        var count = 0;
        if(form.q01.value =="b")
        {
            count++;
        }
        if(form.q02.value == "b")
        {
            count++;
        }
        if(form.q03.value == "c")
        {
            count++;
        }
        if(form.q04.value == "d")
        {
            count++;
        }
       if(form.q05.value == "c")
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
        if(form.q10.value == "c")
        {
            count++;
        }
        if(form.q11.value == "d")
        {
            count++;
        }
        if(form.q12.value == "b")
        {
            count++;
        }
        if(form.q13.value == "c")
        {
            count++;
        }
        if(form.q14.value == "d")
        {
            count++;
        }
        if(form.q15.value == "b")
        {
            count++;
        }
        if(form.q16.value == "b")
        {
            count++;
        }
        if(form.q17.value == "d")
        {
            count++;
        }
        if(form.q18.value == "b")
        {
            count++;
        }
        if(form.q19.value == "b")
        {
            count++;
        }
        if(form.q20.value == "b")
        {
            count++;
        }

        var comment;
        if (count<=10) comment=" Bạn cần phải cải thiện kỹ năng Reading của mình nhiều hơn";
        else if((count>10)&&(count<=15)) comment="Kỹ năng Reading của bạn khá tốt";
        else comment="Kỹ năng Listening của bạn rất tốt";





        document.getElementById("KetQua").value = count;
        alert("Số câu đúng của bạn là: "+count+"/20"+"\n"+comment+"\n"+"Bạn có thể đăng kí tư vấn với chúng tôi để có được thông tin khóa học phù hợp với trình độ của bạn"
        );
    }// JavaScript source code
 