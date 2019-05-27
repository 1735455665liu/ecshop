<?php

namespace App\Admin\Controllers;

use App\Model\User\UserInfo;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class UserController extends Controller
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
        $grid = new Grid(new UserInfo);

        $grid->user_id('User id');
        $grid->user_name('User name');
        $grid->user_email('User email');
        $grid->user_tel('User tel');
        $grid->user_pwd('User pwd');
        $grid->user_code('User code');
        $grid->error_rum('Error rum');
        $grid->last_error_time('Last error time');
        $grid->create_time('Create time');

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
        $show = new Show(UserInfo::findOrFail($id));

        $show->user_id('User id');
        $show->user_name('User name');
        $show->user_email('User email');
        $show->user_tel('User tel');
        $show->user_pwd('User pwd');
        $show->user_code('User code');
        $show->error_rum('Error rum');
        $show->last_error_time('Last error time');
        $show->create_time('Create time');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new UserInfo);

        $form->text('user_name', 'User name');
        $form->text('user_email', 'User email');
        $form->text('user_tel', 'User tel');
        $form->text('user_pwd', 'User pwd');
        $form->text('user_code', 'User code');
        $form->text('error_rum', 'Error rum');
        $form->text('last_error_time', 'Last error time');
        $form->number('create_time', 'Create time');

        return $form;
    }
}
