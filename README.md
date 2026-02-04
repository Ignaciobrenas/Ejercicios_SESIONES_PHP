# 📄 README – Práctica Sesiones en PHP

## 🧩 Práctica 4 – Sesiones en PHP  
Ignacio Breñas Muñoz  
1º DAW – STUCOM  

En esta práctica he desarrollado los ejercicios propuestos para trabajar el uso de **sesiones en PHP**, utilizando `$_SESSION` para mantener información entre peticiones y simular estados persistentes en aplicaciones web.

Todos los ejercicios están **comentados** para explicar las decisiones tomadas y el funcionamiento del código.

---

## 🔢 Ejercicio 1 – Modificación de arrays con sesiones

Archivo: `Ejercicio1.php`

En este ejercicio se trabaja con un **array numérico almacenado en sesión**.

Funcionalidades desarrolladas:

1. Creación de un **array inicial** con tres valores numéricos.
2. Formulario para **modificar el valor** de una posición concreta del array.
3. Uso de **sesiones** para que las modificaciones se mantengan entre recargas.
4. Botón para calcular la **media** de los valores del array.
5. Botón **Reset** que restaura el array a su estado inicial.

---

## 🏪 Ejercicio 2 – Gestión de inventario compartido

Archivo: `Ejercicio2.php`

En este ejercicio se simula la gestión de un **inventario de supermercado** usando sesiones.

Funcionalidades implementadas:

1. Almacenamiento del **nombre del trabajador** que utiliza la aplicación.
2. Inventario **compartido por todos los trabajadores** mediante sesiones.
3. Posibilidad de **añadir y quitar unidades** de productos (leche o refresco).
4. Control de errores para evitar quitar más unidades de las disponibles.
5. Mensaje de error en caso de stock insuficiente.
6. Botón **Reset** que limpia únicamente el formulario.

---

## 🔧 Ejercicio 3 – Resolución de issues con sesiones

Archivo: `Ejercicio3.php`

En este ejercicio se trabaja a partir de un **repositorio base** proporcionado para resolver problemas relacionados con el uso de sesiones.

Trabajo realizado:

1. Análisis del código existente.
2. Corrección de errores en el uso de variables de sesión.
3. Mejora de la lógica y del flujo de la aplicación.
4. Aplicación de buenas prácticas en el manejo de `$_SESSION`.

Repositorio base utilizado:  
https://github.com/Stucom-Pelai/MP0487_RA4_Session_Shop

---

## 🆚 Resumen general

- Uso correcto de `session_start()`.
- Persistencia de datos entre recargas de página.
- Gestión de formularios con múltiples acciones.
- Control de errores y estados de la aplicación.
- Aplicación práctica de sesiones en escenarios reales.

---

## 📂 Archivos de la entrega

- `Ejercicio1.php` – Modificación de arrays usando sesiones.  
- `Ejercicio2.php` – Gestión de inventario compartido con control de errores.  
- `Ejercicio3.php` – Resolución de issues del repositorio.  
- `README.md` – Este documento.
