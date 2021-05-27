<?php

namespace App\Admin\Controllers;

use App\Models\ContactForm;
use App\Models\DisplayOne;
use App\Models\DisplaysThree;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FormsController extends AdminController
{
    protected $title ='FormsController';

    protected function grid()
    {
        $grid = new Grid(new ContactForm());

        $grid->column('id', __('Id'));
        $grid->column('name', __('name'));
        $grid->column('email', __('email'));
        $grid->column('phone', __('phone'));
        $grid->column('message', __('message'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(ContactForm::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('name'));
        $show->field('email', __('email'));
        $show->field('phone', __('phone'));
        $show->field('message', __('message'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new ContactForm());

        $form->text('name', __('name'));
        $form->text('email', __('email'));
        $form->text('phone', __('phone'));
        $form->text('message', __('message'));

        return $form;
    }
}
