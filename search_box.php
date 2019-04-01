<!-- Adapted from: https://shipow.github.io/searchbox/#tabprefix . Retrieval Date: 15/02/19 -->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/search_box_styles.css">
</head>
<body>
<svg xmlns="http://www.w3.org/2000/svg" style="display:none">
    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-search-11" viewBox="0 0 40 40">
        <path d="M15.553 31.106c8.59 0 15.553-6.963 15.553-15.553S24.143 0 15.553 0 0 6.963 0 15.553s6.963 15.553 15.553 15.553zm0-3.888c6.443 0 11.665-5.222 11.665-11.665 0-6.442-5.222-11.665-11.665-11.665-6.442 0-11.665 5.223-11.665 11.665 0 6.443 5.223 11.665 11.665 11.665zM27.76 31.06c-.78-.78-.778-2.05.004-2.833l.463-.463c.783-.783 2.057-.78 2.834-.003l8.168 8.17c.782.78.78 2.05-.003 2.832l-.463.463c-.783.783-2.057.78-2.833.003l-8.17-8.167z"
              fill-rule="evenodd" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-clear-4" viewBox="0 0 20 20">
        <path d="M11.664 9.877l4.485 4.485-1.542 1.54-4.485-4.485-4.485 4.485-1.54-1.54 4.485-4.485-4.485-4.485 1.54-1.54 4.485 4.484 4.485-4.485 1.54 1.542-4.484 4.485zM10 20c5.523 0 10-4.477 10-10S15.523 0 10 0 0 4.477 0 10s4.477 10 10 10z" fill-rule="evenodd"
        />
    </symbol>
</svg>

<form class="searchbox sbx-custom" method="post" action="product_page.php" id="search_item" name="search_item">
    <div role="search" class="sbx-custom__wrapper">
        <input type="search" id="item" name="item" placeholder="Go on, search for something..." autocomplete="on" class="sbx-custom__input">
        <button type="submit" title="Submit your search query." class="sbx-custom__submit">
            <svg role="img" aria-label="Search">
                <use xlink:href="#sbx-icon-search-11"></use>
            </svg>
        </button>
        <button type="reset" title="Clear the search query." class="sbx-custom__reset">
            <svg role="img" aria-label="Reset">
                <use xlink:href="#sbx-icon-clear-4"></use>
            </svg>
        </button>
    </div>
</form>

<!-- Code to search for nothing and display all items when link to "shop" is clicked -->
<script type="text/javascript">
    document.querySelector('.searchbox [type="reset"]').addEventListener('click', function() {  this.parentNode.querySelector('input').focus();});
</script></body>
</html>

