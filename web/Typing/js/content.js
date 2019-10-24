var i, start, countDown, interval, elements, finished, currID;

window.onload = () => {

    document.getElementById("cancel").onclick = () => {
        document.getElementById("dark").style.display = "none";
        document.body.style.height = "auto";
        document.body.style.overflow = "scroll";
        document.getElementById("comment_area").value = "";
    };

    // Index all objects by ID
    elements = {
        "menu": document.getElementById("menu_area"),
        "content": document.getElementById("content_area"),
        "message": document.getElementById("message"),
        "text": document.getElementById("content_text"),
        "count": document.getElementById("count_down"),
        "warning": document.getElementById("warning"),
        "context": document.getElementById("warning_context"),
        "prompt": document.getElementById("prompt"),
        "stop": document.getElementById("stop_button")
    };

    // Make the menu visible
    elements["menu"].style.display = "block";

    // Allow indents
    elements["text"].onkeydown = function(e) {
        if (e.keyCode === 9 || e.which === 9) {
            e.preventDefault();

            let s = this.selectionStart;
            this.value = this.value.substring(0, this.selectionStart) + "\t" + this.value.substring(this.selectionEnd);
            this.selectionEnd = s + 1; 
        }
    }
};

/**
 * When the user transitions from menu to content
 */
function startTyping() {
    finished = false;   // if the timer is counting
    start = false;      // if the user has started typing
    i = 0;              // seconds until failure

    elements["menu"].style.display = "none";
    elements["content"].style.display = "block";
    elements["message"].style.visibility = "hidden";
    elements["stop"].innerHTML = "Stop";
    elements["text"].value = "";
    elements["text"].focus();
    
    countDown = 300;    // five minutes in seconds
    elements["count"].innerHTML = convertTime(countDown);
    elements["warning"].innerHTML = 5 - i;
    elements["context"].style.color = "black";

    elements["text"].addEventListener("keypress", startInterval);
}

/**
 * When the user starts typing, the timers will count down in intervals of one second
 */
function startInterval() {
    if (!start) {
        start = true;
        interval = setInterval(updateCounter, 1000);
    }
    
    updateTimeout(false);
}

/**
 * When the test is over, either because the user has failed or completed the task
 */
function stopTyping(failed=false) {
    if (interval) clearInterval(interval);

    elements["menu"].style.display = "block";
    elements["content"].style.display = "none";

    if (failed) {
        elements["message"].style.visibility = "visible";
    }
}

/**
 * The timers are updated every time the user types
 */
function updateTimeout(increment) {
    if (!finished) {
        if (increment) i++;
        else i = 0;

        elements["warning"].innerHTML = 5 - i;

        if (2 < i) {
            elements["context"].style.color = "red";
        }
        else {
            elements["context"].style.color = "black";
        }

        if (5 <= i) {
            stopTyping(true);
        }
    }
}

function updateCounter() {
    countDown--;
    updateTimeout(true);

    elements["count"].innerHTML = convertTime(countDown);

    if (countDown <= 0) {
        finish();
    }
}

/**
 * Input seconds, output minutes as a string
 */
function convertTime(integer) {
    let minutes = Math.floor(integer / 60);
    let seconds = Math.round(integer % 60, 2);

    seconds = seconds < 10 ? "0" + seconds : seconds;

    return minutes+ ":" + seconds
}

/**
 * Stop the timer without changing the page
 */
function finish() {
    if (interval) clearInterval(interval);
    elements["count"].innerHTML = "Done"; 
    elements["warning"].innerHTML = "--";

    if (!finished) {
        finished = true;
        elements["stop"].innerHTML = "Reset";
    }
    else {
        stopTyping();
        startTyping();
    }
}

/**
 * Display 
 */
function display(id) {
    currID = id;

    document.getElementById("dark").style.display = "block";
    document.body.style.height = "100%";
    document.body.style.overflow = "hidden";
    
    let element = document.getElementById("story" + id);
    document.getElementById("popup_title").innerHTML = element.getElementsByClassName("title")[0].innerText;
    document.getElementById("popup_author").innerHTML = element.getElementsByClassName("author")[0].innerText;

    let story = element.getElementsByClassName("preview")[0].innerHTML;
    document.getElementById("popup_story").innerHTML = story.replace(/a/g, "b");

    let url = "loadStory.php/?q=" + id;
    readFile(url)
    .then((response) => {
        document.getElementById("popup_comments").innerHTML = response;
    });
}

/**
 * Gather data from 
 */
function readFile(fileName) {
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

function comment() {
    let comment = document.getElementById("comment_area").value;
    let package = comment.split(" ").join("+");
    let url = $url = `comment.php/?q=${currID}&&${package}`;

    readFile(url);

    document.getElementById("popup_comments").innerHTML = `-${comment}<br>` + document.getElementById("popup_comments").innerHTML;
    document.getElementById("comment_area").value = "";
}