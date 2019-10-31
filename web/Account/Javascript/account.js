function comment() {
    let comment = document.getElementById("comment_box").value;

    let url = `Functions/comment.php?comment=${comment}`;
    httpCall(url).then((responseText) => postVerification(responseText));
}

function login() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    let url = `Functions/login.php?username=${username}&password=${password}`;
    httpCall(url).then((responseText) => postVerification(responseText));
}

function logout() {
    let url = `Functions/logout.php`;
    httpCall(url).then((responseText) => postVerification(responseText));
}

function signup() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let password2 = document.getElementById("password2").value;

    let url = `Functions/signup.php?username=${username}&password=${password}&password2=${password2}`;
    httpCall(url).then((responseText) => postVerification(responseText));
}

function httpCall(url) {
    return new Promise((resolve, reject) => {
        let xHTTP = new XMLHttpRequest();

        xHTTP.onreadystatechange = () => { 
            if (xHTTP.readyState == 4) {
                if (xHTTP.status == 200) {
                    resolve(xHTTP.responseText);
                }
                else {
                    reject("Error");
                }
            }
        }

        xHTTP.open("GET", url, true);
        xHTTP.send(null);
    });
}

function postVerification(responseText) {
    if (responseText == "0") {
        // window.location.reload();
    }
    else {
        document.getElementById("error_message").innerHTML = responseText;
    }
}