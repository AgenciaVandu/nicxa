function cupones(request, url, marca,terminos){
    var cupon = request;
    var url_c = url;
    var marca_c = marca;
    var terminos_c = terminos;
    
    console.log(url_c, cupon, marca_c,terminos_c);
    var form = document.getElementById('campo_cupon');
    var url_cupon = document.getElementById('url_cupon');
    var marca_cupon = document.getElementById('marca_cupon');
    var alerta = document.getElementById('alerta');
    var terminos = document.getElementById('terminos');


    marca_cupon.setAttribute('value', marca_c);
    form.setAttribute('value', cupon);
    url_cupon.setAttribute('value', url_c);
    alerta.setAttribute('class', 'alert-text alert alert-success');
    alerta.innerHTML='Haz seleccionado el cupon: '+cupon;
    terminos.setAttribute('href', terminos_c);
}