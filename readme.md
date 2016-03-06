# Website for valgeranna puhkekeskus

Authors{Risto Pärnapuu,
        Helena Talimaa,
        Kadi Rõmmel}

## [Official Wiki](https://github.com/Ristop/valgeranna/wiki/Projektiplaan)

# How to deploy laravel application

After cloning the repository, install composer, node.js and npm (comes with node.js but needs updating).
If installed run following commands while in project directory (be sure that all modules are installed successfully).
    
    1. composer install
    2. npm install
    
# Project structure

| Location        | What for|
|:-------------|:-------------|
|app/Post|Database model for the posts that are displayed on the page.|
|app/Http/Controllers|Controllers for the pages.|
|app/Http/routes|Project route file for routing to different pages.|
|config/database.php|Database configuration file.|
|public|The folder that the end user sees on a server|
|resources/assets/sass|If you want to change main.css file, change resources/assets/sass/main.sass instead! And use gulp or gulp watch to compile to css file.|
|resources/views|All the html files|
|resources/views/layout|All the layout files for the views.|