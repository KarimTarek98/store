<?php
//    foreach ($employees as $employee)
//    {
//        var_dump($employee);
//    }
//?>
<style type="text/css">

    div.wrapper div.employees
    {
        margin: 0 auto;
        width: 780px;
    }
    div.wrapper div.employees table
    {
        width: 780px;
        margin: 20px 20px 0 0;
        border-collapse: collapse;
    }
    div.wrapper div.employees table thead th
    {
        text-align: left;
        padding: 5px;
        border-bottom: 1px solid #e4e4e4;
        border-right: 2px solid #e4e4e4;
        color: #666;
    }
    div.wrapper div.employees table thead th:last-of-type
    {
        border-right: none;
    }
    div.wrapper div.employees table tbody td
    {
        text-align: left;
        padding: 5px;
        border-bottom: 1px solid #e4e4e4;
        color: #666;
    }
    div.wrapper div.employees table tbody tr:nth-child(2n) td
    {
        background: #f1f1f1;
    }
    div.wrapper div.employees table tbody td a:link,
    div.wrapper div.employees table tbody td a:visited
    {
        color: #0ba1ec;
    }
    div.wrapper div.employees a.add
    {
        background: #408eba;
        color: #fff;
        padding: 10px;
        text-decoration: none;
    }
    div.wrapper div.employees table i
    {
        font-size: 18px;
        margin: 3px;
    }
</style>
<div class="wrapper">
    <?php
    if (isset($_SESSION['message']))
    {
        ?>
        <p class="message <?= isset($error) ? 'error' : '' ?>"><?= $_SESSION['message'] ?></p>
        <?php
        unset($_SESSION['message']);
    }
    ?>
    <div class="employees">
        <a  class="add" href="/employee/add"><i class="fa fa-plus"></i><?= $text_add_employee ?></a>
        <table class="data">
            <thead>
                <tr>
                    <th><?= $text_employee_name ?></th>
                    <th><?= $text_employee_age ?></th>
                    <th><?= $text_employee_address ?></th>
                    <th><?= $text_employee_salary ?></th>
                    <th><?= $text_employee_tax ?></th>
                    <th><?= $text_controls ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (false !== $employees)
                    {
                        foreach ($employees as $employee)
                        {
                ?>
                <tr>
                    <td><?= $employee->name ?></td>
                    <td><?= $employee->age ?></td>
                    <td><?= $employee->address ?></td>
                    <td><?= $employee->salary ?></td>
                    <td><?= $employee->tax ?></td>
                    <td>
                        <a href="/employee/edit/<?= $employee->id ?>"><i class="fa fa-edit"></i></a>
                        <a href="/employee/delete/<?= $employee->id ?>" onclick="if(!confirm('<?= $text_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php
                        }
                    } else
                    {
                ?>
                    <td colspan="6">عفوا ، لا يوجد موظفين.</td>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

