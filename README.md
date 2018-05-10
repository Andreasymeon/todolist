English (francais en dessous)
------------------------
 
# To-do list

PHP, jQuery, JSON.

Pair coding project done in 3 days with Glenn Carroy.

## Deadline
4 days.

Creates a basic and reliable task management tool. It contains two screens:

- screen 1: a small form to add a task.
- screen 2: the list of tasks to be done, with for each task, a checkbox. When a task is done, we check the task and then press a "Save" button that refreshes the list by blocking the completed task and putting it in the "archived" area.

! [Prototype](todolist.png)

## Primary objective

- "Form.php" file: When processing the form, after sanitization and validation, it is necessary to store the JSON format tasks in a TXT file (for example `todo.json`)
- "content.php" file: it reads the contents of the json file, and displays each entry in the correct zone ("To Do" or "Archive") with the necessary html content to have a checkbox.

## Bonus
- Via Javascript, hide the "Save" button and save the list via ajax when a checkbox changes state (selected / unselected).
- Via Javascript, can rearrange the vertical order of the tasks, via drag and drop.

---------

Francais
-----------------

# To-do list

PHP, jQuery, JSON.

Pair coding avec Glenn Carroy.

## Deadline
4 jours.

Crée un outil de gestion de tâches basique et fiable. Il contient deux écrans :  

- écran 1 : un petit formulaire permettant d'ajouter une tâche.
- écran 2 : la liste des tâches à faire, avec pour chaque tâche, une checkbox. Lorsqu'une tâche est effectuée, on coche la tâche puis on appuye sur un bouton "Enregistrer" qui rafraichit la liste en barrant la tâche terminée et en la mettant dans la zone "archivée".

![Prototype](todolist.png)

## Objectif principal

- Fichier "formulaire.php" : Lorsqu'on traite le formulaire il faut, après sanitization et validation, stocker les tâches au format JSON dans un fichier TXT ( par exemple `todo.json`)
- Fichier "contenu.php" : il lit le contenu du fichier json, et affiche chaque entrée dans la bonne zone ("A Faire" ou "Archive") avec le contenu html nécessaire pour avoir une checkbox.

## Bonus
- Via Javascript, cacher le bouton "Enregistrer" et sauvegarder la liste via ajax lorsqu'une checkbox change d'état (selected / unselected).
- Via Javascript, pouvoir réorganiser l'ordre vertical des tâches, via drag and drop.
