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
const btnAdd = document.querySelectorAll(".addBtn");

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

/* --------------- Table Add Vehicle Driver --------------- */

//Add Multiple Vehicle
const addVBtn = document.querySelector(".addVehicleBtn");
var row = document.querySelector("#tbVehicle");
var numV = 1;

function addRowVehicle() {
    if(numV <= 8){
        var tr = document.createElement("tr");
        var td1 = document.createElement("td");
        var no = document.createElement("label");
        no.innerHTML = numV;
        td1.appendChild(no);
        tr.appendChild(td1);

        var td2 = document.createElement("td");
        var plateno = document.createElement("input")
        plateno.type="text";
        td2.appendChild(plateno);
        tr.appendChild(td2);
        
        var td3 = document.createElement("td");
        var chasis = document.createElement("input")
        chasis.type="text";
        td3.appendChild(chasis);
        tr.appendChild(td3);

        var td4 = document.createElement("td");
        var engine = document.createElement("input")
        engine.type="text";
        td4.appendChild(engine);
        tr.appendChild(td4);
        
        var td5 = document.createElement("td");
        var insurance = document.createElement("input")
        insurance.type="text";
        td5.appendChild(insurance);
        tr.appendChild(td5);

        var td6 = document.createElement("td");
        var orcr = document.createElement("input")
        orcr.type="text";
        td6.appendChild(orcr);
        tr.appendChild(td6);

        var td7 = document.createElement("td");
        var model = document.createElement("input")
        model.type="text";
        td7.appendChild(model);
        tr.appendChild(td7);

        var td8 = document.createElement("td");
        var vehicletype = document.createElement("select");
        var type = ["", "Bicycle", "Pedicab", "Motorcycle", "Tricycle", "Car", "Jeepney", "Bus", "Truck (Rigid)", "Truck (Artic)", "Van", "Animal", "Other"];
        for(var x = 0; x < type.length; x++) {
            var option = document.createElement("option");
            option.innerHTML = type[x];
            option.value = type[x];
            vehicletype.appendChild(option);
        }
        td8.appendChild(vehicletype);
        tr.appendChild(td8);

        var td9 = document.createElement("td");
        var vehicledefect = document.createElement("select");
        var defect = ["", "Left Turn", "Right Turn", "U Turn", "Cross Traffic", "Merging", "Diverging", "Overtaking", " Going Ahead", "Reversing", "Sudden Start", "Sudden Stop", "Parked off Road", "Parked on Road", "Other"];
        for(var y = 0; y < defect.length; y++) {
            var option = document.createElement("option");
            option.innerHTML = defect[y];
            option.value = defect[y];
            vehicledefect.appendChild(option);
        }
        td9.appendChild(vehicledefect);
        tr.appendChild(td9);

        var td10 = document.createElement("td");
        var vehicledamage = document.createElement("select");
        var damage = ["", "None", "Front", "Rear", "Right", "Left", "Multiple", "Other"];
        for(var z = 0; z < damage.length; z++) {
            var option = document.createElement("option");
            option.innerHTML = damage[z];
            option.value = damage[z];
            vehicledamage.appendChild(option);
        }
        td10.appendChild(vehicledamage);
        tr.appendChild(td10);

        var btn = document.createElement("a");
        var td11 = document.createElement("td");
        btn.className = "delete";
        btn.innerHTML = "&times";
        td11.appendChild(btn);
        tr.appendChild(td11);

        row.appendChild(tr);

        numV++;
    } else {
        alert("Maximum number of Vehicle has been reached.");
    }
    
}

addVBtn.addEventListener("click", addRowVehicle);

//Add Multiple Driver
const addDBtn = document.querySelector(".addDriverBtn");
var rowD = document.querySelector("#tbDriver");
var numD = 1;

function addRowDriver() {
    if(numD <= 8){
        var tr = document.createElement("tr");
        var td1 = document.createElement("td");
        var no = document.createElement("label");
        no.innerHTML = numD;
        td1.appendChild(no);
        tr.appendChild(td1);

        var td2 = document.createElement("td");
        var name = document.createElement("input")
        name.type="text";
        td2.appendChild(name);
        tr.appendChild(td2);
        
        var td3 = document.createElement("td");
        var address = document.createElement("input")
        address.type="text";
        td3.appendChild(address);
        tr.appendChild(td3);

        var td4 = document.createElement("td");
        var licenseno = document.createElement("input")
        licenseno.type="text";
        td4.appendChild(licenseno);
        tr.appendChild(td4);
        
        var td5 = document.createElement("td");
        var licensetype = document.createElement("select")
        var type = ["", "Student Driver's Permit", "Non-Professional Driver's License", "Professional Driver's License"];
        for(var x = 0; x < type.length; x++) {
            var option = document.createElement("option");
            option.innerHTML = type[x];
            option.value = type[x];
            licensetype.appendChild(option);
        }
        td5.appendChild(licensetype);
        tr.appendChild(td5);

        var td6 = document.createElement("td");
        var age = document.createElement("input")
        age.type="number";
        td6.appendChild(age);
        tr.appendChild(td6);

        var td7 = document.createElement("td");
        var injury = document.createElement("select");
        var injure = ["", "Fatal", "Serious", "Minor", "Not Injured"];
        for(var x = 0; x < injure.length; x++) {
            var option = document.createElement("option");
            option.innerHTML = injure[x];
            option.value = injure[x];
            injury.appendChild(option);
        }
        td7.appendChild(injury);
        tr.appendChild(td7);

        var td8 = document.createElement("td");
        var error = document.createElement("select");
        var err = ["", "None", "Fatigue/Asleep", "Inattentive", "Too Fast", "Too Close", "No, Signal", "Bad Overtaking","Bad Turning", "Using Cell Phone", "Other"];
        for(var y = 0; y < err.length; y++) {
            var option = document.createElement("option");
            option.innerHTML = err[y];
            option.value = err[y];
            error.appendChild(option);
        }
        td8.appendChild(error);
        tr.appendChild(td8);

        var td9 = document.createElement("td");
        var alcohol = document.createElement("select");
        var drugs = ["", "Alcohol Suspected", "Drug Suspected", "Both SUspected", "Not Suspected"];
        for(var z = 0; z < drugs.length; z++) {
            var option = document.createElement("option");
            option.innerHTML = drugs[z];
            option.value = drugs[z];
            alcohol.appendChild(option);
        }
        td9.appendChild(alcohol);
        tr.appendChild(td9);

        var td10 = document.createElement("td");
        var seatbelt = document.createElement("select");
        var helmet = ["", "Seatbelt/Helmet Worn", "Not Worn Correctly", "Not Worn"];
        for(var i = 0; i < helmet.length; i++) {
            var option = document.createElement("option");
            option.innerHTML = helmet[i];
            option.value = helmet[i];
            seatbelt.appendChild(option);
        }
        td10.appendChild(seatbelt);
        tr.appendChild(td10);

        var btn = document.createElement("a");
        var td11 = document.createElement("td");
        btn.className = "delete";
        btn.innerHTML = "&times";
        td11.appendChild(btn);
        tr.appendChild(td11);

        rowD.appendChild(tr);

        numD++;
    } else {
        alert("Maximum number of Driver has been reached.");
    }
    
}

addDBtn.addEventListener("click", addRowDriver);

//Add Multiple Passenger Casualties
const addPBtn = document.querySelector(".addPassengerBtn");
var rowP = document.querySelector("#tbPassenger");
var numP = 1;

function addRowPassenger() {
    if(numP <= 8){
        var tr = document.createElement("tr");
        var td1 = document.createElement("td");
        var no = document.createElement("label");
        no.innerHTML = numP;
        td1.appendChild(no);
        tr.appendChild(td1);

        var td2 = document.createElement("td");
        var name = document.createElement("input")
        name.type="text";
        td2.appendChild(name);
        tr.appendChild(td2);
        
        var td3 = document.createElement("td");
        var address = document.createElement("input")
        address.type="text";
        td3.appendChild(address);
        tr.appendChild(td3);

        var td4 = document.createElement("td");
        var vehicleno = document.createElement("input")
        vehicleno.type="number";
        td4.appendChild(vehicleno);
        tr.appendChild(td4);
        
        var td5 = document.createElement("td");
        var sex = document.createElement("select")
        var gender = ["", "Male", "Female", "Other"];
        for(var x = 0; x < gender.length; x++) {
            var option = document.createElement("option");
            option.innerHTML = gender[x];
            option.value = gender[x];
            sex.appendChild(option);
        }
        td5.appendChild(sex);
        tr.appendChild(td5);

        var td6 = document.createElement("td");
        var age = document.createElement("input")
        age.type="number";
        td6.appendChild(age);
        tr.appendChild(td6);

        var td7 = document.createElement("td");
        var injury = document.createElement("select")
        var injure = ["", "Fatal", "Serious", "Minor", "Not Injured"];
        for(var y = 0; y < injure.length; y++) {
            var option = document.createElement("option");
            option.innerHTML = injure[y];
            option.value = injure[y];
            injury.appendChild(option);
        }
        td7.appendChild(injury);
        tr.appendChild(td7);


        var td8 = document.createElement("td");
        var position = document.createElement("select");
        var pos = ["", "Front Seat", "Rear Seat", "M/C Passenger", "Bus Passenger", "Outside Sitting", "Outside Standing"];
        for(var a = 0; a < pos.length; a++) {
            var option = document.createElement("option");
            option.innerHTML = pos[a];
            option.value = pos[a];
            position.appendChild(option);
        }
        td8.appendChild(position);
        tr.appendChild(td8);

        var td9 = document.createElement("td");
        var action = document.createElement("select");
        var act = ["", "None", "Boarding", "Alighting", "Falling", "Other"];
        for(var z = 0; z < act.length; z++) {
            var option = document.createElement("option");
            option.innerHTML = act[z];
            option.value = act[z];
            action.appendChild(option);
        }

        td9.appendChild(action);
        tr.appendChild(td9);

        var btn = document.createElement("a");
        var td10= document.createElement("td");
        btn.className = "delete";
        btn.innerHTML = "&times";
        td10.appendChild(btn);
        tr.appendChild(td10);

        rowP.appendChild(tr);

        numP++;
    } else {
        alert("Maximum number of Passenger has been reached.");
    }
    
}

addPBtn.addEventListener("click", addRowPassenger);

//Add Multiple Passenger Casualties
const addPdBtn = document.querySelector(".addPedestrianBtn");
var rowPd = document.querySelector("#tbPedestrian");
var numPd = 1;

function addRowPedestrian() {
    if(numPd <= 8){
        var tr = document.createElement("tr");
        var td1 = document.createElement("td");
        var no = document.createElement("label");
        no.innerHTML = numPd;
        td1.appendChild(no);
        tr.appendChild(td1);

        var td2 = document.createElement("td");
        var name = document.createElement("input")
        name.type="text";
        td2.appendChild(name);
        tr.appendChild(td2);
        
        var td3 = document.createElement("td");
        var address = document.createElement("input")
        address.type="text";
        td3.appendChild(address);
        tr.appendChild(td3);
        
        var td4 = document.createElement("td");
        var sex = document.createElement("select")
        var gender = ["", "Male", "Female", "Other"];
        for(var x = 0; x < gender.length; x++) {
            var option = document.createElement("option");
            option.innerHTML = gender[x];
            option.value = gender[x];
            sex.appendChild(option);
        }
        td4.appendChild(sex);
        tr.appendChild(td4);

        var td5 = document.createElement("td");
        var age = document.createElement("input")
        age.type="number";
        td5.appendChild(age);
        tr.appendChild(td5);

        var td6 = document.createElement("td");
        var injury = document.createElement("select")
        var injure = ["", "Fatal", "Serious", "Minor", "Not Injured"];
        for(var y = 0; y < injure.length; y++) {
            var option = document.createElement("option");
            option.innerHTML = injure[y];
            option.value = injure[y];
            injury.appendChild(option);
        }
        td6.appendChild(injury);
        tr.appendChild(td6);


        var td7 = document.createElement("td");
        var position = document.createElement("select");
        var pos = ["", "Front Seat", "Rear Seat", "M/C Passenger", "Bus Passenger", "Outside Sitting", "Outside Standing"];
        for(var a = 0; a < pos.length; a++) {
            var option = document.createElement("option");
            option.innerHTML = pos[a];
            option.value = pos[a];
            position.appendChild(option);
        }
        td7.appendChild(position);
        tr.appendChild(td7);

        var td8 = document.createElement("td");
        var action = document.createElement("select");
        var act = ["", "None", "Boarding", "Alighting", "Falling", "Other"];
        for(var z = 0; z < act.length; z++) {
            var option = document.createElement("option");
            option.innerHTML = act[z];
            option.value = act[z];
            action.appendChild(option);
        }

        td8.appendChild(action);
        tr.appendChild(td8);

        var btn = document.createElement("a");
        var td9= document.createElement("td");
        btn.className = "delete";
        btn.innerHTML = "&times";
        td9.appendChild(btn);
        tr.appendChild(td9);

        rowPd.appendChild(tr);

        numPd++;
    } else {
        alert("Maximum number of Pedestrian has been reached.");
    }
    
}

addPdBtn.addEventListener("click", addRowPedestrian);