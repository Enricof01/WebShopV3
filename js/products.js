const searchButton = document.getElementById('searchButton');
const searchInupt = document.getElementById('searchInput');
const productArea = document.getElementById('productArea');

let filteredProducts;

searchButton.addEventListener('click', function (event) {

    event.preventDefault();
    let query = searchInupt.value.toLowerCase();

    filteredProducts = products.filter(product =>
        product.name.toLowerCase().includes(query)
    );

    displayProducts();
});

function displayProducts() {
    console.log(filteredProducts.length);

    productArea.innerHTML = '';

    if (filteredProducts.length == 12) {
        productArea.innerHTML = `
            <div class="row">
      <h1 style="text-align: center; font-weight: bold;">Unsere Klassiker</h1>
      <br>
      <br>
      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/vollmilch.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id="product0" onclick="add(event)" type="button" class="btn btn-dark">Shop Now</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>VOLLMILCH<br>3,99 €</p></h3>
        </div>

      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/dunkel.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product1" type="button" onclick="add(event)"  class="btn btn-dark">Shop Now</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>EDELBITTER<br>4,99 €</p></h3>
        </div>

      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/Nuss.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product2" type="button" onclick="add(event)"  type="button" class="btn btn-dark">Shop Now</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>NUSS GENUSS <br>5,99 €</p></h3>
        </div>

      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/weiße.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product3" type="button" onclick="add(event)" type="button" class="btn btn-dark">Shop Now</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>VANILLETRAUM <br>3,99 €</p></h3>
        </div>

      </div>


    </div>
    <!-- Reihe Zwei Produkte -->
    <div class="row productRow2">
      <h1 style="text-align: center; font-weight: bold;">Unsere Sommer Hits</h1>
      <br>
      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/minze.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product4" type="button" onclick="add(event)" type="button" class="btn btn-dark">Shop Now</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>MINZTRAUM <br>4,99 €</p></h3>
        </div>

      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/erdbeere.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product5" type="button" onclick="add(event)" type="button" class="btn btn-dark">Shop Now</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>ERDBEERSCHOKOLADE <br>5,99 €</p></h3>
        </div>

      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/himbeer.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product6" type="button" onclick="add(event)" type="button" class="btn btn-dark">Shop Now</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>HIMBEERSCHOKOLADE <br>5,99 €</p></h3>
        </div>

      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/mango.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product7" type="button" onclick="add(event)" type="button" class="btn btn-dark">Shop Now</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>KARIBISCHE MANGO <br>5,99 €</p></h3>
        </div>

      </div>


    </div>
    <!-- Reihe Drei Produkte -->
    <div class="row productRow2">
      <h1 style="text-align: center; font-weight: bold;">Unsere Spezialsorten</h1>
      <br>
      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/dubai.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product8" type="button" onclick="add(event)" type="button" class="btn btn-dark">Shop Now</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>DUBAI SCHOKOLADE <br>12,99 €</p></h3>
        </div>

      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/kaffee.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product9" type="button" onclick="add(event)"  type="button" class="btn btn-dark">Shop Now</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>KAFFEEZAUBER <br>6,99 €</p></h3>
        </div>

      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/lemon.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product10" type="button" onclick="add(event)" type="button" class="btn btn-dark">Shop Now</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>ERDBEERE ZITRONE <br>6,99 €</p></h3>
        </div>

      </div>

      <div class="col-5 product1">
        <div class="imgContainer1">
          <img src="../images/Produkte/chilli.png" alt="" class="img-fluid">
          <div class="buyBar1">
            <button id = "product11" type="button" onclick="add(event)" type="button" class="btn btn-dark">Shop Now</button>
          </div>
        </div>
        <div class="priceBox1">
          <h3 style="text-align: center; font-weight: bold;"><p>CHILLILADE <br>6,99 €</p></h3>
        </div>

      </div>


    </div>
        `;
    }

    else if (filteredProducts.length == 0) {
        productArea.innerHTML = '<h2>Keine Einträge</h2>';
    }

    else if (filteredProducts.length >= 1 && filteredProducts.length <= 4) {

        const rowDiv = document.createElement('div');
        rowDiv.className = "row"

        filteredProducts.forEach(product => {
            // Erstelle das äußere Div


            const productDiv = document.createElement("div");
            productDiv.className = "col-5 product1";

            // Erstelle das Bild-Container-Div
            const imgContainer = document.createElement("div");
            imgContainer.className = "imgContainer1";

            // Bild-Element
            const img = document.createElement("img");
            img.src = product.imageSrc;
            img.alt = "";
            img.className = "img-fluid";

            // BuyBar-Div mit Button
            const buyBar = document.createElement("div");
            buyBar.className = "buyBar1";

            const button = document.createElement("button");
            button.id = `product${product.productNo}`;
            button.className = "btn btn-dark";
            button.type = "button";
            button.textContent = "Shop Now";
            button.setAttribute("onclick", "add(event)");

            buyBar.appendChild(button);

            // Alles ins Bild-Container-Div einfügen
            imgContainer.appendChild(img);
            imgContainer.appendChild(buyBar);

            // Preis-Box
            const priceBox = document.createElement("div");
            priceBox.className = "priceBox1";

            const h3 = document.createElement("h3");
            h3.style.textAlign = "center";
            h3.style.fontWeight = "bold";

            const p = document.createElement("p");
            p.innerHTML = `${product.name}<br>${product.price} €`;

            h3.appendChild(p);
            priceBox.appendChild(h3);

            // Alles zusammenfügen
            productDiv.appendChild(imgContainer);
            productDiv.appendChild(priceBox);

            rowDiv.appendChild(productDiv)


        });

            // In ein bestehendes Container-Element einfügen, z. B. mit ID "productContainer"
            productArea.appendChild(rowDiv);

    }
}