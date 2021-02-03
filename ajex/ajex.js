console.log('hello world');
 

function buttonClickHandeler() {
    console.log('you are clicked');
    //   initilizing xmlhttp object
    const xhr = new XMLHttpRequest();
    //   get means data featch only
    // true meansa achromnidsngh 
    // open the object
    // harry.txt where the data is coming
    // xhr.open('GET', 'https://jsonplaceholder.typicode.com/todos/1', true);
    // for post request 
    xhr.open('POST','http://dummy.restapiexample.com/api/v1/create', true);
    xhr.getAllResponseHeaders('Content-type','application/json',100)
    xhr.onprogress = function () {
        console.log('on progress')
    }
    xhr.onreadystatechange=function(){
        console.log(this.readyState)
    }
    xhr.onload = function () {
        if(this.status==200){
            console.log(this.responseText);
        }else {
            console.log('not found')
        }
        
    }
    data='{"name":"test23","salary":"545","age":"45"}';
    xhr.send(data);
}