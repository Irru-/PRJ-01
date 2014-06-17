function notEmpty(user, pw, helperMsg) {
	
	var volg = true;

    var login = document.getElementById(user);
    if (!login.value.length) {
        alert(helperMsg);
        login.focus();
        return false;
    }

    var password = document.getElementById(pw);
    if (!password.value.length) {
        alert(helperMsg);
        password.focus();
        return false;
    }

    return volg;
}

function notEmptyTwo(ideal, helperMsg) {
	
	var volg = true;

    var login = document.getElementById(ideal);
    if (!login.value.length) {
        alert(helperMsg);
        login.focus();
        return false;
    }

    return volg;
}
