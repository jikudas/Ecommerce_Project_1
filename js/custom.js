// const magnifier_lens = document.querySelector('.magnifier-lens');
// const product_img = document.querySelector('.pro-detail-left img');
// const magnified_img = document.querySelector('.magnified-img');

// function magnify(product_img, magnified_img) {
//     product_img.addEventListener('mousemove', moveLens);
// }

// function moveLens(e) {
//     console.log(`X: ${e.pageX} Y: ${c.pageY}`);
// }

// magnify(product_img, magnified_img);

// $(function () {
//     $(".pro_detail_img, .img-gallery").pro_detail_img({
//         zoomWidth: 400,
//         tint: '#333',
//         Xoffset: 15,
//     });
// });

// product details page zoom effect
$("#zoom_01").ezPlus();
$("#zoom_02").ezPlus();
$("#zoom_03").ezPlus();
$("#zoom_04").ezPlus();

// cart summary in the cart icon


const addToCart = document.getElementsByClassName('option1');
const cartItems = document.getElementsByClassName('cart-items');
for (var i = 0; i < addToCart.length; i++) {
    addToCart[i].addEventListener('click', addedCart);
}


function addedCart(event) {
    event.preventDefault();
    let count = 0;
    ++count;
    cartItems.innerText = count;
    return cartItems;
}





// =====================
// Previous Codes
// =====================

// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();


// client section owl carousel
$(".client_owl-carousel").owlCarousel({
    loop: true,
    margin: 0,
    dots: false,
    nav: true,
    navText: [],
    autoplay: true,
    autoplayHoverPause: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
});



/** google_map js **/
function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(40.712775, -74.005973),
        zoom: 18,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

