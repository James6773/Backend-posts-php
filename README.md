# Backend-posts-php
### ***Por: Santiago Ochoa Montoya - PREELEC2202PC-TDS0032-S30***  
##### ***(Código fuente ubicado en la rama "master")***  

##### ________________________________________________________________________________________________________________________________________________
***1. CategoryController:***
  
* GET: /api/category/list  
Permite listar todas las categorías creadas. 

* POST: /api/category/store  
Permite crear una nueva categoría.  

* PUT: /api/category/update/:id  
Permite actualizar una categoría existente por su id. 

* DELETE: /api/category/destroy/:id  
Permite eliminar definitivamente una categoría existente por su id. 

***2. UserController:***

* GET: /api/user/list  
Permite listar todos los usuarios guardados. 

* POST: /api/user/store  
Permite guardar un nuevo usuario.  

* PUT: /api/user/update/:id  
Permite actualizar un usuario existente por su id. 

* DELETE: /api/user/destroy/:id  
Permite eliminar definitivamente un usuario existente por su id. 

***3. PostController:***

* GET: /api/post/list  
Permite listar todos los posts creados. 

* POST: /api/post/store  
Permite crear un nuevo post.  

* PUT: /api/post/update/:id  
Permite actualizar un post existente por su id. 

* DELETE: /api/post/destroy/:id  
Permite eliminar definitivamente un post existente por su id. 

***4. AccessTokenController:***

* GET: /api/accessToken/get/:id  
Permite obtener un token de acceso con el id de un usuario.


