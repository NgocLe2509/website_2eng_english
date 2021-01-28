    function check(form)
    {

        var count = 0;
        if(form.q01.value =="warehouse")
        {
            count++;
        }
        if(form.q02.value == "Hitcher")
        {
            count++;
        }
        if(form.q03.value == "supermarket")
        {
            count++;
        }
        if(form.q04.value == "bakery")
        {
            count++;
        }
       if(form.q05.value == "ARW204")
        {
            count++;
        }
        if(form.q06.value == "advertisements")
        {
            count++;
        }
        if(form.q07.value == "newspaper")
        {
            count++;
        }
        if(form.q08.value == "agency")
        {
            count++;
        }
        if(form.q09.value == "Atutors")
        {
            count++;
        }
        if(form.q10.value == "feedback")
        {
            count++;
        }
        if(form.q11.value == "a")
        {
            count++;
        }
        if(form.q12.value == "b")
        {
            count++;
        }
        if(form.q13.value == "a")
        {
            count++;
        }
        if(form.q14.value == "a")
        {
            count++;
        }
        if(form.q15.value == "b")
        {
            count++;
        }
        if(form.q16.value == "C")
        {
            count++;
        }
        if(form.q17.value == "B")
        {
            count++;
        }
        if(form.q18.value == "E")
        {
            count++;
        }
        if(form.q19.value == "H")
        {
            count++;
        }
        if(form.q20.value == "G")
        {
            count++;
        }
        if(form.q21.value == "a")
        {
            count++;
        }
        if(form.q22.value== "b")
        {
            count++;
        }
        if(form.q23.value== "a")
        {
            count++;
        }
        if(form.q24.value == "c")
        {
            count++;
        }
        if(form.q25.value == "b")
        {
            count++;
        }
        if(form.q26.value == "c")
        {
            count++;
        }
        if(form.q27.value == "clean")
        {
            count++;
        }
        if(form.q28.value == "residents")
        {
            count++;
        }
        if(form.q29.value == "visitors")
        {
            count++;
        }
        if(form.q30.value == "sleep")
        {
            count++;
        }
        var comment;
        if (count<15) comment=" Bạn cần phải cải thiện kỹ năng Listening nhiều hơn nếu muốn đạt kết quả cao trong kì thi Ielts";
        else if((count>=15)&&(count<=25)) comment="Bạn có kĩ năng Listening khá tốt";
        else comment="Kĩ năng Listening của bạn rất tốt";





        document.getElementById("KetQua").value = count;
        alert("Số câu đúng của bạn là: "+count+"/30"+"\n"+comment+"\n"+"Bạn có thể đăng kí tư vấn với chúng tôi để có được thông tin khóa học phù hợp với trình độ của bạn"
        );
    }// JavaScript source code

