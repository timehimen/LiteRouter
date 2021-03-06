<?

require_once 'src/router.class.php';
use LiteRouter\Router\Router;

$router = new Router();

$router->get("/", function () {
    echo "Hello from router";
});

$router->get("/test", function ($request, $response) {
    $response->status(400)->send("Invalid url");
});

$router->get("/test/:animal", function ($request, $response) {
    $response->send("Animal is:  " . $request->getParam("animal"));
});

$router->get("**", function () {
    echo "404";
});

$router->post("/test", function ($request, $response) {
    require_once 'test_home.php';
});

$router->post("/test/:animal", function ($request, $response) {
    require_once 'test_home.php';
});