const searchInput = document.getElementById('buscador');
const products = document.querySelectorAll('.div_item');  


searchInput.addEventListener('keyup', function() {
    const filter = searchInput.value.toLowerCase();  
    products.forEach(function(product) {
        
        const productName = product.querySelector('p').textContent.toLowerCase();

        
        if (productName.indexOf(filter) > -1) {
            product.style.display = '';  
        } else {
            product.style.display = 'none';  
        }
    });
});