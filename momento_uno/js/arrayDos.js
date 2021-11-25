function matriz() {
    //propiedades solicitadas al usuario
    var eq1 = document.getElementById('nomEquipo1').value
    var eq2 = document.getElementById('nomEquipo2').value
    var eq3 = document.getElementById('nomEquipo3').value
    var eq4 = document.getElementById('nomEquipo4').value
    var mensaje = "Acontinuación, se visualiza la información de la firma deportiva WCG";
    //var total = "Total";

    //////Arrays
    var array_jugadores = [3, 5, 2, 4];
    var array_precio = [3000000, 2100000, 1650000, 350000];
    var array_Inversion = [9000000, 10500000, 3300000, 1400000];
    
    /////Operaciones,  funcion reduce para sumar
    const colum1 = (a, c) => a + c;
    document.write(array_jugadores.reduce(colum1));

    const colum2 = (a, c) => a + c;
    document.write(array_precio.reduce(colum2));

    const colum3 = (a, c) => a + c;
    document.write(array_precio.reduce(colum3));

    

    
    ///Matriz con los arrays
     var firma_WCG = [
          ["Nombre", "Jugadores", "Precio", "Inversión"],
          [eq1, array_jugadores[0], array_precio[0], array_Inversion[0]],
          [eq2, array_jugadores[1], array_precio[1], array_Inversion[1]],
          [eq3, array_jugadores[2], array_precio[2], array_Inversion[2]],
          [eq4, array_jugadores[3], array_precio[3], array_Inversion[3]],

     ]   
     
       document.write("<br>"+mensaje+"<br>");
       for (var i = 0; i < firma_WCG.length; i++) {
       document.write("<br>"+"--"+firma_WCG[i]+ "--"+ "<br>");
     
     
          }
       document.write("<br>"+"<br>");
       document.write("<br>"+"Total jugadores de los equipos: "+array_jugadores.reduce(colum1)+"<br>");    
       document.write("<br>"+"Precio total: "+ array_precio.reduce(colum3)+"<br>");
       document.write("<br>"+"Total Inversion: "+ array_Inversion.reduce(colum3)+"<br>");


}


