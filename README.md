# apihub-simulacion-client-php

<br/><img src='https://github.com/APIHub-CdC/imagenes-cdc/blob/master/circulo_de_credito-apihub.png' height='37' width='160'/><br/>Proyecto con el cual puedes invocar la simulacion de las siguientes apis:

* **Reporte de Cédito Consolidado con FICO® Score y Prevención de Lavado de Dinero** - *RCC-FS-PLD* - [ver aquí](https://github.com/APIHub-CdC/rcc-ficoscore-pld-client-php)
* **Reporte de Cédito Consolidado** - *RCC* - [ver aquí](https://github.com/APIHub-CdC/rcc-client-php)
* **FICO® Score** - *FS* - [ver aquí](https://github.com/APIHub-CdC/ficoscore-client-php)
* **Reporte de Cédito Consolidado con FICO® Score y Prevención de Lavado de Dinero** - *RCC-FS-PLD* - [ver aquí](https://github.com/APIHub-CdC/rcc-ficoscore-pld-simulacion-client-php)
* **Reporte de Cédito Consolidado con FICO® Score** - *RCC-FS* - [ver aquí](https://github.com/APIHub-CdC/rcc-ficoscore-simulacion-client-php)
* **Reporte de Cédito Consolidado** - *RCC* - [ver aquí](https://github.com/APIHub-CdC/rcc-simulacion-client-php)
* **Reporte de Cédito para Persona Moral** - *RCCPM* - [ver aquí](https://github.com/APIHub-CdC/rcc-pm-simulacion-client-php)
* **Reporte de Cédito** - *RC* - [ver aquí](https://github.com/APIHub-CdC/rc-simulacion-client-php)
* **FICO® Score** - *FS* - [ver aquí](https://github.com/APIHub-CdC/ficoscore-simulacion-client-php)

## Requisitos

PHP 7.1 ó superior

### Dependencias adicionales

- Se debe contar con las siguientes dependencias de PHP:
  - ext-curl
  - ext-mbstring
- En caso de no ser así, para linux use los siguientes comandos

```sh
#ejemplo con php en versión 7.3 para otra versión colocar php{version}-curl
apt-get install php7.3-curl
apt-get install php7.3-mbstring
```

- Composer [vea como instalar][1]

## Instalación

Ejecutar: `composer install`

## Guía de inicio

### Paso 1. Agregar el producto a la aplicación

Al iniciar sesión seguir los siguientes pasos:

1.  Dar clic en la sección "**Mis aplicaciones**".
2.  Seleccionar la aplicación.
3.  Ir a la pestaña de "**Editar '@tuApp**' ".
    <p align="center">
      <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/edit_applications.jpg" width="900">
    </p>
4.  Al abrirse la ventana emergente, seleccionar el producto.
5.  Dar clic en el botón "**Guardar App**":
    <p align="center">
      <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/selected_product.jpg" width="400">
    </p>

### Paso 2. Preparar peticiones

Es importante contar con el setUp() en cada uno de los test, que se encargará de inicializar la petición. Por tanto, se debe modificar la URL (**the_url**); y la API KEY (**your_x_api_key**).

> **NOTA:** Para más ejemplos de cada API, consulte las debidas colecciones de Postman.

Los proyectos de simulación se encuentran en clases test diferentes, cada uno es agregado como dependencia en el **composer.json**. Las instrucciones para armar cada petición se encuentran en:

* **Reporte de Cédito Consolidado con FICO® Score y Prevención de Lavado de Dinero** - [ver aquí](https://github.com/APIHub-CdC/rcc-ficoscore-pld-simulacion-client-php)
* **Reporte de Cédito Consolidado con FICO® Score** - [ver aquí](https://github.com/APIHub-CdC/rcc-ficoscore-simulacion-client-php)
* **Reporte de Cédito Consolidado** - [ver aquí](https://github.com/APIHub-CdC/rcc-simulacion-client-php)
* **Reporte de Cédito para Persona Moral** - [ver aquí](https://github.com/APIHub-CdC/rcc-pm-simulacion-client-php)
* **Reporte de Cédito** - [ver aquí](https://github.com/APIHub-CdC/rc-simulacion-client-php)
* **FICO® Score** - [ver aquí](https://github.com/APIHub-CdC/ficoscore-simulacion-client-php)

### Paso 3. Ejecutar las pruebas unitarias

Teniendo los pasos anteriores ya solo falta ejecutar las prueba unitarias, con el siguiente comando:

```sh
./vendor/bin/phpunit
```

---
[CONDICIONES DE USO, REPRODUCCIÓN Y DISTRIBUCIÓN](https://github.com/APIHub-CdC/licencias-cdc)

[1]: https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos
