function resetForm(){
    $("#contactform")[0].reset()
    $("#form-content").hide();
    $("#form-alert").hide();
}

function goToLinks(){
    $("#contact").attr('class', "tap-pane");
    $("#contact-tab").attr('class', "nav-link");
    $("#links").attr('class', "tab-pane active");
    $("#link-tab").attr('class', "nav-link active");
}


function goToContact(){
    $("#contact").attr('class', "tap-pane active");
    $("#contact-tab").attr('class', "nav-link active");
    $("#links").attr('class', "tab-pane");
    $("#link-tab").attr('class', "nav-link");
}

function writeFormData(){
    // Saves the form data as an object and shows a table on the page
    var form = {name:document.getElementById("name").value, age:document.getElementById("age").value, city:document.getElementById("city").value, email:document.getElementById("email").value, phone:document.getElementById("phone").value};

    $("#outputname").text(form.name); 
    $("#outputage").text(form.age);
    $("#outputcity").text(form.city);
    $("#outputemail").text(form.email);
    $("#outputphone").text(form.phone);     
    $("#form-content").show();
}


$(function() {
    
    $("#contactform").submit(function (e) {
        e.preventDefault();
        writeFormData();
    })

});