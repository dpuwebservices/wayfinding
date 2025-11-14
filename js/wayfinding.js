function light_up(elem_ids) {
  var a = document.getElementsByClassName('lit-up');
  for (i = a.length - 1; i >= 0; i-=1) {
    a[i].classList.remove('lit-up');
  }
  for (j = 0; j < elem_ids.length; j++) {
    document.getElementById(elem_ids[j]).classList.add('lit-up');
  }
}