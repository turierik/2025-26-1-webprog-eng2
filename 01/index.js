let numbers = [4, 3, 7, 2, 1, 0, -7, 9];

// numbers[100] = -1;

let sum = 0;
for (let i = 0; i < numbers.length; i++)
    sum += numbers[i]
console.log(sum)

sum = 0;
for (const number of numbers)
    sum += number
console.log(sum)

// Task 1: create an array that contains 
// only the even elements from numbers

let even = [];
for (const number of numbers){
    if (number % 2 === 0){
        //even[even.length] = number
        even.push(number)
    }
}
console.log(even)

numbers.filter(x => x % 2 === 0)

function isEven(x){
    return x % 2 === 0;
}

numbers.filter(isEven);

const isEven2 = x => x % 2 === 0;
numbers.filter(isEven2);

// Task 2: cube of the array numbers
numbers.map(x => x ** 3);

// Task 3: square of the even numbers only
numbers.filter(x => x % 2 === 0).map(x => x ** 2);

// Task 4: what is the largest number in numbers?
Math.max(numbers);
numbers.reduce((prevRes, element) => element > prevRes ? element : prevRes, -Infinity)
numbers.reduce((prevRes, element) => Math.max(element, prevRes), -Infinity)

