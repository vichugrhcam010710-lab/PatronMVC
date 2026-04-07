<?php

use Illuminate\Support\Facades\Route;

Route::get('/nombres', function () {
    $nombresBase = [
        'Hugo', 'Sofía', 'Mateo', 'Valentina', 'Santiago', 'Isabella', 'Sebastián', 'Camila', 'Leonardo', 'Lucía',
        'Felipe', 'Mariana', 'Daniel', 'Gabriela', 'Diego', 'Victoria', 'Samuel', 'Martina', 'Joaquín', 'Ximena',
        'Alejandro', 'Elena', 'Nicolás', 'Natalia', 'Benjamín', 'Abril', 'Tomás', 'Valery', 'Lucas', 'Maya',
        'Andrés', 'Fernanda', 'Gabriel', 'Paula', 'Matías', 'Emilia', 'Emiliano', 'Renata', 'Adrián', 'Zoe',
        'Julián', 'Sara', 'Aaron', 'Alexa', 'Cristóbal', 'Irene', 'Ángel', 'Miranda', 'Bautista', 'Alicia',
        'David', 'Clara', 'Facundo', 'Olivia', 'Thiago', 'Alma', 'Manuel', 'Juana', 'Iker', 'Candelaria',
        'Josué', 'Catalina', 'Dante', 'Blanca', 'Elias', 'Guadalupe', 'Gael', 'Montserrat', 'Leonel', 'Aitana',
        'Víctor', 'Rafaela', 'Iván', 'Lola', 'Maximiliano', 'Jimena', 'Francisco', 'Malena', 'Eduardo', 'Micaela',
        'Javier', 'Delfina', 'Fernando', 'Carla', 'Roberto', 'Paola', 'Ricardo', 'Florencia', 'Oscar', 'Ariadna',
        'Rodrigo', 'Bianca', 'Marcos', 'Abigaíl', 'Pascual', 'Estela', 'Arturo', 'Noemí', 'Saúl', 'Rebeca'
    ];

    $apellidosBase = [
        'García', 'Rodríguez', 'González', 'Fernández', 'López', 'Martínez', 'Sánchez', 'Pérez', 'Gómez', 'Martin',
        'Jiménez', 'Ruiz', 'Hernández', 'Diaz', 'Moreno', 'Muñoz', 'Álvarez', 'Romero', 'Alonso', 'Gutiérrez',
        'Navarro', 'Torres', 'Domínguez', 'Vázquez', 'Ramos', 'Gil', 'Ramírez', 'Serrano', 'Blanco', 'Molina',
        'Morales', 'Suárez', 'Ortega', 'Delgado', 'Castro', 'Ortiz', 'Rubio', 'Marín', 'Sanz', 'Núñez',
        'Iglesias', 'Medina', 'Cortes', 'Castillo', 'Santos', 'Peña', 'Parra', 'Cano', 'Méndez', 'Cruz',
        'Prieto', 'Flores', 'Vidal', 'Cabrera', 'Rey', 'Pascual', 'Herrero', 'Fuentes', 'Cuenca', 'Diez',
        'Caballero', 'Nieto', 'Vega', 'Reyes', 'Aguilar', 'Hidalgo', 'Lorenzo', 'Giménez', 'Ibañez', 'Ferrer',
        'Durán', 'Santiago', 'Benítez', 'Vargas', 'Mora', 'Vicente', 'Arias', 'Carmona', 'Crespo', 'Román',
        'Pastor', 'Soto', 'Sáez', 'Velasco', 'Soler', 'Moya', 'Esteban', 'Bravo', 'Gallardo', 'Rojas',
        'Pardo', 'Merino', 'Franco', 'Espinosa', 'Izquierdo', 'Lara', 'Rivas', 'Silva', 'Rivera', 'Ríos'
    ];

    $nombresCompletos = [];
    $limite = 1000;

    while (count($nombresCompletos) < $limite) {
        $n1 = $nombresBase[array_rand($nombresBase)];
        $n2 = $nombresBase[array_rand($nombresBase)];
        $a1 = $apellidosBase[array_rand($apellidosBase)];
        $a2 = $apellidosBase[array_rand($apellidosBase)];

        $nombreGenerado = "{$n1} {$n2} {$a1} {$a2}";

        $nombresCompletos[$nombreGenerado] = $nombreGenerado;
    }

    return response()->json(array_values($nombresCompletos));
});