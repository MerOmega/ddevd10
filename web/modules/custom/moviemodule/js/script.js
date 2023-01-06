let card = document.querySelectorAll('.card');

let searchMovie=async (id)=>{
  let query = await fetch(
    "https://api.themoviedb.org/3/person/"+id+"?api_key=7dddb325f57844046ce6315eeb90960f&language=en-US");
  let jsonItem = await query.json();
  return jsonItem;
}

const innerhtml = (name,pofile)=>{
    return (`
    <div id="popup" class="pop-container container">
      <div class="popup" id="popup">
        <div class="popup-header">
        <h1> ${name} </h1>
        <button id="close-popup">&times;</button>
        </div> 
        <p>${pofile}</p>
      </div>
     </div>
    `);
}


let invoke = async (element, box) => {
  return searchMovie(box.id).then((data) => {
    element.innerHTML += innerhtml(data.name, data.biography);
    button = element.querySelector("#close-popup");
    button.addEventListener("click", () => {
      popup = document.querySelector("#popup");
      popup.remove();
    });
  });
};

let createPopupPromise = (element, box) => {
  return new Promise((resolve) => {
    resolve(invoke(element, box));
  });
};

card.forEach((box) => {
  box.addEventListener("click", async () => {
    element = document.querySelector(".grid");
    await createPopupPromise(element, box);
  });
});
