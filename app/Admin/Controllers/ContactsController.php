<?php

namespace App\Admin\Controllers;

use App\Models\Contact;
use App\Models\DisplayOne;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContactsController extends AdminController
{
    protected $title ='Contacts';

    protected function grid()
    {
        $grid = new Grid(new Contact());

        $grid->column('text', __('text'));
        $grid->column('url', __('url'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Contact::findOrFail($id));

        $show->field('text', __('text'));
        $show->field('url', __('url'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Contact());

        $form->text('text', __('text'));
        $form->text('url', __('url'));

        return $form;
    }
}
