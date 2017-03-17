<?php

require 'init.php';
require 'database.php';


// Re-usable component implementing counter
class Finder extends \atk4\ui\Columns
{
    public $route = [];

    public function setModel(\atk4\data\Model $model, $route = [])
    {
        parent::setModel($model);

        $this->addClass('internally celled');

        // lets add our first table here
        $table = $this->addColumn()->add(['Table', 'header'=>false, 'very basic selectable'])->addStyle('cursor', 'pointer');
        $table->setModel($model, [$model->title_field]);

        $selections = isset($_GET[$this->name]) ? explode(',', $_GET[$this->name]) : [];
        //$selections[] = 14664;
        //$selections[] = 14665;

        $path = [];
        $js_reload = new \atk4\ui\jsReload($this);
        $js_reload->url = new \atk4\ui\jsExpression("[]+'&".$this->name."='+[]+[]", [
            $js_reload->cb->getURL(),
            $path ? (join(',', $path).',') : '',
            new \atk4\ui\jsExpression('$(this).data("id")')
        ]);
        $table->on('click', 'tr', $js_reload);


        foreach($selections as $id) {
            $path[] = $id;
            $model->load($id);
            $ref = array_shift($route);
            if (!$route) {
                $route[] = $ref; // repeat last route
            }

            if (!$model->hasRef($ref)) {
                break; // no such route
            }

            $model = $model->ref($ref);

            $table = $this->addColumn()->add(['Table', 'header'=>false, 'very basic selectable'])->addStyle('cursor', 'pointer');
            $table->setModel($model, [$model->title_field]);

            $js_reload = new \atk4\ui\jsReload($this);
            $js_reload->url = new \atk4\ui\jsExpression("[]+'&".$this->name."='+[]+[]", [
                $js_reload->cb->getURL(),
                $path ? (join(',', $path).',') : '',
                new \atk4\ui\jsExpression('$(this).data("id")')
            ]);
            $table->on('click', 'tr', $js_reload);
        }

        return $this->model;
    }

}

$m = new File($db);
$m->addExpression('name2', 'if([is_folder], concat([name], " (", [count], ")"), [name])')
    ->caption = 'Name';
$m->title_field = 'name2';
$m->addCondition('parent_folder_id', null);
$m->setOrder('is_folder desc, name');


$layout->add(['Header', 'Testing table']);

$vp = $layout->add('VirtualPage')->set(function($vp) use($m) {
    $m->action('delete')->execute();
    $m->importFromFilesystem(dirname(dirname(__FILE__)));
    $vp->add(['Button', 'Import Complete', 'big green fluid'])->link('multitable.php');;
    $vp->js(true)->closest('.modal')->find('.header')->remove();
});



$layout->add(['Button', 'Import Filesystem', 'top attached'])->on('click', new \atk4\ui\jsModal('Now importing ... ', $vp));

$layout->add(new Finder('bottom attached'))
    ->addClass('top attached segment')
    ->setModel($m, ['SubFolder'])
    ;
