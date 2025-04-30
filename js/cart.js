let cart = JSON.parse(localStorage.getItem('cart')) || [];

const products = [
    {
        index:0,
        name: "Vollmilch",
        price: 3.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/vollmilch.png"
    },

    {
        index:1,
        name: "Edelbitter",
        price: 4.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/dunkel.png"

    },

    {
        index:2,
        name: "Nuss Genuss",
        price: 5.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/Nuss.png"
    },

    {
        index:3,
        name: "Vanilletraum",
        price: 3.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/weiße.png"
    },

    {
        index:4,
        name: "Minztraum",
        price: 4.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/minze.png"
    },

    {
        index:5,
        name: "Erdbeerschokolade",
        price: 5.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/erdbeere.png"
    },

    {
        index:6,
        name: "Himmbeerschokolade",
        price: 5.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/himbeer.png"
    },

    {
        index:7,
        name: "Karibische Mango",
        price: 5.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/mango.png"
    },

    {
        index:8,
        name: "Dubai Schokolade",
        price: 3.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/dubai.png"
    },

    {
        index:9,
        name: "Kaffeezauber",
        price: 6.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/kaffee.png"
    },

    {
        index:10,
        name: "Erdbeer Zitrone",
        price: 6.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/lemon.png"
    },

    {
        index:11,
        name: "Chillade",
        price: 6.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/chilli.png"
    },
]

function add(event){
    console.log('button wurde geklickt' + event.target.id)

    let buttonId = event.target.id;
    let index = parseInt(buttonId.replace("product", ""));
    console.log(index)
    
    let newItem = products[index]
    cart.push(newItem);
    localStorage.setItem('cart', JSON.stringify(cart));

    let currentCart = JSON.parse(localStorage.getItem('cart'));
    console.log(currentCart);
    cart.forEach(item =>{
        console.log(item)
    });

}

// function updateCart(){
//     const cartArea = document.querySelector(".cartBody")

//     console.log("updated")

//     cart.forEach((item, index) =>{
//         let productRow = document.createElement('div')
//         productRow.classList.add('row')
//         productRow.classList.add(`product${index}`)

//         let productCol = document.createElement('div')
//         productCol.classList.add('col-2')


//         const line = document.createElement('hr')
//         cartArea.appendChild(line)
//         cartArea.appendChild(productRow)
//         productRow.appendChild(productCol)

//         console.log(productRow.className)
//     })

// }

function updateCart2(){

    const cartArea = document.querySelector(".cartArea")
    currentCart = JSON.parse(localStorage.getItem('cart'));

    cartArea.innerHTML = '';


    cart.forEach((item,index) =>{

        cartArea.innerHTML += `

        <div class = "row product1">
        <div class = "col-2">

            <div class = "productImage">
                <img src= ${item.imageSrc} alt="" class = "img-fluid">
            </div>

        </div>

        <div class = "col-5">
            <p>${item.name} <br> ${item.description}</p>
            <select class="form-select" aria-label="Default select example" style = "width: 20%;">
                <option selected>1</option>
                <option value="1">2</option>
                <option value="2">3</option>
                <option value="3">4</option>
              </select>
              <div style="margin-top: 1%;">
                <button id = "remove${index}"onclick = "removeItem(${index})" type="button" class="btn btn-danger"><i class='bx bx-trash'></i></button>

              </div>
        </div>

        <div class = "col-5 price">
            <div class = "productPrice">
                <p>${item.price}, ${index}</p>
            </div>

        </div>

    </div>
         <hr>


        
        `;
    })
}

function removeItem(number){
    // console.log(event.target.id)

    // let removeButtonId = event.target.id;
    // let removeindex = parseInt(removeButtonId.replace("remove", ""));

    removeindex = number;
    cart.splice(removeindex,1);

    localStorage.setItem('cart', JSON.stringify(cart))
    updateCart2();

}