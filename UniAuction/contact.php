<?php
    include_once 'header.php';
?>
        
                <div id="container">
                    <div id="main">
                         <form class="form" action="index.html" method="POST">
                            Name: <input type="text" name="name" placeholder="Input your full name">
                            Email: <input type="text" name="email" placeholder="Write your email">
                            Query: <textarea name="message" placeholder="Write your message">
                            </textarea>

                            <select name="Age">


                            </select>
                            <button type="submit" name="submit">Send
                            </button>
                        </form>
                    </div>
                </div>
<?php
    include_once 'footer.php';
?>
