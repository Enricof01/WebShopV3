let cart = []

function add(event){
    console.log('button wurde geklickt' + event.target.id)
    
    let newItem = { id: 1, name: event.target.id, quantity: 1, price: "14,99"};
    cart.push(newItem);
    localStorage.setItem('cart', JSON.stringify('cart'));

    cart.forEach(item =>{
        console.log(item)
    });

}