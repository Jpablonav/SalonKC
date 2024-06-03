

// var btn_shampoo = document.getElementById('shampoo').addEventListener('click', mostrar_shampoo)
// var btn_ialuronico = document.getElementById('ialuronico').addEventListener('click', mostrar_ialuronico)
// var btn_massimo = document.getElementById('massimo').addEventListener('click', mostrar_massimo)
// var btn_amino = document.getElementById('amino').addEventListener('click', mostrar_amino)
// var btn_crema = document.getElementById('crema').addEventListener('click', mostrar_crema)
// var btn_moistur = document.getElementById('moistur').addEventListener('click', mostrar_moistur)
// var btn_pozione = document.getElementById('pozione').addEventListener('click', mostrar_pozione)
// var btn_maschera = document.getElementById('maschera').addEventListener('click', mostrar_maschera)
// var btn_todos = document.getElementById('todos').addEventListener('click',todos)







var filtro1 = document.getElementById('shampoo1');
var filtro2 = document.getElementById('shampoo2');
var filtro3 = document.getElementById('shampoo3');
var filtro4 = document.getElementById('shampoo4');
var filtro5 = document.getElementById('ialuronico1');
var filtro6 = document.getElementById('ialuronico2');
var filtro7 = document.getElementById('massimo1');
var filtro8 = document.getElementById('amino1');
var filtro9 = document.getElementById('crema1');
var filtro10 = document.getElementById('moistur1');
var filtro11 = document.getElementById('pozione1');
var filtro12 = document.getElementById('maschera1');
var filtroProductos = document.getElementById('filtroProductos');

filtroProductos.addEventListener('change', function() {
    var selectedValue = filtroProductos.value;
    
    // Lógica para mostrar/ocultar según la opción seleccionada
    switch (selectedValue) {
        case 'shampoo':
            mostrar_shampoo();
            break;
        case 'ialuronico':
            mostrar_ialuronico();
            break;
        case 'massimo':
            mostrar_massimo();
            break;
        case 'amino':
            mostrar_amino();
            break;
        case 'crema':
            mostrar_crema();
            break;
        case 'moistur':
            mostrar_moistur();
            break;
        case 'pozione':
            mostrar_pozione();
            break;
        case 'maschera':
            mostrar_maschera();
            break;
        case 'todos':
            todos(); // Necesitarás implementar una función mostrar_todo
            break;
        default:
            // Cualquier lógica adicional o manejo de error
            break;
    }
});







function mostrar_shampoo() {
    filtro1.style.display = 'block';
    filtro2.style.display = 'block';
    filtro3.style.display = 'block';
    filtro4.style.display = 'block';
    filtro5.style.display = 'none'
    filtro6.style.display = 'none';
    filtro7.style.display = 'none';
    filtro8.style.display = 'none';
    filtro9.style.display = 'none';
    filtro10.style.display = 'none';
    filtro11.style.display = 'none';
    filtro12.style.display = 'none';
}
function mostrar_ialuronico() {
    filtro1.style.display = 'none';
    filtro2.style.display = 'none';
    filtro3.style.display = 'none';
    filtro4.style.display = 'none';
    filtro5.style.display = 'block'
    filtro6.style.display = 'block';
    filtro7.style.display = 'none';
    filtro8.style.display = 'none';
    filtro9.style.display = 'none';
    filtro10.style.display = 'none';
    filtro11.style.display = 'none';
    filtro12.style.display = 'none';
}
function mostrar_massimo() {
    filtro1.style.display = 'none';
    filtro2.style.display = 'none';
    filtro3.style.display = 'none';
    filtro4.style.display = 'none';
    filtro5.style.display = 'none'
    filtro6.style.display = 'none';
    filtro7.style.display = 'block';
    filtro8.style.display = 'none';
    filtro9.style.display = 'none';
    filtro10.style.display = 'none';
    filtro11.style.display = 'none';
    filtro12.style.display = 'none';
}

function mostrar_amino() {
    filtro1.style.display = 'none';
    filtro2.style.display = 'none';
    filtro3.style.display = 'none';
    filtro4.style.display = 'none';
    filtro5.style.display = 'none'
    filtro6.style.display = 'none';
    filtro7.style.display = 'none';
    filtro8.style.display = 'block';
    filtro9.style.display = 'none';
    filtro10.style.display = 'none';
    filtro11.style.display = 'none';
    filtro12.style.display = 'none';
}
function mostrar_crema() {
    filtro1.style.display = 'none';
    filtro2.style.display = 'none';
    filtro3.style.display = 'none';
    filtro4.style.display = 'none';
    filtro5.style.display = 'none'
    filtro6.style.display = 'none';
    filtro7.style.display = 'none';
    filtro8.style.display = 'none';
    filtro9.style.display = 'block';
    filtro10.style.display = 'none';
    filtro11.style.display = 'none';
    filtro12.style.display = 'none';
}
function mostrar_moistur() {
    filtro1.style.display = 'none';
    filtro2.style.display = 'none';
    filtro3.style.display = 'none';
    filtro4.style.display = 'none';
    filtro5.style.display = 'none'
    filtro6.style.display = 'none';
    filtro7.style.display = 'none';
    filtro8.style.display = 'none';
    filtro9.style.display = 'none';
    filtro10.style.display = 'block';
    filtro11.style.display = 'none';
    filtro12.style.display = 'none';
}
function mostrar_pozione() {
    filtro1.style.display = 'none';
    filtro2.style.display = 'none';
    filtro3.style.display = 'none';
    filtro4.style.display = 'none';
    filtro5.style.display = 'none'
    filtro6.style.display = 'none';
    filtro7.style.display = 'none';
    filtro8.style.display = 'none';
    filtro9.style.display = 'none';
    filtro10.style.display = 'none';
    filtro11.style.display = 'block';
    filtro12.style.display = 'none';
}
function mostrar_maschera() {
    filtro1.style.display = 'none';
    filtro2.style.display = 'none';
    filtro3.style.display = 'none';
    filtro4.style.display = 'none';
    filtro5.style.display = 'none'
    filtro6.style.display = 'none';
    filtro7.style.display = 'none';
    filtro8.style.display = 'none';
    filtro9.style.display = 'none';
    filtro10.style.display = 'none';
    filtro11.style.display = 'none';
    filtro12.style.display = 'block';
}
function todos(){
    filtro1.style.display = 'block';
    filtro2.style.display = 'block';
    filtro3.style.display = 'block';
    filtro4.style.display = 'block';
    filtro5.style.display = 'block'
    filtro6.style.display = 'block';
    filtro7.style.display = 'block';
    filtro8.style.display = 'block';
    filtro9.style.display = 'block';
    filtro10.style.display = 'block';
    filtro11.style.display = 'block';
    filtro12.style.display = 'block';
}