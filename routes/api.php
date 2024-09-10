<?
use Bitrix\Main\Routing\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    //Интернет магазин
    $routes->post('/api/v1/catalog/', fn() => (new \Gipercube\Api\Controllers\Shop\Catalog())->runAction('list')); 
    // $routes->post('/api/delBasket/', fn() => (new \Cube\Controllers\Shop\Basket())->runAction('delFromBasket'));
    // $routes->post('/api/addFavorite/{elementId}', fn() => (new \Cube\Controllers\Shop\Favorites())->runAction('addFavorite')); 
    // $routes->post('/api/removeFavorite/{elementId}', fn() => (new \Cube\Controllers\Shop\Favorites())->runAction('removeFavorite')); 
    // $routes->post('/api/catalog/', fn() => (new \Cube\Controllers\Shop\Catalog())->runAction('catalog'));
    // $routes->post('/api/getFavotiteTotal/', fn() => (new \Cube\Controllers\Shop\Favorites())->runAction('getTotal'));
    // $routes->post('/api/getFavotiteTotal/', fn() => (new \Cube\Controllers\Shop\Favorites())->runAction('getTotal'));
    // $routes->post('/api/UpdateBasket/', fn() => (new \Cube\Controllers\UpdateBasket())->runAction('updateOrder'));
    // $routes->post('/api/cancelOrder/{accountNumber}', fn() => (new \Cube\Controllers\Shop\Order())->runAction('cancelOrder'));
    // $routes->post('/api/successOrder/{accountNumber}', fn() => (new \Cube\Controllers\Shop\Order())->runAction('successOrder'));

    // //Авторизация
    // $routes->post('/api/registrate/', fn() => (new \Cube\Controllers\User())->runAction('register'));
    // $routes->post('/api/auth/', fn() => (new \Cube\Controllers\User())->runAction('login'));
    // $routes->post('/api/resetpass/', fn() => (new \Cube\Controllers\User())->runAction('passwordSend'));

    // //Формы
    // $routes->post('/api/feedback/{formId}', fn() => (new \Cube\Controllers\Forms\Feedback())->runAction('add'));
    // $routes->post('/api/survey/{formId}', fn() => (new \Cube\Controllers\Forms\Survey())->runAction('add'));
    // $routes->post('/api/subscribe/{formId}', fn() => (new \Cube\Controllers\Forms\Subscribe())->runAction('subscribe'));
    // $routes->post('/api/subscribeToItem/', fn() => (new \Cube\Controllers\Forms\Subscribe())->runAction('subscribeItem'));
    // $routes->post('/api/quantitynone/', fn() => (new \Cube\Controllers\Forms\Subscribe())->runAction('quantitynone'));

    // $routes->post('/api/sortCatalog/', fn() => (new \Cube\Controllers\Sort())->runAction('sort')); 

    // $routes->post('/api/removeFavorite/', fn() => (new \Cube\Controllers\Favorites())->runAction('removeFavorite'));
};