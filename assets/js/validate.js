function registerMember() {
    var  name = document.getElementById('name').value;
    var errorName = document.getElementById('error-name');
    var reGexName = /^[^\d+]*[\d+]{0}[^\d+]*$/;
    var reGexSpect = /^[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/;
    var  email = document.getElementById('email').value;
    var errorEmail = document.getElementById('error-email');
    var reGexEmail = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/i;
    var  phone = document.getElementById('phone').value;
    var errorPhone = document.getElementById('error-phone');
    var reGexPhone = /^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/;

    if (name == '') {
        errorName.innerHTML = 'Vui lòng không bỏ trống tên';
        return false;
    }
    else{
        if (!reGexName.test(name)) {
            errorName.innerHTML = 'Vui lòng nhập đúng định dạng';
            return false;
        }
        else{
            if (reGexSpect.test(name)) {
                errorName.innerHTML = 'Vui lòng nhập đúng định dạng';
                return false;
            }
            else{
               errorName.innerHTML = ''; 
           }
       }
   }
   if (phone == '') {
    errorPhone.innerHTML = 'Vui lòng không bỏ trống số điện thoại';
    return false;
    }
    else{
        if (!reGexPhone.test(phone)) {
            errorPhone.innerHTML = 'Vui lòng nhập đúng định dạng';
            return false;
        }
        else{
           errorPhone.innerHTML = ''; 
       }
    }
   if (email == '') {
    errorEmail.innerHTML = 'Vui lòng không bỏ trống email';
    return false;
    }
    else{
        if (!reGexEmail.test(email)) {
            errorEmail.innerHTML = 'Vui lòng nhập đúng định dạng';
            return false;
        }
        else{
           errorEmail.innerHTML = ''; 
       }
    }

return true;
}
function registerReader() {
    var  id = document.getElementById('id').value;
    var errorID = document.getElementById('error-id');
    var reGexID = /^\d+$/;
    var  name = document.getElementById('name').value;
    var errorName = document.getElementById('error-name');
    var reGexName = /^[^\d+]*[\d+]{0}[^\d+]*$/;
    var reGexSpect = /^[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/;
    var  email = document.getElementById('email').value;
    var errorEmail = document.getElementById('error-email');
    var reGexEmail = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/i;
    var  phone = document.getElementById('phone').value;
    var errorPhone = document.getElementById('error-phone');
    var reGexPhone = /^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/;

    if (id == '') {
    errorID.innerHTML = 'Vui lòng không nhập mã độc giả';
    return false;
    }
    else{
        if (!reGexID.test(id)) {
            errorID.innerHTML = 'Vui lòng nhập đúng định dạng';
            return false;
        }
        else{
           errorID.innerHTML = ''; 
       }
    }
    if (name == '') {
        errorName.innerHTML = 'Vui lòng không bỏ trống tên';
        return false;
    }
    else{
        if (!reGexName.test(name)) {
            errorName.innerHTML = 'Vui lòng nhập đúng định dạng';
            return false;
        }
        else{
            if (reGexSpect.test(name)) {
                errorName.innerHTML = 'Vui lòng nhập đúng định dạng';
                return false;
            }
            else{
               errorName.innerHTML = ''; 
           }
       }
   }
   if (phone == '') {
    errorPhone.innerHTML = 'Vui lòng không bỏ trống số điện thoại';
    return false;
    }
    else{
        if (!reGexPhone.test(phone)) {
            errorPhone.innerHTML = 'Vui lòng nhập đúng định dạng';
            return false;
        }
        else{
           errorPhone.innerHTML = ''; 
       }
    }
   if (email == '') {
    errorEmail.innerHTML = 'Vui lòng không bỏ trống email';
    return false;
    }
    else{
        if (!reGexEmail.test(email)) {
            errorEmail.innerHTML = 'Vui lòng nhập đúng định dạng';
            return false;
        }
        else{
           errorEmail.innerHTML = ''; 
       }
    }

return true;
}
/*----------------------------------*/
function registerUser(){
    // user
    var  user = document.getElementById('user').value;
    var errorUser = document.getElementById('error-user');
    var reGexUser = /^\d+$/;
    // pass
    var  passwd = document.getElementById('passwd').value;
    var errorPasswd = document.getElementById('error-passwd');
    var reGexSpect = /^[a-zA-Z0-9]+$/;;
    // var reGexSpect = /^[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/;
    // user
    if (user == '') {
        errorUser.innerHTML = 'Vui lòng không bỏ trống user';
        return false;
    }
    else{
        if (!reGexUser.test(user)) {
            errorUser.innerHTML = 'Vui lòng nhập đúng định dạng';
            return false;
        }
    }
    // end user

    // pass
    if (passwd != '') {
        if (!reGexSpect.test(passwd)) {
            errorPasswd.innerHTML = 'Vui lòng nhập đúng định dạng';
            return false;
        }
        else{
           errorPasswd.innerHTML = '';
       }
    }
    // end pass
}