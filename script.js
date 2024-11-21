


// 10/19/24

let btn1 = document.querySelector("#btn-one");
let btn2 = document.querySelector("#btn-two");

let img = document.querySelector('#images');
let imageArray = ["images/2.jpg", "images/5.jpg", "images/4.jpg"];
let slideimg;
let index = 0;
function slideshow(){
    slideimg = imageArray[index];
    index = (index+1)% imageArray.length;
    img.src = slideimg
}

  

btn2.addEventListener('click',slideshow)
btn1.addEventListener('click',slideshow)

const form = document.querySelector('form');
form.addEventListener('submit', function (e) {
    e.preventDefault();
    const height = parseInt(document.querySelector('#height').value);
    const weight = parseInt(document.querySelector('#weight').value);
    const results = document.querySelector('#results');

    if (!height || height <= 0 || isNaN(height)) {
        results.innerHTML = `Please enter a valid height.`;
    } else if (!weight || weight <= 0 || isNaN(weight)) {
        results.innerHTML = `Please enter a valid weight.`;
    } else {
        const bmi = (weight / ((height * height) / 10000)).toFixed(2);
        let message = `<span>${bmi}</span> - `;

        if (bmi < 18.6) {
            message += "Underweight";
        } else if (bmi >= 18.6 && bmi <= 24.9) {
            message += "Normal range";
        } else {
            message += "Overweight";
        }

        results.innerHTML = message;
    }
});
