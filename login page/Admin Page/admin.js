
var addProduct = document.querySelector('#addProduct');
addProduct.addEventListener('click', () => {
    console.log("hello add");
    $.ajax({
        url: "./controller/AddProducts.php",
        success: function (result) {
            $(".main").html(result);
        }
    });
})

var viewProduct = document.querySelector('#viewProduct');
viewProduct.addEventListener('click', () => {
    $.ajax({
        url: "./view pages/viewProduct.php",
        success: function (result) {
            $(".main").html(result);
        }
    });
})

var dashboard = document.querySelector('#dashboard');
dashboard.addEventListener('click', () => {
    $.ajax({
        url: "./view pages/dashboard.php",
        success: function (result) {
            $('.main').html(result);
        }
    });
})

var users = document.querySelector('#users');
users.addEventListener('click', () => {
    $.ajax({
        url: "./view pages/users.php",
        success: function (result) {
            $('.main').html(result);
        }
    });
})