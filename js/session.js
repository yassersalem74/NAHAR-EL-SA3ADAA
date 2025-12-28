
const dropdowns = document.querySelectorAll(".dropdown");

dropdowns.forEach(dropdown => {
  const btn = dropdown.querySelector(".dropdown-btn");
  const menu = dropdown.querySelector(".dropdown-menu");
  const label = btn.querySelector("span");

  // Toggle dropdown on button click
  btn.addEventListener("click", (e) => {
    e.stopPropagation();

    // Close other dropdowns
    dropdowns.forEach(d => {
      if (d !== dropdown) {
        d.classList.remove("open-menu");
      }
    });

    dropdown.classList.toggle("open-menu");
  });

  // Select item
  menu.querySelectorAll("li").forEach(item => {
    item.addEventListener("click", () => {
      label.textContent = item.textContent;
      dropdown.classList.remove("open-menu");
    });
  });
});

// Close dropdowns when clicking outside
document.addEventListener("click", () => {
  dropdowns.forEach(dropdown => {
    dropdown.classList.remove("open-menu");
  });
});



// zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz


function goToSessionDetail() {
  window.location.href = "session-detail.html";

}

// zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz


function goToSessionForm() {
  window.location.href = "forms/is-member.html";

}







//zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz

const images = [
  "assets/slider1.png",
  "assets/hall.png",
  "assets/session-2.png",
];


  let currentIndex = 0;
  const sliderImage = document.getElementById("sliderImage");

  let sliderInterval;
  const intervalTime = 2500;

  sliderImage.src = images[currentIndex];
  startAutoSlide();

  function startAutoSlide() {
    sliderInterval = setInterval(() => {
      nextSlide();
    }, intervalTime);
  }

  function resetAutoSlide() {
    clearInterval(sliderInterval);
    startAutoSlide();
  }

  function nextSlide() {
    currentIndex++;
    if (currentIndex >= images.length) {
      currentIndex = 0;
    }
    sliderImage.src = images[currentIndex];
  }

  function prevSlide() {
    currentIndex--;
    if (currentIndex < 0) {
      currentIndex = images.length - 1;
    }
    sliderImage.src = images[currentIndex];
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % images.length;
    sliderImage.src = images[currentIndex];
    resetAutoSlide();
  }

  function prevSlide() {
    currentIndex =
      (currentIndex - 1 + images.length) % images.length;
    sliderImage.src = images[currentIndex];
    resetAutoSlide();
  }
