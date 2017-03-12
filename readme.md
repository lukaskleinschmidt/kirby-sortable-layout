# Kirby Sortable Layout
Use the blueprint title as the module title.  
The `template.php` is a copy of the [modules template](https://github.com/lukaskleinschmidt/kirby-sortable/blob/master/sortable/layouts/module/template.php). The template could be omitted if the [base template](https://github.com/lukaskleinschmidt/kirby-sortable/blob/master/sortable/layouts/base/template.php) is sufficient.

## Installation
To install the plugin, please put it in the `site/plugins` directory.  
The plugin folder must be named `sortable-layout`.

```
site/plugins/
    sortable-layout/
        sortable-layout.php
        ...
```

## Blueprint
After installing the plugin you can use the new `custom` layout in your blueprints.

```yml
fields:
  title:
    label: Title
    type: text

  modules:
    label: Modules
    type:  modules

    layout:  custom
  ...
```
