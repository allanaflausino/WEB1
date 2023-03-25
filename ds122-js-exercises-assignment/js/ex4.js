function inverte(a){
  var swap;
  var i;
  for(i=0;i<a.length/2;i++){
    swap = a[a.length - 1 - i];
    a[a.length - 1 - i] = a[i];
    a[i] = swap;
  }
  return a;
}
