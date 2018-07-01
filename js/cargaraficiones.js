 function cargaraficiones()
        {
            var array = ["Tennis", "Padel", "Futbol","Paint Ball","Basquet","Runing"];

            // ordena la tabla
            array.sort();

             var select = document.getElementById("aficion"); //Seleccionamos el select
    		var selectetaficion;

    		for(var i=0; i < array.length; i++){ 
       			 var option = document.createElement("option"); //Creamos la opcion
        		option.innerHTML = array[i]; //Metemos el texto en la opción
        		select.appendChild(option); //Metemos la opción en el select
        		selectetaficion = array[i]; // guardamos la opcion
   		 }

   		 
    }