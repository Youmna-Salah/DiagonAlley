function populateShop() {
  var first=true;
  for (var i = 0; i < merchandise.length; i++) {
    var cn = merchandise[i]["name"];
    var categorycontent = merchandise[i]["products"];
    var linktag = "<button onclick=\"showSelection(\'"+cn+"\');\">"+cn+"</button>";
    document.getElementById("category-list").insertAdjacentHTML("beforeend", linktag);
    var cattag = "<section class=\"inner\" id=\"cat-"+cn+"\" "+((first)?"":"style=\"display: none;\"")+">";
    if (first) {first=false;}
    document.getElementById("outer").insertAdjacentHTML("beforeend", cattag);
    for (var j = 0; j < categorycontent.length; j++) {
      var item = categorycontent[j];
      var itemtag = "<div class=\"item\">"+
            "<div class=\"top\">"+
              "<p class=\"name\">"+item["name"]+"</p>"+
              "<img class=\"thumbnail\" src=\""+item['image']+"\" />"+
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
                "<button class=\"buybutton\""+((item["stock"]==="0")? " disabled=\"true\"" : "") +" onclick=\"showSummary("+item['id']+")\">Buy</button>"+
              "</span>"+
            "</div>"+
          "</div><!--"+
       "-->";
       document.getElementById("cat-"+cn).insertAdjacentHTML("beforeend", itemtag);
       itemindex[item["id"]] = item;
    }
  }
}

function showSelection(name) {
  if (selected !== name) {
    var categorynodes = document.getElementById("outer").children;
    for (var i = 0; i < merchandise.length; i++) {
      categorynodes[i].setAttribute("style","display: none;");
    }
    document.getElementById("cat-"+name).removeAttribute("style");
    selected = name;
  }
}

function hideCovers() {
  document.getElementById("cover").setAttribute("style","display: none;");
  document.getElementById("popup").setAttribute("style","display: none;");
}

function showCovers() {
  document.getElementById("cover").removeAttribute("style");
  document.getElementById("popup").removeAttribute("style");
}

function showSummary(id) {
  var item = itemindex[id];
  document.getElementById('poptitle').textContent = item['name'];
  document.getElementById('popdescription').textContent = item['description'];
  document.getElementById('popid').setAttribute("value", id);
  showCovers();
}

function hideMessage() {
  document.getElementById('message').setAttribute("style", "display: none;");
}