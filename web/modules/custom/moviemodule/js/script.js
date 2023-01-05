const card = document.querySelectorAll('.card');
const searchMovie=async (id)=>{
  let query = await fetch(
    "https://api.themoviedb.org/3/person/"+id+"?api_key=7dddb325f57844046ce6315eeb90960f&language=en-US");
  let jsonItem = await query.json();
  return jsonItem;
}

card.forEach(box => {
  box.addEventListener('click', ()=> {
    element = box.querySelector(".relevant-movies");
      if(!element.classList.contains("profile")){
        element.classList.add("profile");
        element.classList.add("uncover");
        searchMovie(box.id).then(data=>{
            let createNode = document.createElement("p");
            let node = document.createTextNode(data.biography);
            createNode.appendChild(node);
            element.appendChild(createNode);
        });
    }
  })
});
