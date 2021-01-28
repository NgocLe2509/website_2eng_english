function limitLengStart ()
{
    var a;
    a = document.getElementById("email");
    if (a.value.length > a.maxLength) a.value = a.value.slice(0, a.maxLength);
}

function limitLengStart1 ()
{
    var a;
    a = document.getElementById("sdt");
    if (a.value.length > a.maxLength) a.value = a.value.slice(0, a.maxLength);
}
