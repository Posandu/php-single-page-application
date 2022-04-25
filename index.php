<?php
require_once 'utils.php';
echo head('Home', 'index');
?>

<h1>
    Home!
</h1>
<p>
    Welcome to my website!
</p>

<pre id="javascript"></pre>

<style>
    h1 {
        color: #4a4f56;
    }
</style>

<script>
    document.getElementById('javascript').innerHTML = 'Hey! I\'m JavaScript!';
</script>

<?php
echo footer();
