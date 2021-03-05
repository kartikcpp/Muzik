<!DOCTYPE html>
<h1tml>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function myfun(){
    var songid=""
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function(){
        if(this.readyState==4){
                document.getElementById("myaudio").src=xhttp.responseText;

        }
    }
    xhttp.open("GET","querymuzik.php?q="+songid,true)
    xhttp.send()
}

</script>
</head>
<body>
<button value="lut gaye" onclick="myfun()" >lut gaye</button>
<audio controls id="myaudio" src="jugni.mp3" type="audio/mpeg">

</audio>
</body></h1tml>