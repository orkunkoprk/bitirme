var url_string = window.location.href
var url = new URL(url_string);
searchParam = url.search

const theatres = ["?MBBKongre", "?MKM", "?MBKM", "?TBAT", "?MBAHT", "?TA"];


const xhr = new XMLHttpRequest()

xhr.open("GET", "./data/theatres.json")

xhr.send()


xhr.onload = function() {
  if (xhr.status === 200) {
    //parse JSON datax`x
    data = JSON.parse(xhr.responseText)
    parseData(data.theatres)
  } else if (xhr.status === 404) {
    console.log("Kayıt bulunamadı!")
  }
}


xhr.onerror = function() {
  console.log("Ağ hatası oluştu!")
}


xhr.onprogress = function(e) {
  if (e.lengthComputable) {
    console.log(`${e.loaded} B of ${e.total} B loaded!`)
  } else {
    console.log(`${e.loaded} B loaded!`)
  }
}


function parseData(data){

    let element = document.getElementById("oyunlar")



    for(var i=0; i<data.length; i++){
        if(data[i].name == searchParam && theatres.includes(data[i].name)){
            
            let oyunlar = data[i].oyunlar;
            for(let i=0; i<oyunlar.length; i++){
            element.innerHTML += `
            
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="${oyunlar[i].image}" style="width: 400px; height: 576px;  border-radius: 12px;" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading" style="text-align: center;">
                            ${oyunlar[i].name}</h4>
                        <p class="group inner list-group-item-text" style="text-align: center;">
                        ${oyunlar[i].summary}</p>
                        
                            <a class="btn btn-success" style="margin-left: 105px;" href="./oyunlar.html?CMXForumMersin">Rezervasyon Yap </a>
                    </div>
                </div>
            </div>
            <br>
            `
            }
            
            break;
        }
        else{
            console.log("Oyun bulunamadı.")
        }
    }  

}