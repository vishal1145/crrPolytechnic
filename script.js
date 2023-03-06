function loadDoc(filename) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", filename, true);
    xhttp.send();
  }
  
  document.getElementById("myAnchor").addEventListener("click", function(event){
    event.preventDefault()
  });

  function removeClass(e, c) {
    var elm = e;
    for (var i = 0; i < elm.length; i++) {
      elm[i].classList.remove('active', 'show');
    }
  }
  
  var menu = document.querySelectorAll('.sub-toggle>a');
  menu.forEach(function(item) {
    item.addEventListener('click', function(e) {
      e.preventDefault();
      removeClass(document.querySelectorAll('.sub-toggle'));
      this.parentNode.classList.add('active', 'show');
      document.querySelector('#demo').innerHTML = this.innerHTML;
    });
  });