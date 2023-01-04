const card = document.querySelectorAll('.card');
card.forEach(box => {
  box.addEventListener('click', ()=> {
    box.classList.toggle('expanded');
    element = box.querySelector(".relevant-movies");
    element.classList.toggle('hidden');
    element.classList.toggle('uncover');
  })
});
