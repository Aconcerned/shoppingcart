# README 

<img class="center" src="https://bertofern.files.wordpress.com/2018/08/laravel-framework-logo-c10176ec8c-seeklogo-com.png?w=736">

## Shopping Cart con panel de admin

Es una página web creada en Laravel, creada por los estudiantes de la Universidad Nueva Esparta, en la materia complementaria, realizada por **JAVIER VILLARROEL**, **JEAN ESBER**, **JESUS GONZALES**. Funciona como un carrito de compras y posee dos tipos de usuarios, administradores y clientes.

##Clientes
Los clientes tienen acceso a la vista principal de menú, en donde pueden ver y seleccionar los productos para añadirlos al carrito. Luego, dentro del carrito, el cliente puede puede agragar o disminuir la cantidad de articulos que desean comprar, ademas de poder tener la opcion de eliminarlo si es deseado.

##Administrador
El administrador tinen la posibilidad de ver los clientes, modificarlos, eliminarlos. Ademas tiene la opcion de poder ver que producto y en cunta cantidad el cliente adquiere dicho articulo.
Posee tambien la posibilidad de inspeccionar las graficas que infrman sobre los tipos de productos que contamos en el inventario y los precios de cada producto.

<img class="center" src="https://www.linuxadictos.com/wp-content/uploads/cambiar-de-usuario-en-linux-830x400.jpg">

##Middleware
Actualmente contamos con dos Mddleswares:
- AUTH: Este Middleware permite crear las seciones y crear los usuarios sencillos (clientes)
- ADMIN: Este Middleware perite crear las seciones y crear los usuarios complejos (administradosres) y filtra los usuarios sencillos.

##Carrito (vista usuario)
Aqui podemos observar la vista principal de la tienda virtual, donde se encentran todos los articulos disponibles.

![CARRITO.jpg](https://s3-ap-northeast-1.amazonaws.com/torchpad-production/wikis/13056/a3AFF1txSzGS5W2yzEKB_CARRITO.jpg)

En esta vista podemos observar como luciria el carrito de compras luego de añadir todos los articulos.

![CARRITO1.jpg](https://s3-ap-northeast-1.amazonaws.com/torchpad-production/wikis/13056/vbkcVr2KS7OsP9DyVzs9_CARRITO1.jpg)

###Panel de administrador
En esta imgen podeos apreciar como lciria el dashbord del administrador

![ADMIN1.jpg](https://s3-ap-northeast-1.amazonaws.com/torchpad-production/wikis/13056/d9H4BiCuRXumPwPRXn8u_ADMIN1.jpg)

Agregar productos al sistema.

![ADMIN2.jpg](https://s3-ap-northeast-1.amazonaws.com/torchpad-production/wikis/13056/whZoUV6HTGCofM1k3TS2_ADMIN2.jpg)

Ver los productos que se agregaron al sistema y tener la opcion de eliminarlos.

![ADMIN3.jpg](https://s3-ap-northeast-1.amazonaws.com/torchpad-production/wikis/13056/UWn7IVTdmWIqo77VHQGw_ADMIN3.jpg)

Poder eliminar los usarios.

![ADMIN4.jpg](https://s3-ap-northeast-1.amazonaws.com/torchpad-production/wikis/13056/CYDvsVmdSE6vgVoC18ly_ADMIN4.jpg)

Podemos observar la grafica la cual nos indica el tipo de producto.

![ADMIN5.jpg](https://s3-ap-northeast-1.amazonaws.com/torchpad-production/wikis/13056/AWRxrPRyRvmBw9Uf3to9_ADMIN5.jpg)

Podemos observar la grafica la cual nos indica el precio del producto.

![ADMIN66.jpg](https://s3-ap-northeast-1.amazonaws.com/torchpad-production/wikis/13056/rJ2gkfUYTxGP7O4Whnfh_ADMIN66.jpg)
