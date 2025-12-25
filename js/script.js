const images = [
  "/assets/s1.png",
  "/assets/s2.png",
  "/assets/s3.png",
  "/assets/s4.png",
  "/assets/s5.png",
  "/assets/s6.png"
];

const img = document.querySelector(".gallery-one img");
let currentIndex = 0;

let interval = setInterval(changeImage, 2000);

function changeImage() {
  currentIndex = (currentIndex + 1) % images.length;
  img.src = images[currentIndex];
}

img.addEventListener("mouseenter", () => clearInterval(interval));
img.addEventListener("mouseleave", () => {
  interval = setInterval(changeImage, 2000);
});



// zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz
document.getElementById("goSession").addEventListener("click", function () {
    window.location.href = "sessions.html";
  });