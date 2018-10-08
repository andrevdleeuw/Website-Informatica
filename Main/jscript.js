function homeButton(){
    window.location.href = "index.html";
}

function shopButton(){
    window.location.href = "shop.html";
}

function contactButton(){
    window.location.href = "contact.html";//contact.html bestaat nog niet
}

function loginButton(){
    window.location.href = "login.html";
}

//doet alles wat gebeurt als de pagina laadt
function loadPage(){

}

window.onload = loadPage();

//Hier de js voor het login scherm

function check(form){
    if(form.userid.value == "admin" && form.pswrd.value == "admin"){
        window.open("adminPage.html");
    }
    else{
        alert("Het wachtwoord of de gebruikersnaam is niet correct!")
    }
}
