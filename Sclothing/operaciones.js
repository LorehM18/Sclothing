const filters = document.querySelectorAll('.filter');
const productos = document.querySelectorAll('.div_item');


filters.forEach(filter => {
    filter.addEventListener('change', () => {
        const selectedFilters = Array.from(filters)
            .filter(f => f.checked)
            .map(f => f.value);

        console.log('Filtros seleccionados:', selectedFilters);  

        productos.forEach(producto => {
            if (selectedFilters.length === 0 || selectedFilters.includes(producto.dataset.categoria)) {
                producto.style.display = '';
            } else {
                producto.style.display = 'none';
            }
        });
    });
});
console.log("JS cargado");

function mostrarExito() {
    alert("¡Registro exitoso!");  
};
function mostrarUsuarioRepetido() {
    alert("El nombre de usuario o correo ya está en uso. Elige otro.");  
};
function contrasena_incorrecta(){
    alert("Contraseña incorrecta");  
};
function usuario_incorrecto(){
    alert("Usuario no encontrado");  
};

