var btn = document.getElementById('btn');
var disp = document.getElementById('display');

if(btn){
    btn.addEventListener('click', function(){
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                disp.innerHTML = this.responseText;
            }
        };
        xhr.open("GET", "generator.php", true);
        xhr.send();
    });
}
