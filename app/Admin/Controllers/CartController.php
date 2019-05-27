<?php

namespace App\Admin\Controllers;

use App\Model\CartModel;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class CartController extends Controller
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
        $grid = new Grid(new CartModel);

        $grid->cart_id('Cart id');
        $grid->goods_id('Goods id');
        $grid->buy_number('Buy number');
        $grid->user_id('User id');
        $grid->create_time('Create time');
        $grid->cart_status('Cart status');

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
        $show = new Show(CartModel::findOrFail($id));

        $show->cart_id('Cart id');
        $show->goods_id('Goods id');
        $show->buy_number('Buy number');
        $show->user_id('User id');
        $show->create_time('Create time');
        $show->cart_status('Cart status');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new CartModel);

        $form->number('cart_id', 'Cart id');
        $form->number('goods_id', 'Goods id');
        $form->number('buy_number', 'Buy number');
        $form->number('user_id', 'User id');
        $form->number('create_time', 'Create time');
        $form->switch('cart_status', 'Cart status')->default(1);

        return $form;
    }
}
