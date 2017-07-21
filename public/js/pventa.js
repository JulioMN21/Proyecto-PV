function agregar(url) {
	var codigo = $("#txtCodigo").val();
	if (codigo.trim() == "") return;
	
	$.get(url + codigo, function(data, status) {
        agregarFila(data[0]);
        $("#txtCodigo").val("");
        actualizarTotal();
    });
}

function agregarFila(producto) {
	var tabla = document.getElementById("tblPedido");
	var fila = tabla.insertRow();
	var celdaCodigo = fila.insertCell();
	var celdaNombre = fila.insertCell();
	var celdaPrecio = fila.insertCell();
	var celdaCantidad = fila.insertCell();
	var celdaImporte = fila.insertCell();
	var celdaExistencia = fila.insertCell();

	celdaCodigo.innerHTML = producto.vc_codigo;
	celdaNombre.innerHTML = producto.vc_descripcion_corta;
	celdaPrecio.innerHTML = producto.venta;
	celdaCantidad.innerHTML = '<input type="number" ' + 
			'id="txtCantidad' + producto.id + '" value="1"' +
			'oninput="calcularImporte(' + producto.id + ', ' + producto.venta + ')">';
	celdaImporte.innerHTML = '<input class="importe" type="number" ' + 
			'id="txtImporte' + producto.id + '" value="' + producto.venta + '" readonly>';
	celdaExistencia.innerHTML = producto.i_existencia;
}

function calcularImporte(id, precio) {
	var txtCantidad = document.getElementById("txtCantidad" + id);
	if (txtCantidad.value < 0) {
		txtCantidad.value = 0;
		return;
	}
	document.getElementById("txtImporte" + id).value = txtCantidad.value * precio;
	actualizarTotal();
}

function actualizarTotal() {
	var total = 0;
	var precios = $(".importe");
	for (var i = 0; i < precios.length; i++) {
		total += parseFloat($(precios[i]).val());
	}

	document.getElementById("lblTotal").innerHTML = "$" + parseFloat(total).toFixed(2);
}

function realizarVenta(url) {
	var selectCliente = document.getElementById("clientes");
	var idCliente = selectCliente.options[selectCliente.selectedIndex].value;
	var idUsuario = document.getElementById("idUsuario").value;
	
	if (idCliente == -1) {
		alert("Debe seleccionar un cliente para continuar");
		return;
	}
	
	var productos = new Array();
	var filas = $(".importe");
	for (var i = 0; i < filas.length; i++) {
		var id = $(filas[i]).attr('id');
		id = id.substring(10);

		var cantidad = $("#txtCantidad" + id).val();
		var total = $(filas[i]).val();

		productos.push({
			id: id,
			cantidad: cantidad,
			total: total,
			usuCreador: 1
		});
	}

	$.ajax({
	    url: url,
	    data: {
	    	_token  : $('meta[name=csrf-token]').attr('content'),
	    	cliente : idCliente, 
	    	usuCreador : idUsuario,
	    	caja: 1,
	    	productos : productos
	    },
	    type: "POST",
	    dataType: "json"
	})
	.done( function(data) {
		//alert(data.message);
		if (data.success) {
			location.reload();
		}
	})
	.fail( function() {
	    alert("Ocurrió un error al finalizar la venta!");
	});
}
