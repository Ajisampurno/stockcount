
//Ambil semua element dari halaman index
var search = document.getElementById('search');
var btnSearch = document.getElementById('btnSearch');
var container = document.getElementById('container');

//Membuat Event keyup
search.addEventListener('keyup', function(){
    var ajax = new XMLHttpRequest();

    // cek apakah ajax sudah ready
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            container.innerHTML = ajax.responseText;
        }
    }

    //eksekusi ajax
    ajax.open('GET','/tabel?search=' + search.value,true);
    ajax.send();

});