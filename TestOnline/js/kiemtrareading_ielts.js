    function check(form)
    {

        var count = 0;
        if(form.q01.value =="tombs")
        {
            count++;
        }
        if(form.q02.value == "book")
        {
            count++;
        }
        if(form.q03.value == "monks")
        {
            count++;
        }
        if(form.q04.value == "Dutch")
        {
            count++;
        }
       if(form.q05.value == "smuggling")
        {
            count++;
        }
        if(form.q06.value == "India")
        {
            count++;
        }
        if(form.q07.value == "clippers")
        {
            count++;
        }
        if(form.q08.value == "b")
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
        if(form.q13.value == "c")
        {
            count++;
        }
        if(form.q14.value == "B")
        {
            count++;
        }
        if(form.q15.value == "E")
        {
            count++;
        }
        if(form.q16.value == "G")
        {
            count++;
        }
        if(form.q17.value == "A")
        {
            count++;
        }
        if(form.q18.value == "C")
        {
            count++;
        }
        if(form.q19.value == "B")
        {
            count++;
        }
        if(form.q20.value == "C")
        {
            count++;
        }
        if(form.q21.value == "A")
        {
            count++;
        }
        if(form.q22.value== "C")
        {
            count++;
        }
        if(form.q23.value== "B")
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
        if(form.q26.value == "d")
        {
            count++;
        }
        if(form.q27.value == "a")
        {
            count++;
        }
        if(form.q28.value == "c")
        {
            count++;
        }
        if(form.q29.value == "a")
        {
            count++;
        }
        if(form.q30.value == "b")
        {
            count++;
        }
        var comment;
        if (count<15) comment=" Bạn cần phải cải thiện kỹ năng Reading nhiều hơn nếu muốn đạt kết quả cao trong kì thi Ielts";
        else if((count>=15)&&(count<=25)) comment="Bạn có kĩ năng Reading khá tốt";
        else comment="Kĩ năng Reading của bạn rất tốt";





        document.getElementById("KetQua").value = count;
        alert("Số câu đúng của bạn là: "+count+"/30"+"\n"+comment+"\n"+"Bạn có thể đăng kí tư vấn với chúng tôi để có được thông tin khóa học phù hợp với trình độ của bạn"
        );
    }// JavaScript source code

