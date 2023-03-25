var completed = [];
var uncompleted = [];
function cadTask () {
    uncompleted.push(document.getElementById("txtTask").value);
    document.getElementById("txtTask").value = '';
    renderUncompleted();
    return false;
};
function renderCompleted(){
    var ulCompleted = document.getElementById("ulCompleted");
    ulCompleted.innerHTML = '';
    completed.forEach(
        function(value,index){
            var li = document.createElement("li");
            li.innerHTML = value;
            ulCompleted.appendChild(li);
        })
}
function renderUncompleted(){
    var ulCompleted = document.getElementById("ulUncompleted");
    ulCompleted.innerHTML = '';
    uncompleted.forEach(
        function(value,index){
            var li = document.createElement("li");
            li.innerHTML = value;
            li.onclick = function(){conTask(value)};
            ulCompleted.appendChild(li);
        })
}
function conTask(str){
    completed.push(str);
    uncompleted.pop(str);
    renderCompleted();
    renderUncompleted();
}
