var number1, number2, result;
function operate(event){
    number1 =  parseFloat(document.getElementById("num1").value);
    number2 = parseFloat(document.getElementById("num2").value);

    switch(event.target.id){
        case "divide":
            console.log(number1/number2);
            break;
        case "add":
            console.log(number1+number2); // object
            break;
        case "subtract":
            console.log(number1-number2);
            break;
        case "multiply":
            console.log(number1*number2);
            break;
    }
}

$(document).ready(function () {
    $("#add, #subtract, #divide, #multiply").click(operate);
    //$("#add, #subtract, #divide, #multiply").click(operate);
});

