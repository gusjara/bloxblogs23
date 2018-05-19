Hasta el momento vimos la nueva version del Symfony, que esconde mucho su funcionamiento.!!

La idea ahora es que instalen una version mas vieja de symfony. 2.3.* para que puedan ver el funcionamiento de su estructura completamente.

Esta es la Documentacion: https://symfony.com/doc/2.3/index.html
para instalarlo composer "create-project symfony/framework-standard-edition my_project_name 2.3.* "

Luego, instalan el bundle: https://github.com/MWSimple/AdminCrudBundle , la version 26 que es apta para symfony 2.3. Para ccrear los crud ABM de las entidades.

Crean las entidades que ya Tienen, CATEGORIA, POST, TAGS, IMAGEN
Crean los CRUD de estos. Y verfican que funcione el ABM.
Instalan el FOSUserBundle:  https://symfony.com/doc/master/bundles/FOSUserBundle/index.html
Para ingresar al sistema deberan crear un usuario. Para esto utilizan el DoctrineFixtureBundle: https://symfony.com/doc/master/bundles/DoctrineFixturesBundle/index.html


Ya les comparti los Repositorios. Cualquier duda estoy conectado hasta las 13 Horas.
Despues de esa hora les voy a contestar en cuanto pueda.! 
Saludos y buen finde.!!!