.

📄 README – Práctica Sesiones en PHP
🧩 Práctica 4 – Sesiones en PHP
Ignacio Breñas Muñoz
1º DAW – STUCOM
https://github.com/Ignaciobrenas/Ejercicios_SESIONES_PHP

📌 Descripción de la práctica

En esta práctica he trabajado el uso de sesiones en PHP para mantener información entre peticiones y simular estados persistentes en aplicaciones web. La práctica consta de tres ejercicios, todos implementados en archivos independientes y comentados para explicar el funcionamiento y las decisiones tomadas.

El objetivo principal es aprender a utilizar $_SESSION para gestionar datos que deben mantenerse aunque la página se recargue.

🧩 Ejercicio 1 – Modificación de arrays con sesiones

Archivo: Ejercicio1.php

En este ejercicio se trabaja con un array numérico almacenado en sesión.

Funcionalidades implementadas:

Creación de un array inicial con tres valores numéricos.

Formulario para modificar el valor de una posición concreta del array.

Persistencia de las modificaciones mediante sesiones.

Botón para calcular la media de los valores del array.

Botón Reset que restaura el array a su estado inicial.

Este ejercicio demuestra el uso básico de sesiones para mantener cambios en estructuras de datos simples.

🏪 Ejercicio 2 – Gestión de inventario compartido

Archivo: Ejercicio2.php

Este ejercicio simula la gestión de un inventario de supermercado utilizando sesiones.

Funcionalidades implementadas:

Almacenamiento del nombre del trabajador que utiliza la aplicación.

Inventario compartido entre todos los trabajadores.

Posibilidad de añadir y quitar unidades de leche o refresco mediante un formulario.

Control para evitar quitar más unidades de las disponibles, mostrando un mensaje de error.

Botón Reset que limpia únicamente el formulario, sin borrar el inventario ni el trabajador.

🔧 Ejercicio 3 – Resolución de issues con sesiones

Archivo: Ejercicio3.php

En este ejercicio se trabaja a partir de un repositorio proporcionado para resolver problemas relacionados con sesiones.

Se ha realizado:

Análisis del código base.

Corrección de errores en el uso de sesiones.

Mejora de la lógica y del flujo de la aplicación.

Aplicación de buenas prácticas en el manejo de $_SESSION.

Repositorio base utilizado:
https://github.com/Ignaciobrenas/Ejercicios_SESIONES_PHP

📂 Archivos de la entrega

Ejercicio1.php – Modificación de arrays usando sesiones.

Ejercicio2.php – Gestión de inventario compartido con control de errores.

Ejercicio3.php – Resolución de issues del repositorio.

README.md – Este documento.

✅ Conclusión

Con esta práctica he consolidado el uso de sesiones en PHP, aprendiendo a mantener información entre peticiones HTTP y a gestionar estados persistentes en aplicaciones web reales. Los ejercicios permiten aplicar estos conceptos de forma práctica y progresiva.
