var i;
var j;
var ch = ' ';
var str = '';
for(i=0;i<8;i++){
  for(j=0;j<8;j++){
    str += ch;
    if(ch == ' ')
      ch = '#';
    else
      ch = ' ';
  }
  console.log(str);
    if(ch == ' ')
      ch = '#';
    else
      ch = ' ';
  str = '';
}
