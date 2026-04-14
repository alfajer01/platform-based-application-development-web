function sumOddValues(min, max) {
  let total = 0;
  const oddNumbers = [];

  for (let number = min; number <= max; number += 1) {
    if (number % 2 !== 0) {
      total += number;
      oddNumbers.push(number);
    }
  }

  return { total, oddNumbers };
}

const minInput = document.getElementById("minValue");
const maxInput = document.getElementById("maxValue");
const resultText = document.getElementById("resultText");
const calculateBtn = document.getElementById("calculateBtn");
const resetBtn = document.getElementById("resetBtn");

calculateBtn.addEventListener("click", () => {
  const min = Number(minInput.value);
  const max = Number(maxInput.value);

  if (!Number.isFinite(min) || !Number.isFinite(max)) {
    resultText.textContent = "Masukkan nilai minimum dan maksimum terlebih dahulu";
    return;
  }

  if (min > max) {
    resultText.textContent = "Nilai minimum tidak boleh lebih besar dari nilai maksimum";
    return;
  }

  const { total, oddNumbers } = sumOddValues(min, max);

  if (oddNumbers.length === 0) {
    resultText.textContent = `Tidak ada bilangan ganjil pada rentang ${min} sampai ${max}`;
    return;
  }

  resultText.textContent =
    `Bilangan ganjil: ${oddNumbers.join(" + ")} = ${total}`;
});

resetBtn.addEventListener("click", () => {
  minInput.value = "";
  maxInput.value = "";
  resultText.textContent = "Masukkan nilai minimum dan maksimum, lalu klik tombol hitung";
});
