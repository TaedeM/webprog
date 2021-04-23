window.addEventListener('DOMContentLoaded', function () {
    console.log("DOM has been loaded.");
    question1();
    question2();
    question3and4();
    question5();
    question6();
    var page = location.pathname.substring(location.pathname.lastIndexOf("/") + 1);
    if (page === "second.html") {
        question7();
    }
})

function question1() {
    var filename = (location.pathname.substring(location.pathname.lastIndexOf("/") + 1)).replace(".html","");
    document.title = capitalize(filename);
}

function question2() {
    var div = document.getElementsByClassName('col-md-12')[0];
    console.log(div);
    div.innerHTML += '<article><h1>And this is the second one</h1><p><b>JavaScript is ongelofelijk super leuk! 👍🤙</b></p></article>';
}

function question3and4() {
    var div = document.getElementById('links');
    var li = div.getElementsByTagName('li');
    li[2].innerHTML = '<a href="https://google.com" target="_blank">Link 3</a>';
}

function question5() {
    var navs = document.getElementsByClassName('nav-link');
    for(var i = 0; i < navs.length; i++) {
        navs[i].style.color = "red"
        console.log(navs[i])
    }
}

function question6() {
    var schedule = {
        week1: "Assignment 1",
        week2: "Assignment 1",
        week3: "Assignment 2",
        week4: "Assignment 2",
        week5: "Assignment 3",
        week6: "Assignment 3"
    };
    console.log(schedule.week1);
    var div = document.getElementsByClassName('container')[0];
    
    var string = '';
    for(var prop in schedule) {
        string += '<div>' + prop + ': ' + schedule[prop]+'</div>';
    }
    console.log(string)
    div.innerHTML += '<h3>Schedule:</h3> </br> ' + string;
}

function question7() {
    var name = document.getElementsByClassName('col-md-12')[0];
    name.className = 'col-md-8';
    console.dir(name)
    var div = document.getElementsByClassName('row')[0];
    div.innerHTML += '<div class="col-md-4" style="background-color:lightgrey"><h1>Sidebar</h1><p>Voor advertenties of andere dingen.</p</div>';
    console.dir(div);
}

function capitalize(str) {
    return str.charAt(0).toUpperCase() + str.slice(1);
}