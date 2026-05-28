function sumOdd(min, max) {
    let sum = 0;
    let nomor = []
    for(let i = min; i <=max; i++){
        if(i % 2 !== 0) {
            sum += i;
            nomor.push(i);
        }
    }
    return {
        total: sum, langkah: nomor.join("+")
    }
}

function calculate() {
    let min = parseInt(document.getElementById("min").value);
    let max = parseInt(document.getElementById("max").value);
    let result = sumOdd(min,max);
    document.getElementById("result").innerHTML = "Hasil adalah: " + result.total + " (" + result.langkah + ")";
}