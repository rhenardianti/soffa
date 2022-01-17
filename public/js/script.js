//navbar
const toggleButton = document.getElementsByClassName('toggleButton')[0]
const navbarLinks = document.getElementsByClassName('navbarLinks')[0]



toggleButton.addEventListener('click', (e) => {
    e.preventDefault();
    navbarLinks.classList.toggle('active');
})


//change background
let backgrounChange = document.body.style;

function bgChange(bg) {
    backgrounChange.backgroundImage = "url('" + bg + "')";
    backgrounChange.backgroundSize = "cover";
    backgrounChange.backgroundRepeat = "no-repeat";
}

function cekPilBg(elem) {
    let gambarLatar;
    let pilBg = elem.id;
    console.log(pilBg)
    if (pilBg == 1) {
        gambarLatar = '../asset/testing.jpg';
        bgChange(gambarLatar);
    } else if (pilBg == 2) {
        gambarLatar = '../asset/aomine19.jpg';
        bgChange(gambarLatar);
    } else {
        a = 140; b = 142; c = 143;
        gambarLatar = 'rgb(' + [a,b,c].join(',') + ')';
        backgrounChange.background = gambarLatar;
    }
}

//change sound

// function cekPilSound(elem) {
//     if 
// }

