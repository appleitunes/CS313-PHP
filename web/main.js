window.onload = () => {
    sendData("This is a test.");
};

function sendData(data) {
    readTextFile(`index.php/%%${data.split(' ').join('&&')}`)
    .then((responseText) => {
        document.getElementById("PHP").innerText = responseText;
    });
}

function readTextFile(fileName) {
    return new Promise((resolve, reject) => {
        let rawFile = new XMLHttpRequest();

        rawFile.open("GET", fileName, true);

        rawFile.onreadystatechange = () => {
            if (rawFile.readyState === 4) {
                if (rawFile.status === 200 || rawFile.status == 0) {
                    resolve(rawFile.responseText);
                }
                else {
                    reject("Oops! Something went wrong.");
                }
            }
        }

        rawFile.send(null);
    });
}