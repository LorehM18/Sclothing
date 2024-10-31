const filters = document.querySelectorAll('.filter');
const productos = document.querySelectorAll('.div_item');


filters.forEach(filter => {
    filter.addEventListener('change', () => {
        const selectedFilters = Array.from(filters)
            .filter(f => f.checked)
            .map(f => f.value);

        productos.forEach(producto => {
            if (selectedFilters.length === 0 || selectedFilters.includes(producto.dataset.categoria)) {
                producto.style.display = '';
            } else {
                producto.style.display = 'none';
            }
        });
    });
});

