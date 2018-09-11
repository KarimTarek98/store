<div class="container">
    <a href="/usersgroups/create" class="button"><i class="fa fa-plus"></i><?= $text_new_item ?></a>
    <table class="data">
        <thead>
            <th><?= $text_table_group_name ?></th>
            <th><?= $text_table_control ?></th>
        </thead>
        <tbody>
        <?php if (false !== $groups): foreach ($groups as $group): ?>
            <tr>
                <td><?= $group->GroupName ?></td>
                <td>
                    
                </td>
            </tr>
        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>
