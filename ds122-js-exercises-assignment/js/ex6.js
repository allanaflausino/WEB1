function procuraSubStr(s,ss){

  var i;
  var j;
  var achou = false;
  for(i=0;i<s.length;i++){
    achou = true;
    for(j=0;j<ss.length;j++){
      if(ss[j]!=s[i + j]){
        achou = false;
      }
    }
    if(achou)
      return i;
  }
  return -1
}
