// let collectionBtnNouvelle = 
// let collectionNouvelle = 

function Menu(evt) {
    
    //  instructions ici

    let maRequete = new XMLHttpRequest();
    console.log(maRequete)
    maRequete.open('GET', 'http://127.0.0.1/2020-veille/wordpress/category/atelier/'); // modifier ici
    maRequete.onload = function () {
        console.log(maRequete)
        if (maRequete.status >= 200 && maRequete.status < 400) {
            let data = JSON.parse(maRequete.responseText);
            console.log(evt.target.dataset.checked)
            // instructions ici
            creationHTML(data);  // paramètres à ajouter
            
        } else {
            console.log('La connexion est faite mais il y a une erreur')
        }
    }
    maRequete.onerror = function () {
        console.log("erreur de connexion");
    }
    maRequete.send()
    }

    // instructions à ajouter

///////////////////////////////////////////////////////

function creationHTML(postsData){
    let monHtmlString = "<nav><ul class='menu_container'>";
    "<li><a class='menu' href='http://127.0.0.1/2020-veille/wordpress/category/atelier/'>Ateliers</a></li>";
    "<li><a class='menu' href='http://127.0.0.1/2020-veille/wordpress/category/nouvelle/'>Nouvelles</a></li>";
    "<li><a class='menu' href='http://127.0.0.1/2020-veille/wordpress/category/cours/'>Cours</a></li>";
"</nav></ul>";
    /*for (elm of postsData) {
        monHtmlString += '<h2>' + elm.title.rendered + '</h2>'
        monHtmlString += elm.content.rendered;
    }*/
    getElementbyType('body').appendChild(monHtmlString);
    //contenuNouvelle.innerHTML = monHtmlString; 
}




