function showProduct(str) {
  var xhr;
  if (str.length == "") {
    document.getElementById('data').innerHTML = '';
    document.getElementById('data').style.border="0px";
    return;
  }

  xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('data').innerHTML = this.responseText;
      document.getElementById('data').style.border="5px skyblue";

    }
  }
  xhr.open('GET', 'php/search.php?q=' +str, true);
  xhr.send();
}
