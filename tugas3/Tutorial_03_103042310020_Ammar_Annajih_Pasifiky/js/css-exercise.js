const toggleAlignBtn = document.getElementById("toggleAlignBtn");
const toggleBoxBtn = document.getElementById("toggleBoxBtn");
const contentArea = document.getElementById("contentArea");
const colorBox = document.getElementById("colorBox");

const alignModes = ["text-left-mode", "text-center-mode", "text-right-mode"];
let currentAlignIndex = 0;

toggleAlignBtn.addEventListener("click", () => {
  alignModes.forEach((mode) => contentArea.classList.remove(mode));

  currentAlignIndex = (currentAlignIndex + 1) % alignModes.length;
  contentArea.classList.add(alignModes[currentAlignIndex]);
});

toggleBoxBtn.addEventListener("click", () => {
  colorBox.classList.toggle("active-color");
});
