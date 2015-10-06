function populateShop() {
  for (var i = 0; i < merchandise.length; i++) {
    var categoryname = merchandise[i]["name"];
    var categorycontent = merchandise[i]["products"];
    var linktag = "<a onclick=\"showSelection(" + categoryname + ");\">" + categoryname + "</a>";
    document.getElementById("category-list").insertAdjacentHTML("beforeend", linktag);
    for(var j = 0; j < categorycontent.length; j++) {
      
    }
  }
}

function showSection(name) {

}