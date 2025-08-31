
document.querySelector('#clickBtn').addEventListener('click', function() { 
    console.log("Button Clicked");

});
// ----------------------------------------------------------------------------
 const myTimeout = setTimeout(alert("Welcome"),2000)
      
// ------------------------------------------------------------------------------
setInterval(function(){
    console.log('Hello');
    
}, 1000);
// ----------------------------------------------------------------------------------

var myElement = document.getElementById('myContainer');

function alignItems() {
    myElement.style.display = 'flex';
    myElement.style.justifyContent = 'space-evenly';
}

function changeToRed() {
    myElement.style.backgroundColor = 'red';
}


