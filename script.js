// javascript file


// custom alert box

function showAlert(title, message) {
    document.getElementById("alert-title").textContent = title;
    document.getElementById("alert-message").textContent = message;
    document.getElementById("custom-alert").style.display = "block";
}

function closeAlert() {
    document.getElementById("custom-alert").style.display = "none";
}


// Admission form validation

function formvalidate() {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let number = document.getElementById('number').value;
    let date = document.getElementById('date').value;
    let address =document.getElementById('address').value;

    if(name=="" || email=="" || number=="" || date=="" || address==""){
        showAlert("This Form Says", "All fields are required...!");
        return false;
    }

    else if(!((/^[a-zA-Z ]+$/.test(name)))){
        showAlert("Name Error","Only alphabets are allowed in name field...!");
        return false;
    }

    else if(!((/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/.test(email)))){
        showAlert("E-mail Error","Invalid E-mail address...!")
        return false;
    }

    else if(number.length<10||number.length>10){
        showAlert("Contact No. Error","Phone number should be 10 digit...!");
        return false;
    }

    else{
        return true;
    }
}


// toggle navbar function

function togglenavbar(){
    let navbar = document.getElementById("menus");

    if(navbar.style.display === "none"){
        navbar.style.display = "block";
    }

    else{
        navbar.style.display = "none";
    }
}


// link html file functions

function announcementbutton(){
    window.location.href = "notice-board.html";
}

function admissionbutton(){
    window.location.href = "admission.html";
}

function eventbutton(){
    window.location.href = "event.html";
}

function contactusbutton(){
    window.location.href = "contact-us.html";
}


// scroll to top function

function scrolltop(){
    window.scrollTo(0,0);
}


// principal form validation

function message(){
    let name2 = document.getElementById('name2').value;
    let email2 = document.getElementById('email2').value;
    let number2 = document.getElementById('number2').value;
    let message2 = document.getElementById('message2').value;

    if(name2=="" || email2=="" || number2=="" || message2=="" ){
        showAlert("This Form Says", "All fields are required...!");        
        return false;
    }

    else if(!((/^[a-zA-Z ]+$/.test(name2)))){
        showAlert("Name Error","Only alphabets are allowed in name field...!");
        return false;
    }

    else if(!((/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/.test(email2)))){
        showAlert("E-mail Error","Invalid E-mail address...!")
        return false;
    }

    else if(number2.length<10||number2.length>10){
        showAlert("Contact No. Error","Phone number should be 10 digit...!");
        return false;
    }

    else{
        return true;
    }
}


// vice principal form validation

function message2(){
    let name3 = document.getElementById('name3').value;
    let email3 = document.getElementById('email3').value;
    let number3 = document.getElementById('number3').value;
    let message3 = document.getElementById('message3').value;

    if(name3=="" || email3=="" || number3=="" || message3=="" ){
        showAlert("This Form Says", "All fields are required...!");   
        return false;
    }

    else if(!((/^[a-zA-Z ]+$/.test(name3)))){
        showAlert("Name Error","Only alphabets are allowed in name field...!");
        return false;
    }

    else if(!((/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/.test(email3)))){
        showAlert("E-mail Error","Invalid E-mail address...!")
        return false;
    }

    else if(number3.length<10||number3.length>10){
        showAlert("Contact No. Error","Phone number should be 10 digit...!");
        return false;
    }
    
    else{
        return true;
    }
}