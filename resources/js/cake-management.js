const { forEach } = require("lodash");

// Modal event
const $ = document.querySelector.bind(document);
var openmodal = document.querySelectorAll('.modal-open')

for (var i = 0; i < openmodal.length; i++) {
    openmodal[i].addEventListener('click', function(event){
        event.preventDefault()
        toggleModal()
        fetchData(this)
        setCtrl(this)
    })
}
// Close
const overlay = document.querySelector('.modal-overlay')
overlay.addEventListener('click', toggleModal)
var closemodal = document.querySelectorAll('.modal-close')
for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', function (e) {
        toggleModal()
        e.preventDefault()
    })
}
// Esc
document.onkeydown = function(evt) {
    evt = evt || window.event
    var isEscape = false
    if ("key" in evt) {
    isEscape = (evt.key === "Escape" || evt.key === "Esc")
    } else {
    isEscape = (evt.keyCode === 27)
    }
    if (isEscape && document.body.classList.contains('modal-active')) {
        toggleModal()
    }
};

function toggleModal () {
    const body = document.querySelector('body')
    const modal = document.querySelector('.modal')
    modal.classList.toggle('opacity-0')
    modal.classList.toggle('pointer-events-none')
    body.classList.toggle('modal-active')
}

// Fetch data 
function fetchData(btn) {
    let id = btn.dataset.id;
    url = window.location.pathname + "/" + id;
    fetch(url, {
        method: 'GET',
        headers: {
          'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .then(data => {
        $("#cake-name").value = data.name;
        $("#cake-desc").value = data.desc;
        $("#cake-price").value = data.price;

        //flavor
        $("#cake-flavor").value = "";
        data.cake_details.forEach(element => {
            $("#cake-flavor").value +=  element.flavor + '\r\n';
        });
        // Load img
        $("#cake-imgs").innerHTML = "";
        data.imgs.forEach((element, index) => {
            let img = document.createElement("img");
            img.src = element.url;
            img.classList = "object-cover bg-gray-300 mx-1";
            $("#cake-imgs").append(img);
        });
    })
}
function setCtrl(btn) {
    const method = btn.getAttribute("method");
    const btnSave = $(".modal .modal-save");
    const btnClose = $(".modal button.modal-close");
    const form = $(".modal-form");
    if (!method) return;

    switch (method) {
        case 'cake-view':
            btnSave.classList.add("hidden");
            btnClose.classList.remove("hidden");
            break;
        case 'cake-edit':
            btnSave.classList.remove("hidden");
            btnClose.classList.remove("hidden");

            btnSave.onclick = function () {
                //Form method
                let id = btn.dataset.id;
                url = window.location.pathname + "/" + id;

                // Nhớ validate


                
                form.action = url
                form.method = "POST" 
                form.submit();

            }

            break;
    
        default:
            break;
    }
}