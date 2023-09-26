<?php

namespace App\Admin\Controllers;

use App\Models\SendingList;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SendingListController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SendingList';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SendingList());
        $grid->column('id',__('Id'));
        $grid->column('name',__('Name'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(SendingList::findOrFail($id));        
        $show->field('name',__('Name'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SendingList());
        $form->text('name',__('Name'))->required();
        $form->number('creator_id', __('Creator'))->readonly()->value(auth()->user()->id);

        return $form;
    }
}
