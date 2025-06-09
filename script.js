
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('nav-links');
const aboutSec = document.getElementById('aboutSec');
const homeID = document.getElementById('homeID');
const aboutID = document.getElementById('aboutID');
const mainSec = document.getElementById('mainSec');


//toggle
hamburger.addEventListener('click', function() {
    if (navLinks.classList.contains('show')) {
        navLinks.classList.remove('show');
    } else {
        navLinks.classList.add('show');
    }
});





//COUNTER
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll('.number');

  counters.forEach(counter => {
    const target = +counter.getAttribute('data-target');
    const duration = 2000; // 2 seconds total
    const increment = Math.ceil(target / (duration / 30)); // every 30ms

    let count = 0;

    const updateCounter = () => {
      count += increment;
      if (count > target) count = target;
      counter.textContent = count;
      if (count < target) {
        setTimeout(updateCounter, 30);
      }
    };

    updateCounter();
  });
});
