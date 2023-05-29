function onResponse(response){
    return response.json();
}
function createImage(src) {
    const image = document.createElement('img');
    image.src = src;
    return image;
}
function onJSON(json){
    
        albumView.innerHTML="";
        const results = json.hits;
        for(foto of results)
        {
            const img_url = foto.webformatURL;
            const image = createImage(img_url);
            image.addEventListener('click', onThumbnailClick);
            const div= document.createElement("div");
            div.classList.add("element");
            div.appendChild(image);
            albumView.appendChild(div);

        }
}
function cerca_foto(event){
    event.preventDefault();
    const form_data={method: "post", body: new FormData(event.currentTarget) }
    fetch("search.php", form_data).then(onResponse).then(onJSON);
}
//modale
function onThumbnailClick(event) {
    const image = createImage(event.currentTarget.src);
    document.body.classList.add('no-scroll');
    modalView.style.top = window.pageYOffset + 'px';
    modalView.appendChild(image);
    modalView.classList.remove('hidden');
}
  
function onModalClick() {
    document.body.classList.remove('no-scroll');
    modalView.classList.add('hidden');
    modalView.innerHTML = '';
}
const modalView = document.querySelector('#modal-view');
modalView.addEventListener('click', onModalClick);

//______________

const albumView = document.querySelector('#album-view');
const form = document.querySelector('form');
form.addEventListener('submit', cerca_foto);