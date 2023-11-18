document.addEventListener("DOMContentLoaded", function() {
    // Ambil elemen HTML dengan id 'jsonDisplay'
    var jsonDisplay = document.getElementById("jsonDisplay");

    // Ajax request untuk mengambil data JSON dari PHP
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Parsing data JSON yang diterima
            var jsonData = JSON.parse(xhr.responseText);

            // Buat elemen <ul> (unordered list) untuk menampilkan key dan value
            var ul = document.createElement("ul");

            // Iterasi melalui setiap key-value dalam JSON
            for (var i = 0; i < jsonData.length; i++) {
                var currentItem = jsonData[i];
                for (var key in currentItem) {
                    if (currentItem.hasOwnProperty(key)) {
                        // Buat elemen <li> untuk setiap key-value
                        var li = document.createElement("li");
                        li.textContent = key + ": " + currentItem[key];

                        // Tambahkan <li> ke dalam <ul>
                        ul.appendChild(li);
                    }
                }
            }
            // Tambahkan <ul> ke dalam div dengan id 'jsonDisplay'
            jsonDisplay.appendChild(ul);
        }
    };

    // Lakukan request GET ke PHP untuk mendapatkan data JSON
    xhr.send();
});
