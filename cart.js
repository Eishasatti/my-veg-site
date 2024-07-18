const product = [
    {
        id: 0,
        image: 'image/potato.jpg',
        title: "potato",
        price: 200,
    },
    {
        id: 1,
        image: 'image/carot1.jpg',
        title: "carrot",
        price: 400,
    },
    {
        id: 2,
        image: "image/brinjal.jpeg",
        title: "brinjal",
        price: 100,
    },
    {
        id: 3,
        image: "image/spanish.jpg",
        title: "spanish",
        price: 30,
    },
    {
        id: 4,
        image: 'image/onon.jpg',
        title: "onion",
        price: 200,
    },
    {
        id: 5,
        image: 'image/tomato.jpg',
        title: "tomato",
        price: 300,
    },
    {
        id: 6,
        image: 'image/pea.jpg',
        title: "peas",
        price: 350,
    },
    {
        id: 7,
        image: 'image/brocli.jpg',
        title: "brocli",
        price: 400,
    },
    {
        id: 8,
        image: 'image/garlic.jpg',
        title: "garlic",
        price: 300,
    }
];

const categories = [...new Set(product.map((item) => { return item }))];
let i = 0;
document.getElementById('root').innerHTML = categories.map((item) => {
    var { image, title, price } = item;
    return (
        `<div class='box'>
           <div class='img-box'>
           <img class='images' src=${image}></img>
           </div>
           <div class='bottom'>
           <p>${title}</p>
           <h2> $ ${price}.00</h2>
           <button onclick='addtocart(${i++})'>add to cart</button>
           </div>
         </div>`
    );
}).join('');