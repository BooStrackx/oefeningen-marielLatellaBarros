// Telkens er iets in het tekstveld verandert (keypress) dan wordt via de fetch-api de lijst met alle
// namen die lijken op de ingevoerde waarde opgehaald en bij in de lijst met suggestions geplaatst.

window.addEventListener("load", handleWindowLoad);

function handleWindowLoad() {
    var btnJSONSubmit=document.getElementById("submit");
    btnJSONSubmit.addEventListener("click", handleGetJSON);
}

function handleGetJSON() {
    const URL = 'http://192.168.33.22/oefeningen/51_JavasriptJSON_Oefeningen/oefening02/process.php';
    fetch(URL)
        .then(response => response.json())
        .then(json => {
            console.log(json);
            writeOutput(JSON.stringify(json));
        });
        // .then(json => writeOutput(JSON.stringify(json)))

}

function writeOutput(text){
    var textNode=document.createTextNode(text+"\n");
    var output=document.getElementById("divOutput");
    // output.innerHTML = '';
    output.appendChild(textNode);
}

