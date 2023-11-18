document.getElementById("priceFilter").addEventListener("change", function(event) {
    event.preventDefault();
  
    var selectedPrice = $(this).val();
    
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "shop-left-sidebar.php?minPrice=" + minPrice + "&maxPrice=" + maxPrice, true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById("grid").innerHTML = xhr.responseText;
      }
    };
    xhr.send();
  });