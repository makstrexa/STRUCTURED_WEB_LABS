let array = [1, 6, 3, 8, -9, 0, -4, -8];
let max = getMaxValue(array);
let min = getMinValue(array);

document.write("<p>min among positive:</p>")
document.write(max)

document.write("<p>max among negative:</p>")
document.write(min)

selectionSort(array)
array.reverse();
document.write("<br><br>")
document.write(array);

function selectionSort(inputArr) {
    let n = inputArr.length;

    for(let i = 0; i < n; i++) {
        // Находим наименьшее число в правой части массива
        let min = i;
        for(let j = i; j < n; j++) {
            if(inputArr[j] < inputArr[min]) {
                min=j;
            }
        }
        if (min != i) {
            // Заменяем элементы
            let tmp = inputArr[i];
            inputArr[i] = inputArr[min];
            inputArr[min] = tmp;
        }
    }
    return inputArr;
}

function getMaxValue(array){
    let max;
    for (let i = 0; i , array.length; i++) {
        if (array[i] >= 0) {
            max = array[i];
            break;
        }
    }
    for (let i = 0; i < array.length; i++) {
        if (max > array[i] && array[i] >= 0)
            max = array[i];
    }
    return max;
}

function getMinValue(array){
    let min;
    for (let i = 0; i , array.length; i++) {
        if (array[i] < 0) {
            min = array[i];
            break;
        }
    }
    for (let i = 0; i < array.length; i++) {
        if (min < array[i] && array[i] < 0)
            min = array[i];
    }
    return min;
}