
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


function goToSessionDetail(){
  window.location.href = "session-detail.html";

}