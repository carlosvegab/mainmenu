
# Main Menu

A simple and easy main menu for Laravel using Bootstrap5.


[![MIT License](https://img.shields.io/apm/l/atomic-design-ui.svg?)](https://github.com/tterb/atomic-design-ui/blob/master/LICENSEs)


## Author

- [Carlos Vega](https://www.carlosvega.net)


## Installation

Install Mainmenu with Composer

```bash
  composer require cvega/mainmenu
```

And run some Laravel Artisan commands to publish content

```bash
  php artisan vendor:publish --provider="Cvega\Mainmenu\src\MainmenuServiceProvider.php" --tag="mainmenu_config"
  php artisan vendor:publish --provider="Cvega\Mainmenu\src\MainmenuServiceProvider.php" --tag="mainmenu_views_components"
  php artisan vendor:publish --provider="Cvega\Mainmenu\src\MainmenuServiceProvider.php" --tag="mainmenu_migrations"
  php artisan vendor:publish --provider="Cvega\Mainmenu\src\MainmenuServiceProvider.php" --tag="mainmenu_seeders"
```

You need to use Bootstrap 5.
## Documentation

After installed, you will have the following files:

	- a migration in your "migrations" folder, with the schema for the "mainmenu" table
	- a seeder in your "seeders" folder with some stuff data, you can change it for yours
	- a component called "mainmenu" located in resources/views/components 
	- a component class called "MainmenuComponent.php" in app/View/Components.

How Can You Use This Menu?

You need to have an array with your menu structure:

```bash
use Cvega\Mainmenu\Http\Controllers\MainmenuController;

public function some_method_in_your_controller()
{
    $mainmenu = new MainmenuController(); // retrieving menu structure from the Database

    return view(YOUR BLADE TEMPLATE, [
        'menu' => $mainmenu->main_menu,
    ]);
}
```

This way you will have a $menu variable in your template and you will be able to invoke the component:

```bash
<x-mainmenu :menu=$menu />
```

Make sure you are using Bootstrap 5.



