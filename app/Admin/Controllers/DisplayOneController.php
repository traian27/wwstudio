<?php

namespace App\Admin\Controllers;

use App\Models\DisplayOne;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DisplayOneController extends AdminController
{
    protected $title ='DisplayOne';

    protected function grid()
    {
        $grid = new Grid(new DisplayOne());

        $grid->column('id', __('Id'));
        $grid->column('title', __('title'));
        $grid->column('sub_title', __('sub_title'));
        $grid->column('description', __('description'));
        $grid->column('link_title', __('link_title'));
        $grid->column('link_url', __('link_url'));
        $grid->column('image', __('image'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(DisplayOne::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('title'));
        $show->field('sub_title', __('sub_title'));
        $show->field('description', __('description'));
        $show->field('link_title', __('link_title'));
        $show->field('link_url', __('link_url'));
        $show->field('image', __('image'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new DisplayOne());

        $form->image('image', 'image');
        $form->text('title', __('title'));
        $form->text('sub_title', __('sub_title'));
        $form->textarea('description', __('description'));
        $form->text('link_title', __('link_title'));
        $form->text('link_url', __('link_url'));
        $form->text('icon', __('icon'));
        $form->select('display', 'display')->options([1 => '1', 2 => '2', 3 => '3',  4 => '4', 5 => '5']);


        return $form;
    }
}
