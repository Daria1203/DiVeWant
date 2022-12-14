// const collectionBtn = document.querySelectorAll ('.collection__btn');
// const cartProductsList = document.querySelector ('.cart-content__list');
// const cart = document.querySelector ('.cart');
// const cartQuantity = document.querySelector ('.cart__quantity');
// const fullPrice = document.querySelector ('.fullprice');
// let price = 0;

// const randomId = () => {
// 	return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
// };

// const priceWithoutSpaces = (str) => {
// 	return str.replace(/\s/g, '');
// };

// const normalPrice = (str) => {
// 	return String(str).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
// };


// const generateCartProduct = (img, titlie, price, id) => {

//     return `
//     <li class="cart-content__item">
//                   <article class="cart-content__product cart-product" data-id="${id}">
//                     <img src="${img}" alt="белая баска-карточка" widht="100px" height="100px" class="cart__product__img">
//                     <div class="cart-product__text">
//                       <h3 class="cart-product__title">${titlie}</h3>
//                       <span class="cart-product__prise">${price}</span>
//                     </div>
//                     <button class="cart-product__delete" aria-label="Удалить товар"></button>
//                   </article>
//                 </li>
//     `;
// }

// productsBtn.forEach (el => {
//     el.closest('collection__basque-block2') .setAttribute('data-id',randomId())
//     el.addEventListener('click', (e) => {

//     })
// })