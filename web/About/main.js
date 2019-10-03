function sendData() {
    let data = document.getElementById("user_input").value;
    let packagedData = data.split(" ").join("+");
    let url = `index.php/?q=${packagedData}`;
    readTextFile(url)
    .then((responseText) => {
        document.getElementById("image_text").innerText = responseText;
        document.getElementById("spongebob").style.visibility = "visible";
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