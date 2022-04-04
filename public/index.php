<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\AuthorsController;
use coding\app\controllers\CategoryController;
use coding\app\controllers\PublishersController;
use coding\app\controllers\BooksController;

use coding\app\controllers\UsersController;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__)); //createImmutable(__DIR__);
$dotenv->load();

$config = array(
  'servername' => $_ENV['DB_SERVER_NAME'],
  'dbname' => $_ENV['DB_NAME'],
  'dbpass' => $_ENV['DB_PASSWORD'],
  'username' => $_ENV['DB_USERNAME']
);
$system = new AppSystem($config);

/** web routes  */


Router::get('/categories', [CategoriesController::class, 'listAll']);
Router::get('/add_category', [CategoriesController::class, 'create']);
Router::get('/edit_category/{id}', [CategoriesController::class, 'edit']);
Router::get('/remove_category', [CategoriesController::class, 'remove']);
Router::post('/save_category', [CategoriesController::class, 'store']);
Router::post('/update_category', [CategoriesController::class, 'update']);
// authors  //
Router::get('/list_authors', [AuthorsController::class, 'listAll']);
Router::get('/add_author', [AuthorsController::class, 'add_author']);
// Router::get('/edit_author', [AuthorsController::class, 'editauthor']);
Router::get('/remove_author', [AuthorsController::class, 'remove']);
Router::post('/save_author', [AuthorsController::class, 'store']);
Router::post('/update_author', [AuthorsController::class, 'update']);
// publishers //
Router::get('/list_publishers', [PublishersController::class, 'listAll']);
Router::get('/add_publisher', [PublishersController::class, 'add_publisher']);
// Router::get('/edit_publisher', [PublishersController::class, 'editpublisher']);
Router::get('/remove_publisher', [PublishersController::class, 'remove']);
Router::post('/save_publisher', [PublishersController::class, 'store']);
Router::post('/update_publisher', [PublishersController::class, 'update']);
// books  //
Router::get('/list_books', [BooksController::class, 'listAll']);
Router::get('/add_book', [BooksController::class, 'add_book']);
// Router::get('/edit_book', [BooksController::class, 'editbook']);
Router::get('/remove_book', [BooksController::class, 'remove']);
Router::post('/save_book', [BooksController::class, 'store']);
Router::post('/update_book', [BooksController::class, 'update']);

/** end of web routes */



$system->start();
