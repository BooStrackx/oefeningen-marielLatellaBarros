// (1) Maak een webtoepassing om een GET-request en een
// POST-request uit te voeren naar jsonplaceholder.
//     Maak gebruik van W3C-eventhandling en de fetch-api.
//     https://github.com/typicode/jsonplaceholder#how-to

window.addEventListener("load", handleWindowLoad);

function handleWindowLoad() {
    var btnJSONGet=document.getElementById("buttonGet");
    var btnJSONPost=document.getElementById("buttonPost");
    btnJSONGet.addEventListener("click", handleGetJSON);
    btnJSONPost.addEventListener("click", handlePostJSON);
}

function handleGetJSON() {
    fetch('https://jsonplaceholder.typicode.com/posts/1')
        .then(response => response.json())
        .then(json => {
            console.log(json);
            writeOutput(JSON.stringify(json));
        });
        // .then(json => writeOutput(JSON.stringify(json)))

}

function handlePostJSON() {
    // POST adds a random id to the object sent
    fetch('https://jsonplaceholder.typicode.com/posts', {
        method: 'POST',
        body: JSON.stringify({
            title: 'foo',
            body: 'bar',
            userId: 1
        }),
        headers: {
            "Content-type": "application/json; charset=UTF-8"
        }
    })
        .then(response => response.json())
        .then(json => {
            console.log(json);
            writeOutput(JSON.stringify(json));
        });
    // .then(json => writeOutput(JSON.stringify(json)))

    /* will return
    {
      id: 101,
      title: 'foo',
      body: 'bar',
      userId: 1
    }
    */
}


function writeOutput(text){
    var textNode=document.createTextNode(text+"\n");
    var output=document.getElementById("divOutput");
    output.innerHTML = '';
    output.appendChild(textNode);
}

