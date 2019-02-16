
function checkname(){

    var z=document.forms["myForm"]["username"].value;
    var name = z.replace(/(&nbsp;)|\s|\u00a0/g, '');
    if (name == null || name == "" || name.length < 3) {
        alert("用户名长度不能少于三位且不能有空!");
        return false;
    }
}
function checkemail() {
    var x=document.forms["myForm"]["email"].value;
    var atpos=x.indexOf("@");
    var dotpos=x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
        alert("不是一个有效的 e-mail 地址");
        return false;
    }

}


function checknic() {
    var w=document.forms["myForm"]["nickname"].value;
    var nic = w.replace(/(&nbsp;)|\s|\u00a0/g, '');

    if (nic == null || nic == "") {
        alert("请按要求输入昵称!");
        return false;
    }
}



function checkpass() {
    var y=document.forms["myForm"]["password"].value;
    if (y.length < 6 || y.length > 16) {
        alert("请检查密码长度,长度应在6-16位数");
        return false;
    }else if(y.replace(/(&nbsp;)|\s|\u00a0/g, '')=="" || y.replace(/(&nbsp;)|\s|\u00a0/g, '')==null){
        alert("密码不能含空格!");
        return false;
    }
}


function validateForm() {
    var z=document.forms["myForm"]["username"].value;
    var name = z.replace(/(&nbsp;)|\s|\u00a0/g, '');
    if (name == null || name == " " || name.length < 3) {
        alert("用户名长度不能少于三位且不能有空!");
        return false;
    }

    var w=document.forms["myForm"]["nickname"].value;
    var nic = w.replace(/(&nbsp;)|\s|\u00a0/g, '');

    if (nic == null || nic == " ") {
        alert("请按要求输入昵称!");
        return false;
    }

    var y=document.forms["myForm"]["password"].value;
    if (y.length < 6 || y.length > 16) {
        alert("请检查密码长度,长度应在6-16位数");
        return false;
    }else if(y.replace(/(&nbsp;)|\s|\u00a0/g, '')=="" || y.replace(/(&nbsp;)|\s|\u00a0/g, '')==null){
        alert("密码不能含空格!");
        return false;
    }

    var x=document.forms["myForm"]["email"].value;
    var atpos=x.indexOf("@");
    var dotpos=x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
        alert("不是一个有效的 e-mail 地址");
        return false;
    }
    var p=document.forms["myForm"]["phone"].value;
    if (p.length < 11 || p.length > 11) {
        alert("请检查手机号长度,长度应在11位数");
        return false;
    }

    var q=document.forms["myForm"]["qq"].value;
    if (q.length < 6 || q.length > 11) {
        alert("请检查qq号长度");
        return false;
    }

    return true
}