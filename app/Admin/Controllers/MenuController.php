<?php

namespace App\Admin\Controllers;

use App\Models\Menu;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MenuController extends AdminController
{
    protected $title ='Menus';

    protected function grid()
    {
        $grid = new Grid(new Menu());

        $grid->column('id', __('Id'));
        $grid->column('parent_id', __('Parent Menu'));
        $grid->column('menu', __('Menu'));
        $grid->column('menu_url', __('Menu Url'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Menu::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('parent_id', __('Parent Menu'));
        $show->field('menu', __('Menu'));
        $show->field('menu_url', __('Menu Url'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Menu());


        $form->select('parent_id', 'Parent Menu')
            ->options(Menu::get()
                ->pluck('menu', 'id'))
            ->default('menu');


        $form->text('menu', __('Menu'));
        $form->text('menu_url', __('Menu Url'));

        return $form;
    }
}
