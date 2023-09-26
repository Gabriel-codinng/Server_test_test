
        <?php
        require "src/models/Router.php";
        require "controller/indexController.php";

        $app = new Router();
        $controller_test = new IndexController();

        $app->get("/hello", [IndexController::class, 'helloWorld']);

        $app->run($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

        // echo "<pre>";
        //     var_dump($_REQUEST);
        // echo "<pre>";

        // echo "<pre>";
        //     var_dump($_SERVER);
        // echo "<pre>";

        // phpinfo()
        ?>