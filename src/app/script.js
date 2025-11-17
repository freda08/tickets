document.querySelector('#save').addEventListener('click', function() {
    console.log('111');
    fetch('http://localhost:8080/api/ticket');
})