<?php
require_once 'utils.php';
echo head('Home', 'about');
?>

<h1>
    About!
</h1>
<p>
    Contact
</p>

<div id="form">
    <textarea id="message" cols="30" rows="10"></textarea>
    <button id="submit">
        Submit
    </button>
</div>

<style>
    #form {
        max-width: 400px;
    }

    #message {
        width: 100%;
        height: 100px;
        border: 1px solid #ccc;
    }

    #submit {
        padding: 10px 20px;
        margin-top: 10px;
        background-color: #4a4f56;
        color: #fff;
        border: none;
        border-radius: 100px;
    }
</style>

<script>
    document.getElementById('submit').onclick = _ => alert("Message: " + document.getElementById('message').value);
</script>

<?php
echo footer();
