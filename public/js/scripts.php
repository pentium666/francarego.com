<script type="text/javascript">
    window.onload = function() {
    	if ($(window).height() > $("html").height()) {
    		document.getElementById("footer").style.position = "absolute";
    		document.getElementById("footer").style.bottom = 0;
    	}
    	else {
            document.getElementById("footer").style.position = "inherit";
    	}
        document.getElementById("footer").style.visibility = "visible";
    }
</script>
