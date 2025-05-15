let cart = JSON.parse(localStorage.getItem('cart')) || [];

const products = [
    {
        productNo:0,
        name: "Vollmilch",
        price: 3.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/vollmilch.png",
        quantity: 1.00
    },

    {
        productNo:1,
        name: "Edelbitter",
        price: 4.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/dunkel.png",
        quantity: 1
    },

    {
        productNo:2,
        name: "Nuss Genuss",
        price:5.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/Nuss.png",
        quantity: 1
    },

    {
        productNo:3,
        name: "Vanilletraum",
        price: 3.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/weiße.png",
        quantity: 1
    },

    {
        productNo:4,
        name: "Minztraum",
        price: 4.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/minze.png",
        quantity: 1
    },

    {
        productNo:5,
        name: "Erdbeerschokolade",
        price: 5.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/erdbeere.png",
        quantity: 1
    },

    {
        productNo:6,
        name: "Himmbeerschokolade",
        price: 5.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/himbeer.png",
        quantity: 1
    },

    {
        productNo:7,
        name: "Karibische Mango",
        price: 5.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/mango.png",
        quantity: 1
    },

    {
        productNo:8,
        name: "Dubai Schokolade",
        price: 3.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/dubai.png",
        quantity: 1
    },

    {
        productNo:9,
        name: "Kaffeezauber",
        price: 6.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/kaffee.png",
        quantity: 1
    },

    {
        productNo:10,
        name: "Erdbeer Zitrone",
        price: 6.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/lemon.png",
        quantity: 1
    },

    {
        productNo:11,
        name: "Chillade",
        price: 6.99,
        description: "Please enter description amk",
        imageSrc: "../images/Produkte/chilli.png",
        quantity: 1
    },
]

function add(event){

    let buttonId = event.target.id;
    let productNo = parseInt(buttonId.replace("product", ""));
    console.log("Index of product: " + productNo)
    alreadyInCart = false;

    
    


    cart.forEach(item =>{
        // console.log(item)
        if(productNo == item.productNo)
        {
            alreadyInCart = true;
            cartIndex = cart.findIndex(product => product.name === item.name)

            console.log("Index of: " + cartIndex)
        }
    });


    //If not already in cart we push a new Element to the array

    if (!alreadyInCart)
    {
        let newItem = products[productNo]
        cart.push(newItem);
        localStorage.setItem('cart', JSON.stringify(cart));
    
        let currentCart = JSON.parse(localStorage.getItem('cart'));
        console.log(currentCart);

        alert(products[productNo].name + " zum Warenkorb hinzugefügt")

    }

    //If the product is already in cart we just add up the quantity

    else{


        if(cart[cartIndex].quantity < 4)
        {
            cart[cartIndex].quantity += 1;
            alert(products[productNo].name + " zum Warenkorb hinzugefügt")
            localStorage.setItem('cart', JSON.stringify(cart));
        } 

        else{
            alert("max number reached")
        }

        console.log("Quantity of " + products[productNo].name + " product just added: " + cart[cartIndex].quantity);
    }


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
            <select class="form-select" aria-label="Default select example" style = "width: 20%;" id = "selectedQuantity${index}" onchange = "changeQuantity(event);">
                <option selected disabled hidden id = "option">${item.quantity}</option>

                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              <div style="margin-top: 1%;">
                <button id = "remove${index}"onclick = "removeItem(${index})" type="button" class="btn btn-danger"><i class='bx bx-trash'></i></button>

              </div>
        </div>

        <div class = "col-5 price">
            <div class = "productPrice">
                <p>${item.price * item.quantity}€</p>         
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



function changeQuantity(event) {

    let quantityId = event.target.id;


   

    let productIndex = parseInt(quantityId.replace("selectedQuantity", ""));

 

    console.log(event.target.value);

    cart[productIndex].quantity = parseInt(event.target.value);

    localStorage.setItem('cart', JSON.stringify(cart));

    updateCart2();
    
}

