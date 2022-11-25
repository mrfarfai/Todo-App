<?php
    $link = '
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    ';

    $script = '
      <script src="script.js"></script>
    ';

    $title = "- Todo List";

    $content = '
      <div class="wrapper">
        <header class="header_title">Todo App</header>
            <div class="inputField">
                 <input type="text" placeholder="Add your new todo">
                 <button><i class="fas fa-plus"></i></button>
            </div>
            <ul class="todoList">
                <!-- data are comes from local storage -->
            </ul>
            <div class="footer">
                <span class="footer_couter">You have <span class="pendingTasks"></span> pending tasks</span>
                 <button>Clear All</button>
            </div>
      </div>
    ';

    require '../sidebar.php';
?>

