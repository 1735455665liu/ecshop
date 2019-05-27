<?php

namespace App\Admin\Controllers;

use App\Model\OrderModel;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class OrderController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OrderModel);

        $grid->order_id('Order id');
        $grid->order_no('Order no');
        $grid->user_id('User id');
        $grid->order_amount('Order amount');
        $grid->pay_status('Pay status');
        $grid->pay_type('Pay type');
        $grid->order_status('Order status');
        $grid->order_text('Order text');
        $grid->create_time('Create time');
        $grid->update_time('Update time');
        $grid->status('Status');

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
        $show = new Show(OrderModel::findOrFail($id));

        $show->order_id('Order id');
        $show->order_no('Order no');
        $show->user_id('User id');
        $show->order_amount('Order amount');
        $show->pay_status('Pay status');
        $show->pay_type('Pay type');
        $show->order_status('Order status');
        $show->order_text('Order text');
        $show->create_time('Create time');
        $show->update_time('Update time');
        $show->status('Status');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new OrderModel);

        $form->number('order_id', 'Order id');
        $form->text('order_no', 'Order no');
        $form->number('user_id', 'User id');
        $form->decimal('order_amount', 'Order amount');
        $form->switch('pay_status', 'Pay status')->default(1);
        $form->switch('pay_type', 'Pay type');
        $form->switch('order_status', 'Order status')->default(1);
        $form->text('order_text', 'Order text');
        $form->number('create_time', 'Create time');
        $form->number('update_time', 'Update time');
        $form->switch('status', 'Status')->default(1);

        return $form;
    }
}
