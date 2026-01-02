document.querySelectorAll(".check-box-container").forEach(card => {
    const radio = card.querySelector('input[type="radio"]');

    card.addEventListener("click", () => {
        radio.checked = true;
    });
});

radio.addEventListener("click", e => e.stopPropagation());


document.querySelectorAll(".input-card").forEach(card => {
    const input = card.querySelector("input");

    card.addEventListener("click", () => {
        input.focus();
        input.showPicker && input.showPicker(); 
    });
});



function goToHallOrderSuccess(){
  window.location.href = "hall-success-order.php";
}