<?php
$disco = array(
    "cancion"=>$_POST["txttitulo"],
    "interprete"=>$_POST["txtinterprete"],
    "genero"=>$_POST["txtgenero"],
    10=>$_POST["txtduracion"]

);

//var_dump($disco);

//Requerimiento: Dependiendo del título de la canción mostrar la letra

$letraCancion = array('Ya me enteré' => 'Ya me enteré
Que hay alguien nuevo acariciando tu piel
Algún idiota al que quieres convencer
Que tú y yo, somos pasado
Ya me enteré
Que soy el malo y todo el mundo te cree
Que estás mejor desde que ya no me ves
Más feliz con otro al lado
¿A quién piensas que vas a engañar?
Sabes bien que eres mi otra mitad
Olvídate de ese perdedor
Y repítele
Que yo soy mejor
Que no le eres fiel
Con el corazón
Que eres mía y sólo mía amor
Despídete de ese perdedor
Que imagina que ya no existo yo
Deja claro que aunque intente no
No vas a querer
La verdad es que me extrañas tanto
Lo sé
Ya me enteré eh eh eh e emm
Regresarás
Estoy seguro de que regresarás
Estás con él por pura comodidad
Aburrida entre sus brazos
¿A quién piensas que vas a engañar?
Sabes bien que eres mi otra mitad
Olvídate
De ese perdedor
Y repítele
Que yo soy mejor
Que no le eres fiel, con el corazón
Que eres mía y sólo mía amor
Despídete
De ese perdedor
Que imagina que
Ya no existo yo
Queda claro que
Aunque intente no
No vas a querer, nooo ouhh
La verdad es que me extrañas tanto
Lo sé
Ya me enteré eh eh eh e eyy
La verdad es que me extrañas tanto
Lo sé
Ya me enteré
Ya me enteré, uh uh uh oh uh',
'Creo en mi' => 'Ya me han dicho que soy buena para nada
Y que el aire que respiro esta de más
Me han clavado en la pared contra la espada
He perdido hasta las ganas de llorar
Pero estoy de vuelta estoy de pie y bien alerta
Eso del cero a la izquierda no me va
Ouh ouh oh
Creo creo creo en mí
Ouh ouh oh
Creo creo creo en mí
No me asustan los misiles ni las balas
Tanta guerra me dio alas de metal
Ah
Vuelo libre, sobrevuelo las granadas
Por el suelo no me arrastro nunca más
Ya no estoy de oferta estoy de pie y bien alerta
Eso del cero a la izquierda no me va
Ouh ouh oh
Creo creo creo en mí
Ouh ouh oh
Creo creo creo
Todos somos tan desiguales
Únicos originales
Si no te gusta a mí me da igual
De lo peor he pasado
Y lo mejor está por llegar
Ouh ouh ouh
Ouh ouh oh
Creo creo creo en mí
Ouh ouh oh
Creo creo creo en mí',
'Como mirarte' => 'No me salen las palabras, para expresarte que te quiero
No sé cómo explicarte, que me haces sentir
Como si fuera el verano, y el invierno no existiera
Como se separa todo
Y con esa sonrisa, que cambia la vida
Miraste hacia aquí, y ya no puedo contemplar
Que tú no seas la que me ama
Y cómo mirarte, esos ojos que me dejan en enero
Cuando sé que no son míos y me muero
El destino no nos quiere ver pasar
Oh y cómo decirte, que no quiero que este amor sea pasajero
Que de pronto se dé un día y yo te espero
El destino no nos tiene que importar
No sé cómo ser yo mismo si no estás al lado mío
Se harán largos estos meses, si no estás junto a mí
Y con esa sonrisa, que nunca se olvida
Llegaste y te vi y ya no puedo soportar que tú no seas la que me ama
Y cómo mirarte, esos ojos que me dejan en enero
Cuando sé que no son míos y me muero
El destino no nos quiere ver pasar
Oh, y como decirte, que no quiero que este amor sea pasajero
Que de pronto se dé un día y yo te espero
El destino no nos tiene que importar
Y cómo olvidarte, si la vida me enseñó que vas primero
No me importa la distancia, yo te quiero
Y al final sé que a mi lado vas a estar
Voy a esperarte, cuando se ama de verdad
No existe el tiempo
Y te juro que no es el final del cuento
El destino no nos puede separar
Cómo mirarte');


//var_dump($letraCancion);




if ($disco["cancion"] == "Ya me enteré") 
{   echo "<p>";
    print('<iframe width="560" height="315" src="https://www.youtube.com/embed/7TWzV05kQ4w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
    echo "</p>";
    echo "<pre>";
    echo $letraCancion['Ya me enteré'];
    echo "</pre>";
} else if ($disco["cancion"] == "Creo en mi")
{   echo "<p>";
    print('<iframe width="560" height="315" src="https://www.youtube.com/embed/P2zOb0HGdxg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
    echo "</p>";
    echo "<pre>";
    echo $letraCancion['Creo en mi'];
    echo "</pre>";
} else if ($disco["cancion"] == 'Como mirarte')
{   echo "<p>";
    print('<iframe width="560" height="315" src="https://www.youtube.com/embed/LE4yjfUGBYE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
    echo "</p>";
    echo "<pre>";
    echo $letraCancion['Como mirarte'];
    echo "</pre>";
} else 
{
    echo "Canción no encontrada";
}

