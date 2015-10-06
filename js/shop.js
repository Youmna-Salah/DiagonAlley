function populateShop() {
  for (var i = 0; i < merchandise.length; i++) {
    var cn = merchandise[i]["name"];
    var categorycontent = merchandise[i]["products"];
    var linktag = "<button onclick=\"showSelection(\'"+cn+"\');\">"+cn+"</button>";
    document.getElementById("category-list").insertAdjacentHTML("beforeend", linktag);
    for (var j = 0; j < categorycontent.length; j++) {
      var item = categorycontent[j];
      var itemtag = "<div class=\"item\">"+
            "<div class=\"top\">"+
              "<p class=\"name\">"+item["name"]+"</p>"+
              "<img class=\"thumbnail\" src=\"img/1.jpg\" />"+
              "<p class=\"summary\">"+item["summary"]+"</p>"+
            "</div>"+
            "<div class=\"bottom\">"+
              "<div class=\"stock\">"+
                "In stock: "+item["stock"]+" <br>"+
              "</div>"+
              "<span class=\"price\">"+
                "$"+item["price"]+
              "</span>"+
              "<span class=\"buy\">"+
                "<button class=\"buybutton\""+((item["stock"]==="0")? " disabled=\"true\"" : "") +">Buy</button>"+
              "</span>"+
            "</div>"+
          "</div><!--"+
       "-->"
       // TODO: create category section first before insertion
       document.getElementById("cat-"+cn).insertAdjacentHTML("beforeend", itemtag);
    }
  }
}

function showSelection(name) {
  if (selected != name) {
    var categorynodes = document.getElementById("category-list").children;
    for (var i = 0; i < merchandise.length; i++) {
      categorynodes[i].setAttribute("hidden", "true");
    }
    document.getElementById("cat-"+name).setAttribute("hidden","false");
    selected = name;
  }
}