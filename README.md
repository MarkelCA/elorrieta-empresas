# Elorrieta Empresas

Esta es una  extension de la web de [Elorrieta-Errekamari](https://elorrieta.hezkuntza.net/es/inicio)
 destinada a atraer a empresas a contratar alumnos del centro para practicas, o formación dual. 

Esta página ha sido realizada como proyecto final del ciclo superior de Desarrollo de Aplicaciones Web (DAW).

El objetivo principal de este proyecto es realizar el aplicativo de tal forma que sea fácil de editar y mantener al mismo tiempo que sea potente y escalable. Para eso se han decidido eliminar capas de complejidad como la base de datos o la utilización de frameworks de js o css para la elaboración del front-end.

Para la gestión de dependencias se utilizará Webpack. De esta forma se aumenta la eficiencia con los tiempos de carga, al tiempo que también se compilan todas las hojas de estilos, scripts y módulos instalados en un mismo fichero comprimido (main.js).

## Instalación

### `npm install`

Instala todos los módulos necesarios del proyecto.

### `npx webpack`

Compila todos los cambios realizados en el fichero main.js
