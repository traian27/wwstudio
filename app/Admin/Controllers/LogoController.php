<?php

namespace App\Admin\Controllers;

use App\Models\Logo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LogoController extends AdminController
{
    protected $title ='Logo';

    protected function grid()
    {
        $grid = new Grid(new Logo());

        $grid->column('id', __('Id'));
        $grid->column('logo', __('logo'));
        $grid->column('seo', __('seo'));
        $grid->column('position', __('position'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Logo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('logo', __('logo'));
        $show->field('seo', __('seo'));
        $show->field('position', __('position'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Logo());

        $form->image('logo', 'logo');
        $form->text('seo', __('seo'));
        $form->select('position', 'position')->options([1 => 'header', 2 => 'footer 1', 3 => 'footer 2']);

        return $form;
    }
}
