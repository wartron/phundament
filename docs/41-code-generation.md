Code Generation
===============

Backend CRUD module
-------------------

Phundament allows you to use you custom designed database schema as the base for CRUD admin interfaces.
To kickstart you application backend create a new `crud` module with Yii's built-in tools

> If you would like to create an extension module in a composer package, please start by [creating an extension](44-extension-development.md) first
> push it to your repo and install it with `composer require --prefer-source name/package`. 
> Afterwards generate your code directly into `vendor/name/package` and use this repository for development.



Create new table migration
```
./yii migrate/create create_user_gizmo_table
```

Build migration File
```
```

Create Model
```
./yii gii/giiant-model --tableName="gizmo" --modelClass="Gizmo"
```


Create admin module crud.
```
./yii gii/giiant-crud --modelClass="app\models\Gizmo" --controllerClass="app\modules\admin\controllers\GizmoController" --searchModelClass="app\modules\admin\models\GizmoSearch" --viewPath="modules\admin\views"
```



See [Giiant documentation](https://github.com/schmunk42/yii2-giiant/blob/master/README.md) for an [example with Sakila demo database](https://github.com/schmunk42/yii2-giiant/blob/master/docs/generate-sakila-backend.md).

I18N
----

Messages for Translations

tbd

HTML-Documentation
------------------

Install required packages

```
./yii app/setup-docs
```

Generate application documentation to `docs-html`

```
./yii app/generate-docs
```


