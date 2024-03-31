var prevBtn = document.getElementById('prevBtn');
var nextBtn = document.getElementById('nextBtn');
var cardsContainer = document.querySelector('.cards-container');

prevBtn.addEventListener('click', () => {
  cardsContainer.style.transition = 'none';
  cardsContainer.insertBefore(cardsContainer.lastElementChild, cardsContainer.firstElementChild);
  cardsContainer.style.transform = 'translateX(-300px)';
  setTimeout(() => {
    cardsContainer.style.transition = 'transform 1s ease-in-out';
    cardsContainer.style.transform = 'translateX(0)';
  }, 100);
});

nextBtn.addEventListener('click', () => {
  cardsContainer.style.transition = 'none';
  cardsContainer.appendChild(cardsContainer.firstElementChild);
  cardsContainer.style.transform = 'translateX(300px)';
  setTimeout(() => {
    cardsContainer.style.transition = 'transform 1s ease-in-out';
    cardsContainer.style.transform = 'translateX(0)';
  }, 300);
});
