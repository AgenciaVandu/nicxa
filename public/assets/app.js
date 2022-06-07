
const formulario = document.getElementById('formulario');
const registro = document.getElementById('registro');
const exito = document.getElementById('exito');

console.log(formulario.canal.value);
let date = new Date();
let output = String(date.getDate()).padStart(2, '0') + '/' + String(date.getMonth() + 1).padStart(2, '0') + '/' + date.getFullYear();
console.log(output);
formulario.addEventListener('submit', (e) => {
    e.preventDefault();
    if (formulario.checkValidity()) {
        fetch('https://sheet.best/api/sheets/f347c1cc-3858-45e2-8713-89e96012dd82', {
            method: 'POST',
            mode: 'cors',
            headers: {
                'content-type': 'application/json'
            },
            body: JSON.stringify({
                'Nombre': formulario.nombre.value,
                'Telefono': formulario.telefono.value,
                'Correo': formulario.correo.value,
                'Estado': formulario.estado.value,
                'Ciudad': formulario.ciudad.value,
                'Franquicia': formulario.franquicia.value,
                'Vacante': formulario.vacantes.value,
                'Canal ': formulario.canal.value,
                'Fecha de creación ': output,
            })
        });
        registro.classList.remove('activo');
        exito.classList.add('activo');
    }
});

const franquicia = document.getElementById('franquicia');
const estado = document.getElementById('estado');
const ciudad = document.getElementById('ciudad');

estado.addEventListener('change', (e) => {
    console.log(estado.value);
    switch (estado.value) {
        case 'Yucatán':
            franquicia.innerHTML = 
            '<option value="Burgerking">Burgerking</option>'+
            '<option value="Pizza Hut">Pizza Hut</option>'+
            '<option value="KFC">KFC</option>'+
            '<option value="LBB Obregon">LBB Obregon</option>';
            ciudad.innerHTML =
            '<label for="ciudad"> Ciudad</label>'+
            '<br />'+
            '<select class="form-control" name="ciudad">'+
            '<option value="Mérida">Mérida</option>'+                    
            '</select>';    
        break;
        case 'Quintana Roo':
            franquicia.innerHTML = 
            '<option value="Burgerking">Burgerking</option>'+
            '<option value="Pizza Hut">Pizza Hut</option>'+
            '<option value="KFC">KFC</option>'+
            '<option value="LBB Obregon">LBB Obregon</option>';
            ciudad.innerHTML =
            '<label for="ciudad"> Ciudad</label>'+
            '<br />'+
            '<select class="form-control" name="ciudad">'+
            '<option value="Tulum">Tulum</option>'+
            '<option value="Cozumel">Cozumel</option>'+
            '<option value="Cancun">Cancun</option>'+
            '<option value="Playa del carmen">Playa del carmen</option>'+                    
            '</select>';
        break;
        case 'Campeche':
            franquicia.innerHTML = '<option value="Burgerking">Burgerking</option>';
            ciudad.innerHTML = '<input type="hidden" value="indefinido" name="ciudad" />';
        break;
        case 'Tabasco':
            franquicia.innerHTML = '<option value="Burgerking">Burgerking</option>';
            ciudad.innerHTML = '<input type="hidden" value="indefinido" name="ciudad" />';
        break;
        case 'Chiapas':
            franquicia.innerHTML = '<option value="Burgerking">Burgerking</option>';
            ciudad.innerHTML = '<input type="hidden" value="indefinido" name="ciudad" />';
        break;
    }
});
