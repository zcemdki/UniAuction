//JS to alert user they cannot view without being logged in
document.querySelector("#account_unregistered").addEventListener("click", function () {
    alert("Sorry, you must be signed in to view account details. \nYou will be redirected to the sign in page.");
});

document.querySelector("#cart_unregistered").addEventListener("click", function () {
    alert("Sorry, you must be signed in to view cart. \nYou will be redirected to the sign in page.");
});

document.querySelector("#sell_unregistered").addEventListener("click", function () {
    alert("Sorry, you must be signed in to sell an item. \nYou will be redirected to the sign in page.");
    location.href = "includes_login.php";
});

document.querySelector("#sell_unregistered").addEventListener("click", function () {
    alert("Sorry, you must be signed in to sell an item. \nYou will be redirected to the sign in page.");
    location.href = "includes_login.php";
});

//Perform an empty search on the search bar to display all items
function emptySearch()
{
    document.querySelector("#search_item").submit();
}

//Go to top of page
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}