let card = document.querySelectorAll('.card');
let overlay = document.querySelector("#overlay");

const createExcerpt=(word)=>{
  return word.substring(0,1000)+"...";
}

const searchMovie=async (id)=>{
  let query = await fetch(
    "https://api.themoviedb.org/3/person/"+id+"?api_key=7dddb325f57844046ce6315eeb90960f&language=en-US");
  let jsonItem = await query.json();
  return jsonItem;
}

const innerhtml = (data,element)=>{
  const popupContainer = document.createElement('div');
  popupContainer.id = 'popup';
  popupContainer.className = 'pop-container container';
  const popup = document.createElement('div');
  popup.className = 'popup';
  popup.id = 'popup';
  const popupHeader = document.createElement('div');
  popupHeader.className = 'popup-header';
  const h1 = document.createElement('h1');
  h1.innerHTML = data.name;
  const closeButton = document.createElement('button');
  closeButton.id = 'close-popup';
  closeButton.innerHTML = '&times;';
  const p = document.createElement('p');
  if(data.biography==="" || data.biography===null){
    p.innerHTML="There is no bio for this person, but you can create your own one!"
  }else{
    //p.innerHTML = createExcerpt(data.biography);
    p.innerHTML = data.biography;
  }
  
  popupHeader.appendChild(h1);
  popupHeader.appendChild(closeButton);
  popup.appendChild(popupHeader);
  popup.appendChild(p);
  popupContainer.appendChild(popup);
  return popupContainer;
}


const invoke = async (element, box) => {
  return searchMovie(box.id).then((data) => {
    overlay.classList.toggle("active");
    popupContainer = innerhtml(data,element);
    element.appendChild(popupContainer);
    buttonClose = element.querySelector("#close-popup")
    buttonClose.addEventListener("click", () => {
      popupwindow = document.querySelector("#popup");
      overlay.classList.toggle("active");
      popupwindow.remove();
    });
  }
  );
};

const createPopupPromise = (element, box) => {
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
