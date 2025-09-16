// EVENT HANDLING TUTORIAL

// 1. select all the elements that in involved in the event
// (input, output, trigger)

const numberParagraph = document.querySelector("p");
const clickMeButton = document.querySelector("button");

// 2. write handler function
function handleButtonClick(){
    numberParagraph.innerText = parseInt(numberParagraph.innerText) + 1;
    //numberParagraph.innerText = +numberParagraph.innerText + 1;
}

// 3. add an eventlistener - when to run that function?
clickMeButton.addEventListener('click', handleButtonClick);

