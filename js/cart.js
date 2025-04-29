let cart = JSON.parse(localStorage.getItem('cart')) || [];

const products = [
    {
        index:0,
        name: "Vollmilch",
        price: 3.99,
        description: "Please enter description amk"
    },

    {
        index:1,
        name: "Edelbitter",
        price: 4.99,
        description: "Please enter description amk"
    },

    {
        index:2,
        name: "Nuss Genuss",
        price: 5.99,
        description: "Please enter description amk"
    },

    {
        index:3,
        name: "Vanilletraum",
        price: 3.99,
        description: "Please enter description amk"
    },

    {
        index:4,
        name: "Minztraum",
        price: 4.99,
        description: "Please enter description amk"
    },

    {
        index:5,
        name: "Erdbeerschokolade",
        price: 5.99,
        description: "Please enter description amk"
    },

    {
        index:6,
        name: "Himmbeerschokolade",
        price: 5.99,
        description: "Please enter description amk"
    },

    {
        index:7,
        name: "Karibische Mango",
        price: 5.99,
        description: "Please enter description amk"
    },

    {
        index:8,
        name: "Dubai Schokolade",
        price: 3.99,
        description: "Please enter description amk"
    },

    {
        index:9,
        name: "Kaffeezauber",
        price: 6.99,
        description: "Please enter description amk"
    },

    {
        index:10,
        name: "Erdbeer Zitrone",
        price: 6.99,
        description: "Please enter description amk"
    },

    {
        index:11,
        name: "Chillade",
        price: 6.99,
        description: "Please enter description amk"
    },
]

function add(event){
    console.log('button wurde geklickt' + event.target.id)
    
    let newItem = { id: 1, name: event.target.id, quantity: 1, price: "14,99"};
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
    const cartArea = document.querySelector(".cartBody")

    console.log(products[0].name)

    cart.forEach((item,index) =>{
        cartArea.innerHTML += `
         <hr>

        <div class = "row product1">
        <div class = "col-2">

            <div class = "productImage">
                <img src="https://placehold.co/150x150" alt="" class = "img-fluid">
            </div>

        </div>

        <div class = "col-5">
            <p>Prodcut description and more details</p>
            <select class="form-select" aria-label="Default select example" style = "width: 20%;">
                <option selected>1</option>
                <option value="1">2</option>
                <option value="2">3</option>
                <option value="3">4</option>
              </select>
              <div style="margin-top: 1%;">
                <button onclick = "updateCart();"type="button" class="btn btn-danger"><i class='bx bx-trash'></i></button>

              </div>
        </div>

        <div class = "col-5 price">
            <div class = "productPrice">
                <p>29,99</p>
            </div>

        </div>

    </div>


        
        `;
    })
}