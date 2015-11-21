<?php
// Usage => Action::run('breadcrumb');
Action::add('breadcrumb', function () {

    // Configuration data
    $config = Config::get('plugins.breadcrumb');
    // Get current URI segments
    $paths = Url::getUriSegments();
    // Count total paths
    $total_paths = count($paths);
    // Path lifter
    $lift = "";
    // Breadcrumb's data
    $data = array();

    for ($i = 0; $i < $total_paths; $i++) {
        $lift .= '/' . $paths[$i];
        $page = Pages::getPage(file_exists(STORAGE_PATH . '/pages/' . $lift . '/index.md') || file_exists(STORAGE_PATH . '/pages/' . $lift . '.md') ? $lift : '404');
        $data[Url::getBase() . $lift] = array(
            'title'   => $page['title'],
            'current' => rtrim(Url::getCurrent(), '/') === rtrim(Url::getBase() . $lift, '/'),
        );
    }
    $template = Template::factory(THEMES_PATH . '/' . Config::get('system.theme'));
    $template->display('/plugins/breadcrumb/breadcrumb.tpl', array(
        'home'   => rtrim(Url::getCurrent(), '/') === rtrim(Url::getBase(), '/') ? true : Url::getBase(),
        'config' => $config,
        'branch' => $data,
    ));

});