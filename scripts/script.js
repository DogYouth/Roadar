/* --------------- Menu Event --------------- */
const overview = document.querySelectorAll("#overview");
const announcement = document.querySelectorAll("#announcement");
const history = document.querySelectorAll("#history");
const application = document.querySelectorAll("#application");
const myaccount = document.querySelectorAll("#myaccount");
const mains = document.querySelectorAll(".main");
const as = document.querySelectorAll(".a");

let mainNum = 0;

overview.forEach((a) => {
    a.addEventListener("click", () => {
        mainNum += 0;
        updateA();
        updateMenu();
    });
});
announcement.forEach((a) => {
    a.addEventListener("click", () => {
        mainNum += 1;
        updateA();
        updateMenu();
    });
});
history.forEach((a) => {
    a.addEventListener("click", () => {
        mainNum += 2;
        updateA();
        updateMenu();
    });
});
application.forEach((a) => {
    a.addEventListener("click", () => {
        mainNum += 3;
        updateA();
        updateMenu();
    });
});
myaccount.forEach((a) => {
    a.addEventListener("click", () => {
        mainNum += 4;
        updateA();
        updateMenu();
    });
});

function updateMenu() {
    mains.forEach((main) => {
        main.classList.contains("main-active") &&
            main.classList.remove("main-active");
    });
    mains[mainNum].classList.add("main-active");
    mainNum = 0;
}

function updateA() {
    as.forEach((a) => {
        a.classList.contains("a-menu-active") &&
            a.classList.remove("a-menu-active");
    });
    as[mainNum].classList.add("a-menu-active");
}

/* --------------- Form Event --------------- */
const btnNext = document.querySelectorAll(".nextBtn");
const btnBack = document.querySelectorAll(".backBtn");
const forms = document.querySelectorAll(".form");

let formNum = 0;

btnNext.forEach((next) => {
    next.addEventListener("click", () => {
        formNum++;
        updateForm();
    });
});

btnBack.forEach((back) => {
    back.addEventListener("click", () => {
        formNum--;
        updateForm();
    });
});


function updateForm() {
    forms.forEach((up) => {
        up.classList.contains("secActive") &&
            up.classList.remove("secActive");
    });
    forms[formNum].classList.add("secActive");
}



