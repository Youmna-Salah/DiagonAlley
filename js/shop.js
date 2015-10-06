function populateShop() {
  for (var i = 0; i < merchandise.length; i++) {
    var cn = merchandise[i]["name"];
    var categorycontent = merchandise[i]["products"];
    var linktag = "<button onclick=\"showSelection(\""+cn+"\");\" id=\"cat-"+cn+"\">"+cn +"</button>";
    document.getElementById("category-list").insertAdjacentHTML("beforeend", linktag);
    for (var j = 0; j < 5; j++) {
      var itemtag = "<div class=\"item\">"+
            "<div class=\"top\">"+
              "<p class=\"name\">Chocolate filled wand</p>"+
              "<img class=\"thumbnail\" src=\"img/1.jpg\" />"+
              "<p class=\"summary\">A wand that is filled with chocolate</p>"+
            "</div>"+
            "<div class=\"bottom\">"+
              
              "<div class=\"stock\">"+
                "In stock: 1 <br>"+
              "</div>"+
              "<span class=\"price\">"+

                "$12.00"+
              "</span>"+
              "<span class=\"buy\">"+
                "<button class=\"buybutton\">Buy</button>"+
              "</span>"+
            "</div>"+
          "</div><!--"+
       "-->"
       document.getElementById("cat-lol").insertAdjacentHTML("beforeend", itemtag);
    }
  }
}

function showSection(name) {
  if (selected != name) {
    var categorynodes = document.getElementById("category-list").children;
    for (var i = 0; i < merchandise.length; i++) {
      categorynodes[i].setAttribute("hidden", "true");
    }
    document.getElementById("cat-"+name).setAttribute("hidden","false");
    selected = name;
  }
}