window.addEventListener("load", handleWindowLoad);

function handleWindowLoad() {
    var btnJSONSubmit = document.getElementById("submit");
    btnJSONSubmit.addEventListener("click", handlePostJSON);
    var textBox = document.getElementById('name');
    textBox.addEventListener("keyup", handleGetJSON);
}

function handleGetJSON() {
    var name = document.getElementById("name");
    const URL = 'http://192.168.33.22/51_JavasriptJSON_Oefeningen/oefening02/getdata.php?name=';
    fetch(URL + name.value)
        .then(
            response => response.json())
        .then(json => {
            console.log(json);
            writeOutput(JSON.stringify(json));
        });
}

function handlePostJSON() {

    var name = document.getElementById("name");
    const URL = 'http://192.168.33.22/51_JavasriptJSON_Oefeningen/oefening02/postdata.php';
    fetch(URL, {
        method: 'POST',
        body: JSON.stringify({
                name: name.value
            }),
        headers: {
            "Content-type": "application/json; charset=UTF-8"
        }
    })
        .then(response => response.text())
        .then(text => {
            console.log(text);
        });
}

function writeOutput(text) {
    var textNode = document.createTextNode(text + "\n");
    var output = document.getElementById("divOutput");
    output.innerHTML = '';
    output.appendChild(textNode);
}

