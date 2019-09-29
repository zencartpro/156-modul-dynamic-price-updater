<?php
//Load jQuery ONLY if jQuery has not been loaded. 
//Also want to prevent jQuery from loading again if bundled with a plugin or template package
?>
<script type="text/javascript">
if (typeof jQuery == 'undefined') {
    document.write('<script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.min.js"><\/script>');
}
</script>