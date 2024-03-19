const one = document.querySelector(".one");
const two = document.querySelector(".two");
const three = document.querySelector(".three");
const four = document.querySelector(".four");
const five = document.querySelector(".five");
const six = document.querySelector(".six");
const seven = document.querySelector(".seven");


const status = "3-redo";
var progess_class = "";
switch (status.substring(2, status.length)) {
    case "active":
        progess_class = "active";
        break;
    case "review":
        progess_class = "review";
        break;
    case "redo":
        progess_class = "redo";
    default:
        break;
}

switch (status.substring(0, 1)) {
    case "1":
        if (progess_class == "review") {
            one.classList.add("review");
        } else if (progess_class == "redo") {
            one.classList.add("redo");
        } else {
            one.classList.add("active");
        }
        break;
    case "2":
        if (progess_class == "review") {
            one.classList.add("active");
            two.classList.add("review");
        } else if (progess_class == "redo") {
            one.classList.add("active");
            two.classList.add("redo");
        } else {
            one.classList.add("active");
            two.classList.add("active");
        }
        break;
    case "3":
        if (progess_class == "review") {
            one.classList.add("active");
            two.classList.add("active");
            three.classList.add("review");
        } else if (progess_class == "redo") {
            one.classList.add("active");
            two.classList.add("active");
            three.classList.add("redo");
        } else {
            one.classList.add("active");
            two.classList.add("active");
            three.classList.add("active");
        }
        break;
    case "4":
        if (progess_class == "review") {
            one.classList.add("active");
            two.classList.add("active");
            three.classList.add("active");
            four.classList.add("review");
        } else if (progess_class == "redo") {

            one.classList.add("active");
            two.classList.add("active");
            three.classList.add("active");
            four.classList.add("redo");
        }
        else {
            one.classList.add("active");
            two.classList.add("active");
            three.classList.add("active");
            four.classList.add("active");
        }
        break;
    case "5":
        if (progess_class == "review") {
            one.classList.add("active");
            two.classList.add("active");
            three.classList.add("active");
            four.classList.add("active");
            five.classList.add("review");
        } else if (progess_class == "redo") {
            one.classList.add("active");
            two.classList.add("active");
            three.classList.add("active");
            four.classList.add("active");
            five.classList.add("redo");
        }
        else {
            one.classList.add("active");
            two.classList.add("active");
            three.classList.add("active");
            four.classList.add("active");
            five.classList.add("active");
        }
        break;
    case "6":
        if (progess_class == "review") {
            one.classList.add("active");
            two.classList.add("active");
            three.classList.add("active");
            four.classList.add("active");
            five.classList.add("active");
            six.classList.add("review");
        } else if (progess_class == "redo") {
            one.classList.add("active");
            two.classList.add("active");
            three.classList.add("active");
            four.classList.add("active");
            five.classList.add("active");
            six.classList.add("redo");
        }
        else {
            one.classList.add("active");
            two.classList.add("active");
            three.classList.add("active");
            four.classList.add("active");
            five.classList.add("active");
            six.classList.add("active");
        }

        break;
    case "7":
        if (progess_class == "review") {
            one.classList.add("active");
            two.classList.add("active");
            three.classList.add("active");
            four.classList.add("active");
            five.classList.add("active");
            six.classList.add("active");
            seven.classList.add("review");
        } else if (progess_class == "redo") {
            one.classList.add("active");
            two.classList.add("active");
            three.classList.add("active");
            four.classList.add("active");
            five.classList.add("active");
            six.classList.add("active");
            seven.classList.add("redo");
        }
        else {
            one.classList.add("active");
            two.classList.add("active");
            three.classList.add("active");
            four.classList.add("active");
            five.classList.add("active");
            six.classList.add("active");
            seven.classList.add("active");
        }
        break;
    default:
        break;
}
