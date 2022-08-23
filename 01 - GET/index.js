resultBox = document.querySelector("#resultBox");
btnGET = document.querySelector("#btnGET");
btnGetAndParams = document.querySelector("#btnGetAndParams");
btnPostAndParams = document.querySelector("#btnPostAndParams");
btnDelete = document.querySelector("#btnDelete");
btnPATCH = document.querySelector("#btnPATCH");




//GET Sans params
btnGET.addEventListener("click",async e=>{
    url = "./api.php";
    method = "GET";
    response = await getWeatherData(url, method);
    resultBox.innerHTML =  response;
})

//GET Avec params
btnGetAndParams.addEventListener("click",async e=>{
    url = "./api.php?title=NoIdea&textContent=contenuALire";
    method = "GET";
    response = await getWeatherData(url, method);
    resultBox.innerHTML =  response;
})

//POST sans PARAMS
btnPostAndParams.addEventListener("click",async e=>{
    console.log("ok");
    url = "./api.php";
    method = "POST";
    response = await getWeatherData(url, method);
    resultBox.innerHTML =  response;
})

//DELETE
btnDelete.addEventListener("click",async e=>{
    url = "./api.php";
    method = "DELETE";
    response = await getWeatherData(url, method);
    resultBox.innerHTML =  response;
})


//PATCH
btnPATCH.addEventListener("click",async e=>{
    url = "./api.php";
    method = "PATCH";
    response = await getWeatherData(url, method);
    resultBox.innerHTML =  response;
})


someDatas = ["pomme", "banane", "fraise"];
someDatasJson = JSON.stringify(someDatas);


//Fait un fetch sur url avec la method en 2eme paramètre
async function getWeatherData(url, method){
    let datas;
    if(method=="GET"){
        datas = await fetch(url,
            {
                method: method,
            });
    }else{
        datas = await fetch(url,
            {
                method: method,
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                  },
                body:someDatasJson
            });
    }
    
    return await datas.text();
}